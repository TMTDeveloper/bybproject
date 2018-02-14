<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar_controller extends CI_Controller {

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