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

	}

	public function index()
	{
		$this->load->view('admin/employe/index');
	}
	
	public function data_employe(){

		$data['employe']=$this->m_employe->getEmployeAll();
		// echo "<pre>";
		// print_r($data['employe']);
		// echo "</pre>";
		// die();

		$this->load->view('admin/employe/data_employe', $data);
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
		echo $this->session->set_flashdata('success', ' berhasil ditambahkan');
				redirect('admin/employe/data_employe');
		
	}

	function update_employe(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$nrp=$this->input->post('nrp');
		$golongan=$this->input->post('golongan');
		$jabatan=$this->input->post('jabatan');
		$status=$this->input->post('status');
		$keterangan=$this->input->post('keterangan');
		$email=$this->input->post('email');

		$data=array(
				'nama'=>$nama,
				'nip'=>$nip,
				'nrp'=>$nrp,
				'pangkat_gol'=>$golongan,
				'jabatan'=>$jabatan,
				'status'=>$status,
				'keterangan'=>$keterangan,
				'email'=>$email
			);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
		$this->m_employe->update_employe('tbl_employe', $data,$id);
		echo $this->session->set_flashdata('success', ' berhasil Diupdate');
				redirect('admin/employe/data_employe');
	}
	function soft_delete(){
		$id=$this->input->post('id');

		$data=array(
				'is_delete'=>0,
				'id'=>$id
			);
	

		$this->m_employe->soft_delete('tbl_employe', $data,$id);
		echo $this->session->set_flashdata('success', ' berhasil Dihapus');
				redirect('admin/employe/data_employe');
	}

}
