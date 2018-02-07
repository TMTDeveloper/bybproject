<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_controller extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url().'welcome');
        }
    }
	public function index()
	{
		$data['content']='display';
        $this->load->view('home',$data);
	}

// side bar menu PPOB *****************************************
	public function ppob()
    {
		$data['content']='ppob/dummy';
        $this->load->view('home',$data);
	}
	
// side bar menu Pembelian *****************************************
	public function pembelian()
	{
		$data['content']='pembelian/dummy';
		$this->load->view('home',$data);
	}
		
// side bar menu Travel *****************************************
	public function travel()
	{
		$data['content']='travel/dummy';
		$this->load->view('home',$data);
	}
	
}
