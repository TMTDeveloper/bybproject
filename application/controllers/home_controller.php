<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller {

	public function index()
	{
		$data['content']='home';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
}