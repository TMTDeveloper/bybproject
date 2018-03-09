<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cmodel extends CI_Model {

    public function inquery($subKategori,$kodeProduct,$idPelanggan1)
    {
        // $sess = $this->session->userdata; // supaya session bisa dipanggil

        // inisialisasi
        $ch = curl_init();

        //set opsi post dan data post
        $url = "http://101.255.120.109:8080/xpayws/rest/xpay.payment/inquery";
        $data = array(
            'Content-Type' => 'application/json', 
            'xuid' => 'XPM1760832', 
            'xpass' => 'root',
            'xproductcode' => $kodeProduct,
            'xidpelanggan1' => $idPelanggan1,
            'xidpelanggan2' => 0,
            'xidpelanggan3' => 0,
            'xresponecode' => $subKategori
        );
        
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

        
        
        $sess['mNoref'] = $r['DATA'][0]['nomerReferensi1'];
        $sess['mNominal'] = $r['DATA'][0]['nominal'];
        $sess['mNamapelanggan'] = $r['DATA'][0]['namaPelanggan'];
        $this->session->set_userdata($sess);

        // cek tagihan
        echo "<pre>";
        
        echo "hasil parsing";
        echo "<br>";
        var_dump($subKategori);
        var_dump($kodeProduct);
        var_dump($idPelanggan1);
        
        echo "<br>";
        echo "hasil curl";
        echo "<br>";
        var_dump($r);

        echo "<br>";
        echo "yang buat ditampilin";
        echo "<br>";
        var_dump($sess);
        
        echo "</pre>";
        exit;

        header('location:'.base_url().'Sidebar_controller/modal');
    
    }
    
}