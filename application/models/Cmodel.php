<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cmodel extends CI_Model {

    public function inquery($j1,$j2,$j3)
    {
        // Biar tau isi dari data yang diambil dari inputan PPOB
        // $subKategori=$j1;
        // $kodeProduct=$j2;
        // // $idPelanggan1=substr($j3, 1, 3); contoh substr
        // $idPelanggan1=$j3;
        // $idPelanggan2=0;
        // $idPelanggan3=0;
        
        $sess['subKategori']=$j1;
        $sess['kodeProduct']=$j2;
        $sess['idPelanggan1']=$j3;
        $sess['idPelanggan2']=0;
        $sess['idPelanggan3']=0;
        $this->session->set_userdata($sess);

        // Cek yang diatas
        // echo "<pre>";
        // // var_dump($subKategori);
        // // var_dump($kodeProduct);
        // // var_dump($idPelanggan1);
        // // var_dump($idPelanggan2);
        // // var_dump($idPelanggan3);
        // var_dump($sess);
        // echo "</pre>";
        // exit;

        header('location:'.base_url().'Curl/cInquery');
    }
    
}