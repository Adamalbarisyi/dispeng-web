<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_lhkpn extends CI_Controller {

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
		$data['lhkpn']=$this->m_lhkpn->getLhkpnAll();
		$data['detail_lhkpn']=$this->m_lhkpn->getLhkpnVerif();
		$this->load->view('user/lhkpn/data_lhkpn',$data);
	}
	
    public function form()
    {
    	$data['kategori']=$this->m_hukdis->getAllKategori();
        $this->load->view('user/lhkpn/form',$data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->m_employe->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nip;


                echo json_encode($arr_result);
            }
        }
    }

   public function simpan_form(){
				$nip=$this->input->post('nip');
				$status_hukdis=$this->input->post('status-hukdis');
				$tanggl_lapor_lhkpn=$this->input->post('tanggal_lapor_lhkpn');
				// die($status_hukdis);
			if ($status_hukdis==0) {
				$name=$nip.'-Surat_LHKPN'.'-'.date('dmY');
				$config['upload_path'] = './assets/dokument/LHKPN'; //path folder
	            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size']     = 2000; // 3MB
	            $config['file_name']=$name;
	            $this->upload->initialize($config);
if(!empty($_FILES['file_pdf_lhkpn']['name']))
	            {
	                if ($this->upload->do_upload('file_pdf_lhkpn'))
	                {
	                        $file = $this->upload->data();
	                       		$pdf=$file['file_name'];
								$data = array(
						        'nip' => $nip,
						        'file' => $pdf,
						        'status_proses'=>0,
						        'tanggal_pelaporan'=>$tanggl_lapor_lhkpn
								);
							
							var_dump($data);
							die();
							$this->m_lhkpn->simpan_lhkpn('tbl_lhkpn', $data);
							redirect('user/user_lhkpn');
	                       	
					}else{
	                    // echo '<script>alert("");</script>';
	                    echo '<script>setTimeout(function(){ alert("File Yang Dimasukan Harus PDF"); }, 3000);';
            			redirect('user/user_lhkpn');
	                }
	                 
	            }else{
	                    echo '<script>alert("FILE KOSONG");</script>';
	            	
            			// redirect('user/user_lhkpn1');
				}
			}else{	//ketika ada surat hukdis maka wajib upload hukdis
				$kategori=$this->input->post('kategori');
				$name=$nip.'-Surat_LHKPN'.'-'.date('dmY');
				$config['upload_path'] = './assets/dokument/LHKPN'; //path folder
	            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size']     = 2000; // 3MB
	            $config['file_name']=$name;
	            $this->upload->initialize($config);
if(!empty($_FILES['file_pdf_lhkpn']['name']))
	            {
	                if ($this->upload->do_upload('file_pdf_lhkpn'))
	                {
	                        $file = $this->upload->data();
	                       		$pdf=$file['file_name'];
								$data = array(
						        'nip' => $nip,
						        'file' => $pdf,
						        'status_proses'=>0,
						        'tanggal_pelaporan'=>$tanggl_lapor_lhkpn
								);
								// var_dump($data);
								// die();
							$this->m_lhkpn->simpan_lhkpn('tbl_lhkpn', $data);
				// UPLOAD FILE HUKDIS
				$name=$nip.'-Surat_HUKDIS'.'-'.date('dmY');
				$config['upload_path'] = './assets/dokument/HUKDIS'; //path folder
	            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size']     = 2000; // 3MB
	            $config['file_name']=$name;
	            $this->upload->initialize($config);
	            if(!empty($_FILES['file_pdf_hukdis']['name']))
	            {
	                if ($this->upload->do_upload('file_pdf_hukdis'))
	                {
	                         $file_hukdis = $this->upload->data();
	                       		$pdf=$file_hukdis['file_name'];
	                       		$tanggal_lapor_hukdis=$this->input->post('tanggal_lapor_hukdis');
	                       		$no_surat=$this->input->post('no_surat_hukdis');
	                       		$kategori_hukuman=$this->input->post('kategori');
	                       		// $hukuman=$this->input->post('hukuman');
								$data = array(
						        'nip' => $nip,
						        'tanggal_pelaporan' => $tanggal_lapor_hukdis,
						        'no_surat'=>$no_surat,
						        'file'=>$pdf,
						        'kategori_hukuman'=>$kategori_hukuman
								);
								// var_dump($data);
								// die();
							$this->m_hukdis->simpan_hukdis('tbl_hukdis', $data);

							redirect('user/user_lhkpn');
	                       	
					}else{
	                    // echo '<script>alert("");</script>';
	                    echo '<script>setTimeout(function(){ alert("File Yang Dimasukan Harus PDF"); }, 3000);';
            			redirect('user/user_lhkpn');
	                }
	                 
	            }else{
	                    echo '<script>alert("FILE KOSONG");</script>';
	            	
            			// redirect('user/user_lhkpn1');
				}
				
		}
	}
}
}

	public function download($file){
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/LHKPN/'.$name);
        force_download($name, $data);
        redirect('user/user_lhkpn');
    }
}

