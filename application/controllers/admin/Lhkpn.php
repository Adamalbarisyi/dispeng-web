<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lhkpn extends CI_Controller {

function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
        $this->load->model('m_lhkpn');
        $this->load->library('upload');
    }
    public function index()
    {
        $data['lhkpn']=$this->m_lhkpn->getLhkpnVerif();
        $this->load->view('admin/lhkpn/index',$data);
    }
    function preview($id){
       $data['id']=$this->m_lhkpn->ambilId($id);
// var_dump($data);
// die();
        $this->load->view('admin/lhkpn/preview',$data);
    }
    
    public function verif()
    {
        $data['lhkpn']=$this->m_lhkpn->getLhkpnProses();
        $this->load->view('admin/lhkpn/verifLhkpn',$data);
    }

    public function download($file){
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/LHKPN/'.$name);
        force_download($name, $data);
        redirect('admin/lhkpn/verif');
    }

     public function update_lhkpn(){
                $id=$this->input->post('id_lhkpn');
                $nip=$this->input->post('nip');
                $verivikator=$this->session->userdata('iduser');
                $name=$nip.'-VERIVED_Surat_LHKPN'.'-'.date('dmY');
                $config['upload_path'] = './assets/dokument/LHKPN'; //path folder
                $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']     = 2000; // 3MB
                $config['file_name']=$name;
                $this->upload->initialize($config);
                // var_dump($verivikator);
                // die();
if(!empty($_FILES['new_file']['name']))
                {
                    if ($this->upload->do_upload('new_file'))
                    {
                                $file = $this->upload->data();
                                $pdf=$file['file_name'];
                                $data=$this->input->post('file');
                                $path='./assets/dokument/LHKPN/'.$data;
                                unlink($path);
                                $data = array(
                                'file' => $pdf,
                                'status_proses'=>1,
                                'verivikator'=>$verivikator
                                );
                            
                            
                            $this->m_lhkpn->update_lhkpn('tbl_lhkpn', $data, $id);
                            redirect('admin/lhkpn');
                            
                    }else{
                        echo '<script>alert(""File Yang Dimasukan Harus PDF Dan Ukuran MAX 2MB"");</script>';
                        // echo '<script>setTimeout(function(){ alert("File Yang Dimasukan Harus PDF Dan Ukuran MAX 2MB"); }, 3000);';
                        // redirect('user/user_lhkpn1');
                    }
                     
                }else{
                        echo '<script>alert("FILE KOSONG");</script>';
                    
                        // redirect('user/user_lhkpn1');
                }
                
    }

    function priview($file){
    $data=$file;
    // var_dump($data);
    // die();
    $path='./assets/dokument/LHKPN/'.$data;

    header('Content-Type: aplication/pdf');
    // header('Content-Disposition: inline;filename'.$path);
    // header('Content-Transfer-Enconding: binary');
    // header('Accept-Ranges: bytes');

    readfile($path);    

    }

}
