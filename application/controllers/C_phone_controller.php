<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_phone_controller extends CI_Controller {

    public function c_phoneaction()
    {        
        $s=$this->input->post('search');
        $this->Model->c_phone($s);
    }
   
}