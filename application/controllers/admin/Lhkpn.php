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
	}
	public function index()
	{
		$this->load->view('admin/lhkpn/index');
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
    	// var_dump($file);
    }

}
