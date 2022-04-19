<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Slider_model');
        
    }
 

    
    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            $data['result'] = $this->Slider_model->get_single_data($t_id);
            $this->load->view('admin/slider_edit', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
  
    


  




    public function status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => $status );
            $this->Slider_model->update_data($data,$t_id);
            $this->session->set_flashdata('success','Slider Status change Successfully!');
            redirect(base_url().'Slider/view');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
   
    


  

    


    public function delete($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->Slider_model->get_single_data($t_id);
            $img_path="";
            foreach ($result as $row)
            {
                $img_path =$row->img_path;
            }
            $old_file_path = "public/img/slider/".$img_path;
            if (file_exists($old_file_path))
            {
                unlink($old_file_path);
            }
            
            
            $this->Slider_model->delete_id($t_id);
            $this->session->set_flashdata('success','Slider delete successfully!');
            $responce['html'] ='Slider Deleteded successfully';
            echo json_encode( $responce);

           
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    

  


    public function create()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $this->load->view('admin/slider_add');    
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    


  






    public function update_slider()
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
           
            $old_profile =  test_input($this->input->post('old_profile'));
            $picture = "";
            if (! empty($_FILES['userImage']['name'])) {
                $config['upload_path'] = 'public/img/slider';
                $config['max_size'] = 2100;
                // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time() . '-' . $_FILES['userImage']['name'];
                
                // Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('userImage')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    
                    $old_file_path = "public/img/slider/".$old_profile;
                    if (file_exists($old_file_path))
                    {
                        unlink($old_file_path);
                    }
                } else {
                    $picture = $old_profile;
                    $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                }
            } else { 
                
                $picture = $old_profile; }
            
            
         
            $userid = test_input($this->input->post('slider_id'));
           
            $heading = test_input($this->input->post('heading'));
            $sub_heading = test_input($this->input->post('sub_heading'));
            $paragraph1 = test_input($this->input->post('paragraph1'));
            $paragraph2 = test_input($this->input->post('paragraph2'));
            $button_link1= test_input($this->input->post('button_link1'));
            $button_link2 = test_input($this->input->post('button_link2'));
            
            $data = array('heading' => $heading, 'sub_heading' => $sub_heading,
                'paragraph1' => $paragraph1,'paragraph2'=> $paragraph2 ,
                'button_link1' => $button_link1,'button_link2'=> $button_link2 ,
                'img_path' => $picture,'status' => 1);
            $this->Slider_model->update_data($data,$userid);
            
            $this->session->set_flashdata('success','Slider Update Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Slider/view');
    }
    
    
    

  



    
    public function creting_slider()
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
            $picture="";
            if(!empty($_FILES['userImage']['name']))
            {
                $config['upload_path'] = 'public/img/slider';
                $config['max_size']  = 2100;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                /*    $config['allowed_types'] = 'doc|pdf'; */
                $config['file_name'] = time().'-'.$_FILES['userImage']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userImage'))
                {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    
                    $heading= $sub_heading = $paragraph1 = $paragraph1 = $button_link1=$button_link2 = "";
                    $heading = test_input($this->input->post('heading'));
                    $sub_heading = test_input($this->input->post('sub_heading'));
                    $paragraph1 = test_input($this->input->post('paragraph1'));
                    $paragraph2 = test_input($this->input->post('paragraph2'));
                    $button_link1= test_input($this->input->post('button_link1'));
                    $button_link2 = test_input($this->input->post('button_link2'));
                  
                    $data = array('heading' => $heading, 'sub_heading' => $sub_heading,
                        'paragraph1' => $paragraph1,'paragraph2'=> $paragraph2 , 
                        'button_link1' => $button_link1,'button_link2'=> $button_link2 , 
                         'img_path' => $picture,'status' => 1);
                    
                    $this->Slider_model->insert_data($data);
                    $this->session->set_flashdata('success','Slider Added Successfully!');
                    //   redirect($url);
                }else
                {
                    $this->session->set_flashdata('error','Please Choose Image JPG OR PNG format and file size must be MAX 2 MB!');
                }
            }else
            {
                $this->session->set_flashdata('error','Plase Choose Slider Image!');
            }
           
               
             redirect(base_url() . 'Slider/create');
       } else
        { $data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);
        
        }
    }
    
   
    

  



    public function view()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Slider_model->get_sliderdata();
           
            $this->load->view('admin/slider_view', $data);
           
            
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
 
}

?>