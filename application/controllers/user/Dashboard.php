<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_employe');
		$this->load->model('m_lhkpn');
		$this->load->model('m_hukdis');
		$this->load->library('upload');
		
	}
	public function index()
	{
		$data['hukdis']=$this->m_hukdis->getHukdisAll();
		$data['lhkpn']=$this->m_lhkpn->getLhkpnAll();
		$data['detail_lhkpn']=$this->m_lhkpn->getLhkpnVerif();
		$this->load->view('user/dashboard/index',$data);
	}
	
}
