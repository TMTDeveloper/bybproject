<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {
    public function select($table)
    {
        return $this->db->get($table);
    }
    public function selectwhere($table,$data)
    {
        return $this->db->get_where($table,$data);
    }
    function delete($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function update($table,$data,$key)
    {
        $this->db->update($table,$data,$key);
    }
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function login($u,$p)
    {
        $username=$u;
        $password=$p;
        $login=$this->db->get_where('m_user', array ('USER_NAME'=>$username,'PASSWORD'=>$password));
        if (count($login->result())>0) {
            foreach ($login->result() as $key) {
            // echo "<pre>";
            //     print_r($login);
            // echo "</pre>";
            // exit();
            $sess['status']='login';
            // $sess['name']=$key->name;
            // $sess['username']=$key->username;
            $sess['company']=$key->COMPANY_ID;
            $this->session->set_userdata($sess);     
            // echo '<pre>'; print_r($this->session->all_userdata());exit;
        }
        header('location:'.base_url().'Premain_controller');
    }else {
        header('location:'.base_url().'Welcome');
    }
}

public function c_phone($s)
        {
            $search=$s;
            $c_phone=$this->db->get_where('m_customer', array ('CUSTOMER_PHONE'=>$search));
            if (count($c_phone->result())>0) {
                foreach ($c_phone->result() as $key) {
                // echo "<pre>";
                //     print_r($login);
                // echo "</pre>";
                // exit();
                // $sess['status']='premain';
                $sess['cust_name']=$key->CUSTOMER_NAME;
                $sess['cust_nat_id']=$key->CUSTOMER_NAT_ID;
                $sess['cust_phone']=$key->CUSTOMER_PHONE;
                $sess['cust_email']=$key->CUSTOMER_EMAIL;
                // $sess['cust_email']=$key->CUSTOMER_EMAIL;
                $sess['cust_rek']=$key->NO_REKENING;
                // $sess['company']=$key->COMPANY_ID;
                $this->session->set_userdata($sess);
                // echo '<pre>'; print_r($this->session->all_userdata());exit;
            }
            header('location:'.base_url().'home_controller');
        }else {
            header('location:'.base_url().'Premain_controller');
        }
    }

public function data($d){
      $rows = $this->db->query("SELECT * FROM m_customer where CUSTOMER_PHONE=".$this->session->id."'")->row_array();            
    
    }
}