<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_user');
		$this->load->model('m_employe');

		// $this->load->model('m_region');
		// $this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('user/employe/index');
	}
	
	public function data_employe(){

		$data['employe']=$this->m_employe->getEmployeAll();
		// echo "<pre>";
		// print_r($data['employe']);
		// echo "</pre>";
		// die();

		$this->load->view('user/employe/data_employe', $data);
	}

	public function simpan_employe(){
		$nama=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$nrp=$this->input->post('nrp');
		$golongan=$this->input->post('golongan');
		$jabatan=$this->input->post('jabatan');
		$status=$this->input->post('status');
		$keterangan=$this->input->post('keterangan');
		$email=$this->input->post('email');
		$iduser=$this->session->userdata('iduser');
		$cek=$this->m_user->cekRegion($iduser);
		$regionEmploye=$cek->region_id;

		$data=array(
				'nama'=>$nama,
				'nip'=>$nip,
				'nrp'=>$nrp,
				'pangkat_gol'=>$golongan,
				'jabatan'=>$jabatan,
				'status'=>$status,
				'keterangan'=>$keterangan,
				'email'=>$email,
				'region'=>$regionEmploye
			);

		$this->m_employe->simpan_employe('tbl_employe', $data);
				redirect('user/employe/dataEmploye');
		
	}
}
