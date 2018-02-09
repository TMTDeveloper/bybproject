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
	public function telkom()
    {
		$data['content']='ppob/telkom';
        $this->load->view('home',$data);
	}
	public function pascabayar()
    {
		$data['content']='ppob/pascabayar';
        $this->load->view('home',$data);
	}
	public function tv()
    {
		$data['content']='ppob/tv';
        $this->load->view('home',$data);
	}
	public function finance()
    {
		$data['content']='ppob/finance';
        $this->load->view('home',$data);
	}
	public function pdam()
    {
		$data['content']='ppob/pdam';
        $this->load->view('home',$data);
	}
	public function asuransi()
    {
		$data['content']='ppob/asuransi';
        $this->load->view('home',$data);
	}
	public function pln()
    {
		$data['content']='ppob/pln';
        $this->load->view('home',$data);
	}
// side bar menu Pembelian *****************************************
	public function pulsa()
	{
		$data['content']='pembelian/pulsa';
		$this->load->view('home',$data);
	}
	public function data()
	{
		$data['content']='pembelian/data';
		$this->load->view('home',$data);
	}
	public function vouchergames()
	{
		$data['content']='pembelian/vouchergames';
		$this->load->view('home',$data);
	}
	public function tokenpln()
	{
		$data['content']='pembelian/tokenpln';
		$this->load->view('home',$data);
	}		
// side bar menu Travel *****************************************
	public function pesawat()
	{
		$data['content']='travel/pesawat';
		$this->load->view('home',$data);
	}
	public function kereta()
	{
		$data['content']='travel/kereta';
		$this->load->view('home',$data);
	}
	public function hotel()
	{
		$data['content']='travel/hotel';
		$this->load->view('home',$data);
	}
}
