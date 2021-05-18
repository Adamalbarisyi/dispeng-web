<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_user');
		$this->load->model('m_region');

		// $this->load->model('m_barang');
		$this->load->library('upload');
	}

	public function index()
	{

		$data['data'] = $this->m_region->getRegion();
		$data['user'] = $this->m_user->getUserAll();

		// print_r($data);
		// die();

		$this->load->view('admin/users/index', $data);
	}

	public function simpan_user()
	{
		$config['upload_path'] = './assets/pas_foto/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$config['max_size']     = 2000; // 3MB
		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				$foto = $gbr['file_name'];
				$nip = $this->input->post('nip');
				$nama = $this->input->post('nama');
				$password = $this->input->post('password');
				$email = $this->input->post('email');
				$region = $this->input->post('region');
				$level = $this->input->post('level');
				$data = array(
					'user_nama' => $nama,
					'user_nip' => $nip,
					'password' => md5($password),
					'region_id' => $region,
					'email'		=> $email,
					'user_level' => $level,
					'foto'		=> $foto
				);


				$this->m_user->simpan_user('tbl_user', $data);
				redirect('user');
			} else {
				echo $this->session->set_flashdata('msg', 'GAGAL Upload FOTO');
				redirect('user');
			}
		} else {
			echo $this->session->set_flashdata('msg', 'GAGAL Upload File Terlalu Besar');
			redirect('user');
		}
	}
}
