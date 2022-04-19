<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
        $this->load->model('Admin_model');
        $this->load->model('Shoot_email');
        
    }
    
    
    // For to store contact form details
    public function contact_us()
    {
             function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }
 
           
            $name =  $this->input->post('name');
            $number  = test_input($this->input->post('number'));
            $email  = test_input($this->input->post('email'));
            $subject  = test_input($this->input->post('subject'));
            $message  = test_input($this->input->post('message'));
            $date = date("Y-m-d");   $time = date("H:i:s");
            $status= "1";  $verify_home ="0";       
            $data = array('name' => $name, 'email' => $email, 'mobile' => $number,
                'subject'=> $subject ,'message'=> $message ,
                'date' => $date,'time' => $time,
                'status' => $status,'verify' => $verify_home);
        
            if( $this->Contact_model->insert_contact($data)){

				   $responce['html'] ='For Contacting us, we will reply soon!';
				   echo json_encode($responce);
                   $this->Shoot_email->email_for_contactus__user($email,$name);
                   $this->Shoot_email->email_for_contactus__admin($name,$email,$number,$subject);
            

              }
              else
             { 
                 	
					$responce['html'] ='Error occured please try again after some time';
					echo json_encode($responce);
                  
             }
           
         
    }
    
  
    
    


    // For to load contact view
    public function view_contact()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Contact_model->getall_contact();
            $this->load->view("admin/contact_view", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    


    // For to delete Contact
    public function delete_contact($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Contact_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Contact Delete successfully');

            $responce['html'] ='Contact  Deleted successfully';
            echo json_encode( $responce);
            // redirect(base_url().'Contact/view_contact');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    





    // For to view single contact in detail
    public function view_details($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => '0' );
            $this->Contact_model->update_data($data,$t_id);
            
            $data['result'] = $this->Contact_model->get_single_data($t_id);
            $this->load->view('admin/contact_details', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    





    // For to export contact
    public function export()
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
                
                $query6= $this->db->query("SELECT * FROM `contact` WHERE date
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
                $data['result'] =$query6->result();
                
            } else
            {
                $query6= $this->db->query("SELECT * FROM `contact`");
                $data['result'] =$query6->result();
        
            }
            $this->load->view("admin/contact_export", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
   
    

    
    
    
}
 ?>