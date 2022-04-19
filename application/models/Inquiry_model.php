<?php

class Inquiry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
  function getall_admission_details()
    {
    $this->db->select('*');
    $this->db->from("admission_enquiry");
    $this->db->order_by("a_id", "DESC");
    $query = $this->db->get();
    $query_result = $query->result();
    return $query_result;
    
    }


    function delete_addmission($cid)
    { 
     $this->db->where('a_id', $cid);
     $this->db->delete('admission_enquiry');
   
    }


    function update_admission_status($data,$cid)
    {
     $this->db->where('a_id', $cid);
     $this->db->update('admission_enquiry', $data);
    }


    function update_admission_tagging($data,$cid)
    {
     $this->db->where('a_id', $cid);
     $this->db->update('admission_enquiry', $data);
    }



    function update_admission_data($data,$cid)
    {
     $this->db->where('a_id', $cid);
     $this->db->update('admission_enquiry', $data);
    }



    function  get_single_addmission_data($cid)
    {
        
     $this->db->select('*');
     $this->db->from('admission_enquiry');
     $this->db->where('a_id', $cid);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
    }  



    
}