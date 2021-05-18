<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_hukdis extends CI_Controller {

function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_employe');
		$this->load->model('m_hukdis');
		$this->load->library('upload');

	}
	public function index()
	{
		$data['hukdis']=$this->m_hukdis->getHukdisAll();
		$this->load->view('user/hukdis/data_hukdis',$data);
	}
	
    public function form()
    {
    	$data['kategori']=$this->m_hukdis->getAllKategori();
    	// var_dump($data);
    	// die();
        $this->load->view('user/hukdis/form',$data);
    }

   public function simpan_form(){
				$nip=$this->input->post('nip');
				$name=$nip.'-Surat_HUKDIS'.'-'.date('dmY');
				$config['upload_path'] = './assets/dokument/HUKDIS'; //path folder
	            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size']     = 2000; // 3MB
	            $config['file_name']=$name;
	            $this->upload->initialize($config);
if(!empty($_FILES['file_pdf']['name']))
	            {
	                if ($this->upload->do_upload('file_pdf'))
	                {
	                        $file = $this->upload->data();
	                       		$pdf=$file['file_name'];
	                       		$tanggal_lapor=$this->input->post('tanggal_lapor');
	                       		$no_surat=$this->input->post('no_surat');
	                       		$kategori_hukuman=$this->input->post('kategori');
	                       		$hukuman=$this->input->post('hukuman');

								$data = array(
						        'nip' => $nip,
						        'tanggal_pelaporan' => $tanggal_lapor,
						        'no_surat'=>$no_surat,
						        'file'=>$pdf,
						        'kategori_hukuman'=>$kategori_hukuman,
						        'hukuman'=>$hukuman
								);
							// echo "<pre>";
							// var_dump($data);
							// echo "</pre>";
							// die();
							$this->m_hukdis->simpan_hukdis('tbl_hukdis', $data);
							redirect('user/user_hukdis');
	                       	
					}else{
	                    // echo '<script>alert("");</script>';
	                    echo '<script>setTimeout(function(){ alert("File Yang Dimasukan Harus PDF"); }, 3000);';
            			redirect('user/user_hukdis');
	                }
	                 
	            }else{
	                    echo '<script>alert("FILE KOSONG");</script>';
	            	
            			// redirect('user/user_lhkpn1');
				}
				
	}

	public function download($file){
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/HUKdis/'.$name);
        force_download($name, $data);
        redirect('user/user_lhkpn');
    }


}
