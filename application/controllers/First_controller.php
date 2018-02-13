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
	public function premain()
	{
		$data['content']='prehome';
        $this->load->view('premain',$data);
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
	public function daftarcustomer()
	{
		$data['content']='daftarcustomer';
		$this->load->view('premain',$data);
	}
// Tombol daftar di daftar customer *****************************************
	public function customerbaru()
    {
		$sess = $this->session->userdata;

		$data['CUSTOMER_EMAIL']=$this->input->post('emailCustomer');
		$data['CUSTOMER_PHONE']=$this->input->post('notelCustomer');
		$data['CUSTOMER_NAME']=$this->input->post('namaCustomer');
		$data['CUSTOMER_NAT_ID']=$this->input->post('ktpCustomer');
		$data['NO_REKENING']=$this->input->post('norekCustomer');
		$data['COMPANY_ID']= $sess['company'];

		// $this->Model->selectwhere('m_user',array ('username'=>$username,'password'=>$password))
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->Model->insert('m_customer',$data);
        header('location:'.base_url().'First_controller/premain');
    }
// side bar menu PPOB *****************************************
	public function telkom()
    {
		$data['content']='ppob/telkom';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function pascabayar()
    {
		$data['content']='ppob/pascabayar';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function tv()
    {
		$data['content']='ppob/tv';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function finance()
    {
		$data['content']='ppob/finance';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function pdam()
    {
		$data['content']='ppob/pdam';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function asuransi()
    {
		$data['content']='ppob/asuransi';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
	public function pln()
    {
		$data['content']='ppob/pln';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
// side bar menu Pembelian *****************************************
	public function pulsa()
	{
		$data['content']='pembelian/pulsa';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
	public function data()
	{
		$data['content']='pembelian/data';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
	public function vouchergames()
	{
		$data['content']='pembelian/vouchergames';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
	public function tokenpln()
	{
		$data['content']='pembelian/tokenpln';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}		
// side bar menu Travel *****************************************
	public function pesawat()
	{
		$data['content']='travel/pesawat';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
	public function kereta()
	{
		$data['content']='travel/kereta';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
	public function hotel()
	{
		$data['content']='travel/hotel';
		$data['sidebar']='sidebar';
		$this->load->view('main',$data);
	}
}
