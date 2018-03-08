<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_controller extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
	}

	public function index()
	{
		$data['content']='home';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
// Tombol (cari dan daftar) di tampilan premain *****************************************
	public function customer()
	{
		$data['content']='customer';
		$this->load->view('premain',$data);
	}

}
