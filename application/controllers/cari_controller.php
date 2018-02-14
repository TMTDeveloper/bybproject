<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cari_controller extends CI_Controller {

    // ini komen bagus banget loh

    public function cariaction()
    {        
        $s=$this->input->post('search');
        $this->Model->cari($s);
    }
   
}