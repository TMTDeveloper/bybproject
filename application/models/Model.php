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
            $sess['status']='login';
            $sess['company']=$key->COMPANY_ID;
            $this->session->set_userdata($sess);     
            // print_r($sess); // seharusnya Array ( [status] => login [company] => BYB ) 1
            // echo "<pre>";
            // print_r($r);
            // echo "</pre>";
            // exit;
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
                
                // $sess['companyID']=$key->COMPANY_ID;
                $sess['cust_id']=$key->CUSTOMER_ID;
                $sess['cust_name']=$key->CUSTOMER_NAME;
                $sess['cust_nat_id']=$key->CUSTOMER_NAT_ID;
                $sess['cust_phone']=$key->CUSTOMER_PHONE;
                $sess['cust_email']=$key->CUSTOMER_EMAIL;
                $sess['cust_rek']=$key->NO_REKENING;
                // sampai sini membuat session untuk menampilkan data di home
                    // print_r($sess);
                    // exit();
                $this->load->helper('string');
                $sess['cust_token']=random_string('alnum', 20);
                // generate random token

                $this->session->set_userdata($sess);
                // membuat session data
                    // echo print_r($sess);
                    // exit;
                
                $sess = $this->session->userdata; // supaya session bisa dipanggil
                $data['COMPANY_ID']=$sess['company']; 
                $data['CUSTOMER_ID']=$sess['cust_id']; 
                $data['TOKEN_ID']=$sess['cust_token']; 
                    // echo print_r($data);
                    // exit;
                $this->Model->insert('t_customer_token',$data);
                // memasukan record ke dalam database, table 't_customer_token'
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
