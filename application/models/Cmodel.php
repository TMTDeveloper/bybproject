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

        // echo "<pre>";
        // var_dump($r);
        // echo "</pre>";
        // exit;
// *****************************************************************

        if($r==NULL){
            echo "<script>alert('Tidak Dapat Terkoneksi ke Server');
            window.location=history.go(-1);
            </script>";
            exit;
            }
        if($r['STATUS']=='OK'){
            $sess['mSubkategori'] = $subKategori;
            $sess['mIdpelanggan'] = $idPelanggan1;
            $sess['mKodeproduct'] = $kodeProduct;
            $sess['mNoref'] = $r['DATA'][0]['ref1'];
            $sess['mNominal'] = $r['DATA'][0]['nominal'];
            $sess['mNamapelanggan'] = $r['DATA'][0]['namaPelanggan'];
            $this->session->set_userdata($sess);

            header('location:'.base_url().'home_controller/tagihan');
        }
        else {
            echo "<script>alert('Data Tidak Dapat Ditemukan');
            window.location=history.go(-1);
            </script>";
            exit;            
        }
    
    }
    
    public function payment($subKategori,$kodeProduct,$idPelanggan1,$nominal,$namaPelanggan,$noReferensi)
    {
        // var_dump($subKategori,$kodeProduct,$idPelanggan1,$nominal,$namaPelanggan,$noReferensi);
        // exit;

        // inisialisasi
        $ch = curl_init();

        //set opsi post dan data post
        $url = "http://101.255.120.109:8080/xpayws/rest/xpay.payment/payment";
        $data = array(
            'Content-Type' => 'application/json', 
            'xuid' => 'XPM1760832', 
            'xpass' => 'root',
            'xproductcode' => $kodeProduct,
            'xidpelanggan1' => $idPelanggan1,
            'xidpelanggan2' => 0,
            'xidpelanggan3' => 0,
            'xnominal' => $nominal,
            'xref1' => $noReferensi,
            'xref2' => 0,
            'xref3' => 0,
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

        echo "<pre>";
        var_dump($r);
        echo "</pre>";
        exit;
    }
}