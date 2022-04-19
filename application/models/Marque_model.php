<?php

class Marque_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    


 
    function get_all_notices()
    {
        $this->db->select('*');
        $this->db->from("marque");
        $this->db->order_by("n_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }



    function delete_notice($cid)
    {
        $this->db->where('n_id', $cid);
        $this->db->delete('marque');
        
       
    }






    function update_status($data,$userid)
    {
        $this->db->where('n_id', $userid);
        $this->db->update('marque', $data);
    }



    function  get_notice_data($cid)
    {
        $this->db->select('*');
        $this->db->from('marque');
        $this->db->where('n_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }



    function update_notice($data,$n_id)
    {
        $this->db->where('n_id', $n_id);
        $this->db->update('marque', $data);
    }




    function insert_notice($data)
    {
        $this->db->insert('marque', $data);
    }


    function  get_ative_noticedata()
    {
        $this->db->select('*');
        $this->db->from('marque');
        $this->db->where('n_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }


}