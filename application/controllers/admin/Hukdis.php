<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hukdis extends CI_Controller {
function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
        $this->load->model('m_hukdis');
	}

	public function index()
	{
		$data['hukdis']=$this->m_hukdis->getHukdisAll();
		$this->load->view('admin/hukdis/index',$data);
	}
	
    public function verif()
    {
        $this->load->view('admin/hukdis/verifHukdis');
    }

    public function download($file){
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/HUKDIS/'.$name);
        force_download($name, $data);
        redirect('admin/hukdis');
    }

}
