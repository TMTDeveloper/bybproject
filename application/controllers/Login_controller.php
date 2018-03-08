<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
    }
    
    public function loginaction()
    {        
        $u=$this->input->post('username');
        $p=$this->input->post('password');
        $this->Model->login($u,$p);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        header('location:'.base_url().'Welcome');
    }
}