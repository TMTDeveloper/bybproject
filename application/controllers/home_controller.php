<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller {

	public function index()
	{
		$sess = $this->session->userdata;

		foreach ($sess as $key => $value ) {
			$data[$key]= $value;
		}

		$data['content']='home';
		$data['sidebar']='sidebar';
        $this->load->view('main',$data);
	}
 
     public function showdata()
    {        
        $d=$this->input->post('data');
        $this->Model->data($d);
    }
                
}