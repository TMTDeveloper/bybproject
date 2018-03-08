<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index(){
        $xxx = $this->Curl->cInquery;
        var_dump($xxx);
    }

}