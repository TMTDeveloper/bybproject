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
        $subKategori=$this->input->post('subKategori');
        $kodeProduct=$this->input->post('kodeProduct');
        $idPelanggan1=$this->input->post('idPelanggan');
        
        // echo "<pre>";
        // var_dump($subKategori);
        // var_dump($kodeProduct);
        // var_dump($idPelanggan1);
        // echo "</pre>";
        // exit;

        $this->Cmodel->inquery($subKategori,$kodeProduct,$idPelanggan1);

        
    }

    public function cekTagihanPLN()
    {
        $kodeProduct=$this->input->post('kodeProduct');        
        if($kodeProduct=='BMSPLNNONH'){
            $subKategori='NONTAGLIST';
        }
        if($kodeProduct=='BMSPLNPRAH'){
            $subKategori='PLNPASCABAYAR';
        }        
        $idPelanggan1=$this->input->post('idPelanggan');

        // echo "<pre>";
        // var_dump($subKategori);
        // var_dump($kodeProduct);
        // var_dump($idPelanggan1);
        // echo "</pre>";
        // exit;

        $this->Cmodel->inquery($subKategori,$kodeProduct,$idPelanggan1);
    }

    public function payment()
    {
        $sess = $this->session->userdata; // supaya session bisa dipanggil

        $subKategori=$sess['mSubkategori'];
        $kodeProduct=$sess['mKodeproduct'];
        $idPelanggan1=$sess['mIdpelanggan'];
        $nominal=$sess['mNominal'];
        $namaPelanggan=$sess['mNamapelanggan'];
        $noReferensi=$sess['mNoref'];
        
        // echo "<pre>";
        // var_dump($subKategori,$kodeProduct,$idPelanggan1,$nominal,$namaPelanggan,$noReferensi);
        // echo "</pre>";
        // exit;
        $this->Cmodel->payment($subKategori,$kodeProduct,$idPelanggan1,$nominal,$namaPelanggan,$noReferensi);
    }
}