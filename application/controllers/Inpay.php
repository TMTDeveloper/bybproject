<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inpay extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
    }

    public function cekTagihan()
    {
        $j1=$this->input->post('subKategori');
        $j2=$this->input->post('kodeProduct');
        $j3=$this->input->post('idPelanggan');
        $this->Cmodel->inquery($j1,$j2,$j3);
    }

    public function cekTagihanPLN()
    {
        $j2=$this->input->post('kodeProduct');
        
        if($j2=='BMSPLNNONH'){
            $j1='NONTAGLIST';
        }
        if($j2=='BMSPLNPRAH'){
            $j1='PLNPASCABAYAR';
        }
        
        $j3=$this->input->post('idPelanggan');

        // echo "<pre>";
        // var_dump($j1);
        // var_dump($j2);
        // var_dump($j3);
        // echo "</pre>";
        // exit;

        $this->Cmodel->inquery($j1,$j2,$j3);
    }
}