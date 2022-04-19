<?php
class Contact_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    
    function insert_contact($data)
    {
        $data = $this->db->insert('contact', $data);
        $this->session->set_userdata('temp_contact_id',$this->db->insert_id());
        return $data;
        
    }





    function getall_contact()
    {
        $this->db->select('*');
        $this->db->from("contact");
        $this->db->order_by("c_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    


    function getall_contactlist()
    {
        $this->db->select('*');
        $this->db->from("text_contact");
        $this->db->order_by("t_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
   


    function check_contact_exist($mobile)
    {
        $codition = array('t_mobno' => $mobile);
        $this->db->select('*');
        $this->db->from('text_contact');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    


    function check_email_exist($email)
    {
        $codition = array('email' => $email);
        $this->db->select('*');
        $this->db->from('subcribeus');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    


    function insert_contact_save($data)
    {
        $this->db->insert('text_contact', $data);
       $this->session->set_userdata('temp_text_contect',$this->db->insert_id());
    }
    
    


    
    function insert_email_save($data)
    {
       $this->db->insert('subcribeus', $data);
       $this->session->set_userdata('temp_subscribte',$this->db->insert_id());
    }


    
    
    function update_contactlist($data,$cid)
    {
        $this->db->where('t_id', $cid);
        $this->db->update('text_contact', $data);
    }



    function update_data($data,$cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->update('contact', $data);
    }
    


    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('c_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }


    
    function delete_id($cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->delete('contact');
    }



    function delete_contactlist($cid)
    {
        $this->db->where('t_id', $cid);
        $this->db->delete('text_contact');
    }



    
}