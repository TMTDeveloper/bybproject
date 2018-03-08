<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_phone_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
	}

    public function c_phoneaction()
    {        
        $s=$this->input->post('search');
        $this->Model->c_phone($s);
    }
   
}