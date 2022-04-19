<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
 
    
    function admin_login($email,$password)
    {
        $codition = array('email' => $email, 'psw' => $password);
        $this->db->select('*');
        $this->db->from('admin_login');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    


    function chek_email_exsit($email,$otp)
    {
        $codition = array('email' => $email,'forget_psw' => $otp);
        $this->db->select('*');
        $this->db->from('admin_login');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }



    function psw_forget($email,$mobile)
    {
        $codition = array('email' => $email, 'mobile' => $mobile);
        $this->db->select('*');
        $this->db->from('admin_login');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    
    
    
    function get_month_inquiry()
    {
        $codition = array('MONTH(date)' => 'MONTH(CURRENT_DATE())', 'YEAR(date)' => 'YEAR(CURRENT_DATE())');
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
       return  $result;
    }
    
    
    
    function reset_psw_update($data,$userid)
    {
        $this->db->where('email', $userid);
        $this->db->update('admin_login', $data);
    }
    

    
    function encrypt_decrypt($action, $string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'Crelite_Technologies';
        $secret_iv = 'Crelite_Tech';
        
        // hash
        $key = hash('sha256', $secret_key);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ( $action == 'encrypt' )
        {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' )
        {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }
    
    
    
    
    
}
?>