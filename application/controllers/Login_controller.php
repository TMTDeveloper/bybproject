<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function loginaction()
    {        
                // $url = "http://101.255.120.109:8080/xpayws/rest/xpay.ppob/all";

                // // inisialisasi
                // $curl = curl_init();

                // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                // // curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string); 
                // curl_setopt($curl, CURLOPT_URL, $url);
                // curl_setopt($curl, CURLOPT_COOKIEJAR, "set" );
                // curl_setopt($curl, CURLOPT_COOKIEFILE, "set" );
                // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
                // curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                  
                //     'Content-Type: application/json',                                                                                
                //     // 'Content-Length: ' . strlen($data_string),
                //     'xuid: XPM1760832',
                //     'xpass: root'                                                   
                // ));

                // // eksekusi
                // $response = curl_exec($curl);

                // // ***********************************

                // // convert JSON ke string
                // $r = json_decode($response,true);

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