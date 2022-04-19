<?php
class Slider_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('slider_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function  get_ative_sliderdata()
    {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function delete_id($cid)
    {
        $this->db->where('slider_id', $cid);
        $this->db->delete('slider');
    }
    function update_data($data,$userid)
    {
        $this->db->where('slider_id', $userid);
        $this->db->update('slider', $data);
    }
     
     function insert_data($data)
    {
        $this->db->insert('slider', $data);
    }
    function get_sliderdata()
    {
        $this->db->select('*');
        $this->db->from("slider");
        
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    
    
}