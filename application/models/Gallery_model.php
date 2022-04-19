<?php
class Gallery_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function insert_data($data)
    {
        $this->db->insert('gallery', $data);
    }

 
    function get_all_images()
    {
        $this->db->select('*');
        $this->db->from("gallery");
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }


    function update_status($data,$userid)
    {
         $this->db->where('id', $userid);
         $this->db->update('gallery', $data);
    }



      
   
    function delete_image($cid)
    {
        $this->db->where('id', $cid);
        $this->db->delete('gallery');  
       
    }

   
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
     
    
    function update_data($data,$userid)
    {
        $this->db->where('id', $userid);
        $this->db->update('gallery', $data);
    }


    
    function  get_ative_imgdata()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('img_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }



}