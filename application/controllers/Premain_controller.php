<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premain_controller extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
	}

	public function index()
	{
		$data['content']='prehome';
        $this->load->view('premain',$data);
	}
}