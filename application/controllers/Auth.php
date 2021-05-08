<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		// if($this->session->userdata('masuk') !=TRUE){
  //           $url=base_url();
  //           redirect($url);
  //       };
		$this->load->model('m_login');
		// $this->load->library('session');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}
	
	 public function login(){
        $nip=strip_tags(stripslashes($this->input->post('nip',TRUE)));
        $password=strip_tags(stripslashes($this->input->post('password',TRUE)));
        $n=$nip;
        $p=$password;
        // var_dump($p);
        // die();
        $cek=$this->m_login->cekuser($n,$p);
        $a=$cek->num_rows();
        
        if($a > 0){
        	$this->session->set_userdata('masuk', true);

         $cek_akses=$cek->row_array();
         $cek_akses['user_level'];
         
         if ($this->session->userdata('masuk')==true) {

         	if($cek_akses['user_level']=='1'){
         	$this->session->set_userdata('akses','1');
            $iduser=$cek_akses['user_id'];
            $user_nama=$cek_akses['user_nama'];
            $this->session->set_userdata('iduser',$iduser);
            $this->session->set_userdata('nama',$user_nama);
         }
            
         if($cek_akses['user_level']=='2'){
             $this->session->set_userdata('akses','2');
             $iduser=$cek_akses['user_id'];
             $user_nama=$cek_akses['user_nama'];
             $this->session->set_userdata('iduser',$iduser);
             $this->session->set_userdata('nama',$user_nama);
         } //Front Office

         if ($this->session->userdata('akses')==1) {
        		redirect('admin/dashboard');
        	} elseif ($this->session->userdata('akses')==2) {
        		redirect('user/dashboard');
        	}
         }else{
         	echo $this->session->set_flashdata('msg','User Tidak ada');
            redirect('auth');
        }
	  }else{
	  	echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            redirect('auth');
        }
    }

	public function register()
	{
		$this->load->view('auth/register');
	}
	
	public function forgotPassword()
	{
		$this->load->view('auth/passwords/email');
	}

	function logout(){
            $this->session->sess_destroy();
            $url=base_url('auth');
            redirect($url);
        }
}
