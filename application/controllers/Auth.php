<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('masuk') !=TRUE){
        //           $url=base_url();
        //           redirect($url);
        //       };
        $this->load->model('m_login');
        $this->load->model('m_user');
        $this->load->model('m_region');
        $this->load->library('upload');
        // $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $nip = strip_tags(stripslashes($this->input->post('nip', TRUE)));
        $password = strip_tags(stripslashes($this->input->post('password', TRUE)));
        $n = $nip;
        $p = $password;
        // var_dump($p);
        // die();
        $cek = $this->m_login->cekuser($n, $p);
        $a = $cek->num_rows();

        if ($a > 0) {
            $this->session->set_userdata('masuk', true);

            $cek_akses = $cek->row_array();
            $cek_akses['user_level'];

            if ($this->session->userdata('masuk') == true) {

                if ($cek_akses['user_level'] == '1') {
                    $this->session->set_userdata('akses', '1');
                    $iduser = $cek_akses['user_id'];
                    $user_nama = $cek_akses['user_nama'];
                    $this->session->set_userdata('iduser', $iduser);
                    $this->session->set_userdata('nama', $user_nama);
                }

                if ($cek_akses['user_level'] == '2') {
                    $this->session->set_userdata('akses', '2');
                    $iduser = $cek_akses['user_id'];
                    $user_nama = $cek_akses['user_nama'];
                    $this->session->set_userdata('iduser', $iduser);
                    $this->session->set_userdata('nama', $user_nama);
                } //Front Office

                if ($this->session->userdata('akses') == 1) {
                    redirect('admin/dashboard');
                } elseif ($this->session->userdata('akses') == 2) {
                    redirect('user/dashboard');
                }
            } else {
                echo $this->session->set_flashdata('warning', 'User Tidak ada');
                redirect('auth');
            }
        } else {
            echo $this->session->set_flashdata('danger', 'Username Atau Password Salah');
            redirect('auth');
        }
    }

    public function register()
    {
        $data['wilayah'] = $this->m_region->getRegion();
        $this->load->view('auth/register', $data);
    }

    public function forgotPassword()
    {
        $this->load->view('auth/passwords/email');
    }

    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('auth');
        redirect($url);
    }

    function change_password()
    {
        $this->load->view('auth/passwords/change');
    }

    function update_password()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');

        $pass = $this->input->post('password');
        $ulangi_pass = $this->input->post('ulangi_password');
        // var_dump($nip);
        // die();
        if ($pass != $ulangi_pass) {
            echo $this->session->set_flashdata('warning', 'Password Tidak Sama');
            redirect('auth/change_password');
        } else {
            $data = array(
                'password' => md5($pass)

            );
            // var_dump($data);
            // die();
            $this->m_user->update_password('tbl_user', $data, $nip);
            echo $this->session->set_flashdata('success', 'Ganti Password Berhasil');
        }
    }


    public function add_user()
    {
        $config['upload_path'] = './assets/pas_foto/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']     = 3000; // 3MB
        $this->upload->initialize($config);
        if (!empty($_FILES['file_foto']['name'])) {
            if ($this->upload->do_upload('file_foto')) {
                $gbr = $this->upload->data();

                $foto = $gbr['file_name'];
                $nip = $this->input->post('nip');
                $nama = $this->input->post('nama');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $wilayah = $this->input->post('wilayah');
                $level = $this->input->post('level');
                $data = array(
                    'user_nama' => $nama,
                    'user_nip' => $nip,
                    'password' => md5($password),
                    'region_id' => $wilayah,
                    'email'     => $email,
                    'user_level' => $level,
                    'foto'      => $foto
                );

                // var_dump($data);
                // die();
                $this->m_user->simpan_user('tbl_user', $data);
                echo $this->session->set_flashdata('success', 'Akun telah berhasil dibuat');

                redirect('auth');
            } else {
                echo $this->session->set_flashdata('warning', 'GAGAL Upload FOTO (format foto: jpg atau png)');
                redirect('auth/register');
            }
        } else {
            echo $this->session->set_flashdata('info', 'GAGAL Upload File Terlalu Besar');
            redirect('auth/register');
        }
    }
}
