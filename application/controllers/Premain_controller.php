<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premain_controller extends CI_Controller {

	public function index()
	{
		$data['content']='prehome';
        $this->load->view('premain',$data);
	}
}