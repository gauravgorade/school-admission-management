<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        
        parent::__construct();
    
        $this->load->model('Slider_model');
        $this->load->model('Home_data');
        $this->load->model('Notice_model');
        $this->load->model('Gallery_model');
        $this->load->model('Shoot_email');
        $this->load->model('Marque_model');
        
   }



	public function index()
	{

        $data['result2']=$this->Slider_model->get_ative_sliderdata();
        $data['result3']=$this->Notice_model->get_ative_noticedata();
        $data['result4']=$this->Marque_model->get_ative_noticedata();
        $this->load->view('home', $data);
	
	}




	public function aboutus()
	{
		$this->load->view('aboutus');
	}




	public function infrastructure()
	{
		$this->load->view('infrastructure');
	}




	public function achievements()
	{
		$this->load->view('achievements');
	}




	public function calendar()
	{
		$this->load->view('calendar');
	}





	public function classes()
	{
		$this->load->view('classes');
	}




	public function results()
	{
		$this->load->view('results');
	}




	public function curriculum()
	{
		$this->load->view('curriculum');
	}




	public function admission()
	{
		$this->load->view('admission');
	}




	public function gallery()
	{
		$data['result']=$this->Gallery_model->get_ative_imgdata();
		$this->load->view('gallery',$data);
	}

	
	


	public function contact()
	{
		$this->load->view('contact');
	}




	public function sitemaps()
	{
		$this->load->view('sitemaps');
	}




	public function privacypolicy()
	{
		$this->load->view('privacypolicy');
	}




	public function disclaimer()
	{
		$this->load->view('disclaimer');
	}



	//  admission get details
	public function get_admission_dt()

    { 
              
		 
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);
			return $data;
		}
               
                $a_name  = $this->input->post('a_name');               
                $a_lang  = $this->input->post('a_lang');               
                $a_dob  = $this->input->post('a_dob');               
                $a_fname  = $this->input->post('a_fname');               
                $a_mname  = $this->input->post('a_mname');               
                $a_ocp = $this->input->post('a_occupation');               
                $a_add  = $this->input->post('a_address1');               
                $a_no  = $this->input->post('a_no');               
                $a_school  = $this->input->post('a_school');
                $a_result =  $this->input->post('a_result');
                $a_doa=  $this->input->post('a_doa');
                $a_class=  $this->input->post('a_class');
                $a_status= "1";
                $a_tag= "0";
				$time = date("H:i:s");
                
                $data = array('a_name' => $a_name,'a_lang' => $a_lang,'a_dob' => $a_dob,
                    'a_fname' => $a_fname, 'a_mname' => $a_mname,'a_ocp' => $a_ocp,'a_add' => $a_add,'a_no' => $a_no,'a_school' => $a_school,'a_result' => $a_result,'a_doa' => $a_doa,'a_class' => $a_class,'a_status' => $a_status , 'a_inqtime' => $time , 'a_tag' => $a_tag);
             


				if( $this->Home_data->insert_admission_data($data)){


					$responce['html'] ='For Contacting us! we will reach back to you in a short time.';
					echo json_encode($responce);
					
				    $this->Shoot_email->email_for_admission_dt_admin($a_name,$a_fname, $a_dob, $a_add, $a_no);
				

				  }
				  else
				 { 
					
					$responce['html'] ='Error occured plz try again after Some time!';
					echo json_encode($responce);
					
				 }
                
           
       
    }





}