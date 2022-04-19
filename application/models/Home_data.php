<?php
class Home_data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function insert_admission_data($data)
    {
		$data = $this->db->insert('admission_enquiry', $data);
		return $data;

    }
    
}


?>