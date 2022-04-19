<?php
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function insert($data)
    {
        $this->db->insert('admin_login', $data);
    }
    
    function delete($cid)
    {
        $this->db->where('user_id', $cid);
        $this->db->delete('admin_login');
    }
    
    function update_data($data,$userid)
    {
        $this->db->where('user_id', $userid);
        $this->db->update('admin_login', $data);
    }
    
    function  old_psw_mach($userid,$old_password)
  {
      $codition = array('user_id' => $userid, 'psw' => $old_password);
      $this->db->select('*');
      $this->db->from('admin_login');
      $this->db->where($codition);
      $query = $this->db->get();
      $result=$query->result();
      return $result;
      
  }
  
  
    
    function get_all_user()
    {
        $this->db->select('*');
        $this->db->from("admin_login");
        $this->db->order_by("user_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    function get_user($cid)
    {
        $this->db->select('*');
        $this->db->from('admin_login');
        $this->db->where('user_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    function myprofile_Detils()
    {
        
        $c_id= $this->session->userdata('ci_user_id');
        $this->db->select('*');
        $this->db->from('admin_login');
        $this->db->where('user_id', $c_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    
}