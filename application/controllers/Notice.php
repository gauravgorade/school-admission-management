<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Notice extends CI_Controller {

	
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Notice_model');
       
        
    }






    // For view notice
	public function view()
	{
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Notice_model->get_all_notices();
            $this->load->view("admin/notice_view", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
	}






    // For delete notice
    public function delete_notice($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Notice_model->delete_notice($t_id);
            $this->session->set_flashdata('success', 'Notice Deleted successfully');
            $responce['html'] ='Notice Deleted successfully';
            echo json_encode( $responce);
            // redirect(base_url().'Notice/view');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }





    // For change status of notice
    public function status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('n_status' => $status );
            $this->Notice_model->update_status($data,$t_id);
            $this->session->set_flashdata('success','Notice Status changed Successfully!');
            redirect(base_url().'Notice/view');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }





    // For edit Notice
    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            $data['result'] = $this->Notice_model->get_notice_data($t_id);
            $this->load->view('admin/notice_edit', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }



    // For load add notice view only
    public function create()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $this->load->view('admin/notice_add');    
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }

    // For update notice
    public function update_notice()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            
            $url = test_input($this->input->post('url'));
            $n_id = test_input($this->input->post('n_id'));
            $n_type = test_input($this->input->post('n_type'));
            $n_status = test_input($this->input->post('n_status'));
            $n_heading = test_input($this->input->post('n_heading'));
            $n_link = test_input($this->input->post('n_link'));
           
            
            $data = array('n_id' => $n_id, 'n_type' => $n_type,
                'n_status' => $n_status,'n_heading'=> $n_heading ,
                'n_link' => $n_link);
            $this->Notice_model->update_notice($data,$n_id);
            
            $this->session->set_flashdata('success','Notice Updated Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Notice/view');
    }
    
    


    // For add notice
    public function create_notice()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            
           
           
            $n_type = "1";
            $n_status = "0"; 
            $n_heading = test_input($this->input->post('n_heading'));
            $n_link = test_input($this->input->post('n_link'));
            $url = test_input($this->input->post('url'));  
            $data = array('n_id' => $n_id, 'n_type' => $n_type,
                'n_status' => $n_status,'n_heading'=> $n_heading ,
                'n_link' => $n_link);
            $this->Notice_model->insert_notice($data);
            
            $this->session->set_flashdata('success','Notice Added Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Notice/view');
    }

  









}
