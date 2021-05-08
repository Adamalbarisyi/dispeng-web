<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skk extends CI_Controller {
function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}

	public function index()
	{
		$this->load->view('admin/skk/index');
	}
	
    public function verif()
    {
        $this->load->view('admin/skk/verifSkk');
    }

}
