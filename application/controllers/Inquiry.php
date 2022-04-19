<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Inquiry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Inquiry_model');
        
    }
    


    // For  view admission enquiry
    public function view_admission_enquiry()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Inquiry_model->getall_admission_details();
            $this->load->view("admin/view_admission_enquiry", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }






    // For Export admission inquiry
    public function export_admission_enquiry()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            if ($this->input->post('daterangepicker2') != Null)
            {
                $daterangepicker = date('Y-m-d',strtotime($this->input->post('daterangepicker')));
                
                $daterangepicker2 =date('Y-m-d',strtotime($this->input->post('daterangepicker2')));
                
                $sel_msg= "Data Shown Form date $daterangepicker TO  $daterangepicker2";
                
                $this->session->set_flashdata('export_msg',$sel_msg);

                $query6= $this->db->query("SELECT * FROM `admission_enquiry` WHERE a_inqdt
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
                $data['result'] =$query6->result();
                
                
                
            } else
            {
                $query6= $this->db->query("SELECT * FROM `admission_enquiry`");
                $data['result'] =$query6->result();
                
            }
            $this->load->view("admin/export_admission_enquiry", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }







    // For  delete admission enquiry
    public function delete_admission($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Inquiry_model->delete_addmission($t_id);
            $this->session->set_flashdata('success', 'Inquiry Deleted successfully');
            $responce['html'] ='Inquiry Deleted successfully';
            echo json_encode( $responce);
            // redirect(base_url().'inquiry/view_admission_enquiry');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }







    // For to change admission status
    public function admission_status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('a_status' => $status );
            $this->Inquiry_model->update_admission_status($data,$t_id); 
             $this->session->set_flashdata('success','Admission  Status Change Successfully!');
            redirect(base_url(). 'inquiry/view_admission_enquiry');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }


    // For  to admission full details view
    public function addmission_details($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('a_status' => '0' );
            $this->Inquiry_model->update_admission_data($data,$t_id);
            $data['result'] = $this->Inquiry_model->get_single_addmission_data($t_id);
            $this->load->view('admin/admission_details', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }


    // For to change admission tagging
    public function admission_tagging($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('a_tag' => $this->input->post('a_tag'));

            
            $this->Inquiry_model->update_admission_tagging($data,$t_id);
             $this->session->set_flashdata('success','Admission  Status Changed Successfully!');
            redirect(base_url(). 'inquiry/view_admission_enquiry');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    
    
}
?> 