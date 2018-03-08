<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url());
        }
    }
    
    public function cInquery()
    {
        $sess = $this->session->userdata; // supaya session bisa dipanggil

        // inisialisasi
        $ch = curl_init();

        //set opsi post dan data post
        $url = "http://101.255.120.109:8080/xpayws/rest/xpay.payment/inquery";
        $data = array(
            'Content-Type' => 'application/json', 
            'xuid' => 'XPM1760832', 
            'xpass' => 'root',
            'xproductcode' => $sess['kodeProduct'],
            'xidpelanggan1' => $sess['idPelanggan1'],
            'xidpelanggan2' => $sess['idPelanggan2'],
            'xidpelanggan3' => $sess['idPelanggan3'],
            'xresponecode' => $sess['subKategori']
        );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_COOKIEJAR, "set" );
        curl_setopt($ch, CURLOPT_COOKIEFILE, "set" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

        // eksekusi
        $response = curl_exec($ch);
        // tampung
        $r = json_decode($response,true);
        // tutup curl
        curl_close($ch);
        // cek tagihan
        echo "<pre>";
        var_dump($r);
        echo "</pre>";
    }

}