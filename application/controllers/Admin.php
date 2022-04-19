<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Admin extends CI_Controller {
 
    function __construct()
    {
        
        parent::__construct();
        #Libariry Coll
        $this->load->library('session');
        $this->load->helper('url');  
        $this->load->model('admin_model');
        $this->load->model('send_email_model');
        $this->load->model('User_model');
       
   }
   


    public function index()
    {
       
        $session_id = $this->session->userdata('ci_name');
        if($session_id != NULL)
        {  
           $this->load->view('admin/dashboard'); 
        }
        else
        {  
            $this->load->view('admin/login'); 
        }
        
    }
    
    
    // For to load forget password view 
    public function forgot_password()
    {
        $session_id = $this->session->userdata('ci_name');
        if($session_id != NULL)
        {    $this->load->view('admin/dashboard');  }
        else
        {  
            $this->load->view('admin/forgot_password');
        
        }
    }


    // For to load  reset password view
    public function password_reset()
    {
        $session_id = $this->session->userdata('ci_name');
        $forget_email = $this->session->userdata('forget_email');
        $this->session->set_userdata('');
        if($session_id != NULL  )
        {    
             redirect(base_url()."admin");
        }
        elseif ($forget_email != Null){
            $this->load->view('admin/reset_password');
        }
        
        else
        {
            redirect(base_url()."admin/forgot_password");
            
        }
    }
    
    

    // For reset password
    public function reset_password($otp,$email,$date)
    {     
       
       $otp =$this->admin_model->encrypt_decrypt('decrypt', $otp);
       $email =$this->admin_model->encrypt_decrypt('decrypt', $email);
        $date  =$this->admin_model->encrypt_decrypt('decrypt', $date);
       
        $result=$this->admin_model->chek_email_exsit($email,$otp);
        $count=count($result);
         if($count==0)
        {
            $this->session->set_flashdata('error', 'Invalid Email or OTP!');

         } else {
            $this->session->set_userdata('forget_otp',$otp);
            $this->session->set_userdata('forget_email',$email);
            $this->session->set_userdata('forget_date',$date);
            
            $start_date=date("Y-m-d H:i:s",strtotime($date));
            $end_date=date(strtotime('Y-m-d H:i:s'));
            $date1=date_create($start_date);
            $date2=date_create($end_date);
            $diff=date_diff($date1,$date2);
            $days= $diff->format("%a");
            $time=  $diff->format("%h"."."."%i");
            
            if ($days==0 AND $time <= 1)
            {
                redirect(base_url()."admin/password_reset"); 

            } else {
              
                $this->session->set_flashdata('error', 'Your OTP  is expired !<br>please try again');
                
            }
                 
        } 
       
        redirect(base_url()."admin/forgot_password"); 
    
    }
    
    // For check reset password
    public function check_reset_psw()
    { 
         
        $forget_otp = $this->session->userdata('forget_otp');
        $forget_email = $this->session->userdata('forget_email');
        $forget_date = $this->session->userdata('forget_date');
        
        if(!isset($forget_otp))
        {    
            $this->session->set_flashdata('error', 'Your email id & OTP  not found in our database !');
             redirect(base_url()."admin/forgot_password");
        
        }
        else
        {
            
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data= strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            $url =test_input($this->input->post('url'));
            $start_date=date("Y-m-d H:i:s",strtotime($forget_date));
            $end_date=date(strtotime('Y-m-d H:i:s'));
            $date1=date_create($start_date);
            $date2=date_create($end_date);
            $diff=date_diff($date1,$date2);
            $days= $diff->format("%a");
            $time=  $diff->format("%h"."."."%i");
            
         
            
            if ($days==0 AND $time <= 1)
            {
                $password =test_input($this->input->post('password'));
                $password2 = test_input($this->input->post('password2'));
                if ($password == $password2){
                    
                  
                    $password =$this->admin_model->encrypt_decrypt('encrypt', $password);
                    
                    $data = array('psw' => $password,'forget_psw'=>"");
                    $this->admin_model->reset_psw_update($data,$forget_email);
                    
                    
                    $this->session->unset_userdata('forget_otp');
                    $this->session->unset_userdata('forget_email');
                    $this->session->unset_userdata('forget_date');
                    
                    
                    
                    $this->session->set_flashdata('success', 'Password Update successfully.');
                    
                    redirect(base_url()."Admin/");
                } else {
                    $this->session->set_flashdata('error','Password and Confirm Password not match!');
                 
                    
                }
                
                redirect($url);
                
            } else {
               // echo "Link is expired";
                $this->session->set_flashdata('error', 'Your OTP is Expired try again!');
                
            }
            redirect(base_url()."Admin/forgot_password");
              
            
        }
        
    }




    // For forget password
    public function forget_psw()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data= strip_tags($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email=test_input($this->input->post('email'));
        $mobile = test_input($this->input->post('mobile'));
        $result=$this->admin_model->psw_forget($email,$mobile);
        $count=count($result);
        if($count==0)
        {
            $this->session->set_flashdata('error', 'Invalid Email Or Mobile Number!');
            redirect(base_url()."admin/forgot_password");
            
        } else {
            $temp_otp=0;$userid="";
            if ($count > 0) {
                foreach ($result as $row)
                {
                    $uname=$row->name;
                    $userid=$row->user_id;
                    
                    $this->session->set_userdata('forget_in',TRUE);
                    $this->session->set_userdata('forget_user_id',$userid);
                    $this->session->set_userdata('forget_name',$uname);
                    $this->session->set_userdata('forget_email',$email);
                    $this->session->set_userdata('forget_mobile',$mobile);
                     
                    
                }
                if ($this->session->userdata('temp_otp'))
                {
                    $temp_otp = $this->session->userdata('temp_otp');
                } else
                {
                    $otp = rand(10001,99999);
                    $this->session->set_userdata('temp_otp',$otp);
                    $temp_otp= $otp;
                }
                
                
              
                $data = array('forget_psw'=> $temp_otp );
                $this->User_model->update_data($data,$userid);
                
                   
               $this->send_email_model->forget_psw_user($temp_otp,$email);
              
                $this->session->set_flashdata('success', 'Password reset successfully.<br>Check Your Registered email id.<br>Note: Email link Valid Only for 1 hour ');
            }
            
            redirect(base_url()."admin/forgot_password");
        }
        
        
    }
    


     // For login
    public function admin_login()
    {
        $session_id = $this->session->userdata('ci_name');
        if($session_id != NULL)
        {    $this->load->view('admin/dashboard');  }
        else
        {  
        
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data= strip_tags($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        
        $email=test_input($this->input->post('username'));
        $password= test_input($this->input->post('password'));

        // for remember me ↓
        $_password= test_input($this->input->post('password'));
        
        $password =$this->admin_model->encrypt_decrypt('encrypt', $password);
        
   
        $result=$this->admin_model->admin_login($email,$password);
        $count=count($result);
        if($count==0)
        {
            
            $this->session->set_flashdata('error', 'Invalid Login Id Or Password!');
            redirect(base_url().'admin');
        }
        else
        {
            if ($count > 0)
            {

                $remember = $this->input->post('remember');

                if ($remember) {

                     $this->session->set_userdata('remember', 'checked');
                     $this->session->set_userdata('rem_user',$email);
                     $this->session->set_userdata('rem_pass',$_password);
                   
                }else{

                    $this->session->unset_userdata('remember');
                    $this->session->unset_userdata('rem_user');
                    $this->session->unset_userdata('rem_pass');

                }
                foreach ($result as $row)
                {
                    
                    $uname=$row->name;
                    $ulname=$row->lname;
                    $userid=$row->user_id;
                    $userid=$row->user_id;
                    $profile=$row->profile;$admin_type=$row->admin_type;
                    $this->session->set_userdata('ci_user_id',$userid);
                    $this->session->set_userdata('ci_name',$uname);
                    $this->session->set_userdata('ci_lname',$ulname);
                    $this->session->set_userdata('ci_email',$email);
                    $this->session->set_userdata('ci_profile',$profile);
                    $this->session->set_userdata('admin_type',$admin_type);
                    $this->session->set_userdata('client_login',TRUE);
                    
                    
                }
            }
            $this->session->set_flashdata('success','Welcome!');
            
            redirect(base_url().'admin');
        }
        }
    }
    


    // For logout
    public function logout()
    {
        $this->session->unset_userdata('ci_user_id');
        $this->session->unset_userdata('ci_name');
        $this->session->unset_userdata('ci_email');
        $this->session->unset_userdata('ci_profile');
        $this->session->unset_userdata('client_login');
        redirect(base_url()."admin");
    }
    
    
    
      
    
    
}


?>