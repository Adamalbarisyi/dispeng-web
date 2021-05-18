<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('m_skk');
        $this->load->model('m_employe');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['skk'] = $this->m_skk->getSkkVerif();

        // var_dump($data);
        // echo "</pre>";
        // die();
        // $this->load->view('admin/lhkpn/index',$data);
        $this->load->view('admin/skk/index', $data);
    }

    function preview($id)
    {
        $data['id'] = $this->m_skk->ambilId($id);

        $this->load->view('admin/skk/preview', $data);
    }

    public function verif()
    {
        $data['skk'] = $this->m_skk->getSkkProses();

        $this->load->view('admin/skk/verifSkk', $data);
    }
    public function download($file)
    {
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/SKK/' . $name);
        force_download($name, $data);
        redirect('admin/lhkpn/verif');
    }

    public function update_skk()
    {
        $id = $this->input->post('id_skk');
        $nip = $this->input->post('nip');
        $verivikator = $this->session->userdata('iduser');
        $name = $nip . '-VERIVED_Surat_Permintaan_SKK' . '-' . date('dmY');
        $config['upload_path'] = './assets/dokument/SKK'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size']     = 2000; // 3MB
        $config['file_name'] = $name;
        $this->upload->initialize($config);
        // var_dump($verivikator);
        // die();
        if (!empty($_FILES['new_file']['name'])) {
            if ($this->upload->do_upload('new_file')) {
                $file = $this->upload->data();
                $pdf = $file['file_name'];
                $data = $this->input->post('file');
                $path = './assets/dokument/SKK/' . $data;
                unlink($path);
                $data = array(
                    'file' => $pdf,
                    'status_proses' => 1,
                    'verifikator' => $verivikator
                );

                // var_dump($data);
                // die();
                $this->m_skk->update_skk('tbl_skk', $data, $id);

                $this->load->library('mailer');
                $dataperson = $this->m_employe->cek_user($nip);

                $email_penerima =  $dataperson->email;
                $subjek = "Pemberitahuan Verifikasi Surat SKK";
                $pesan = $pesan;
                $content = $this->load->view('content', array('pesan' => $pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
                $sendmail = array(
                    'email_penerima' => $email_penerima,
                    'subjek' => $subjek,
                    'content' => $content
                );

                $send = $this->mailer->send($sendmail);
                echo $this->session->set_flashdata('success', 'Data SKK berhasil diverifikasi');
                redirect('admin/skk');
            } else {
                echo '<script>alert(""File Yang Dimasukan Harus PDF Dan Ukuran MAX 2MB"");</script>';
                // echo '<script>setTimeout(function(){ alert("File Yang Dimasukan Harus PDF Dan Ukuran MAX 2MB"); }, 3000);';
                // redirect('user/user_lhkpn1');
            }
        } else {
            echo '<script>alert("FILE KOSONG");</script>';

            // redirect('user/user_lhkpn1');
        }
    }
}
