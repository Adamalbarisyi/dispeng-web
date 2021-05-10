<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_skk extends CI_Controller {

function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_employe');
		$this->load->model('m_lhkpn');
		$this->load->library('upload');

	}
	public function index()
	{
		// $data['lhkpn']=$this->m_lhkpn->getLhkpnAll();
		// $data['detail_lhkpn']=$this->m_lhkpn->getLhkpnVerif();
		$this->load->view('user/skk/index');
	}
	
    public function form()
    {
        $this->load->view('user/skk/form');
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
				$name=$nip.'-Surat_LHKPN'.'-'.date('dmY');
				$config['upload_path'] = './assets/dokument/LHKPN'; //path folder
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
								$data = array(
						        'nip' => $nip,
						        'file' => $pdf,
						        'status_proses'=>0
								);
							
							
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
				
	}

	public function download($file){
        $this->load->helper('download');
        $name = $this->uri->segment(4);
        $data = file_get_contents('./assets/dokument/LHKPN/'.$name);
        force_download($name, $data);
        redirect('user/user_lhkpn');
    }


}
