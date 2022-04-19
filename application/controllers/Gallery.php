<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Gallery_model');

    }




    // For to view notice
    public function view()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {
            $data['result'] = $this->Gallery_model->get_all_images();
            $this->load->view("admin/gallery_view", $data);

        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);

        }

    }




    // For to load add gallery view only
    public function create()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {
            $this->load->view('admin/gallery_add');
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);

        }
    }




    // For  to add  gallery image image
    public function creting_image()
    {

        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $picture = "";
            if (!empty($_FILES['galleryImage']['name'])) {
                $config['upload_path'] = 'public/web/pic/Gallary';
                $config['max_size'] = 2100;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                /*    $config['allowed_types'] = 'doc|pdf'; */
                $config['file_name'] = time() . '-' . $_FILES['galleryImage']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('galleryImage')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    $heading = test_input($this->input->post('img_heading'));
                    $img_category = test_input($this->input->post('img_category'));
                    $paragraph1 = test_input($this->input->post('paragraph1'));

                    $data = array('img_heading' => $heading, 'img_category' => $img_category,

                        'img_path' => $picture, 'img_status' => 1);

                    $this->Gallery_model->insert_data($data);
                    $this->session->set_flashdata('success', 'Image Added Successfully!');
                    //   redirect($url);
                } else {
                    $this->session->set_flashdata('error', 'Please Choose Image JPG OR PNG format and file size must be MAX 2 MB!');
                }
            } else {
                $this->session->set_flashdata('error', 'Plase Choose Image!');
            }

            redirect(base_url() . 'Gallery/create');
        } else { $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);

        }
    }




    // For  to change status of image
    public function status($t_id, $status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {
            $data = array('img_status' => $status);
            $this->Gallery_model->update_status($data, $t_id);
            $this->session->set_flashdata('success', 'Image Status changed Successfully!');
            redirect(base_url() . 'Gallery/view');

        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }

    // For to delete Image
    public function delete($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {
            $this->Gallery_model->delete_image($t_id);
            $this->session->set_flashdata('success', 'Image Deleted successfully');

            $responce['html'] = 'Image Deleted successfully';
            echo json_encode($responce);
           
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }

    // For to get image data for edit
    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {

            $data['result'] = $this->Gallery_model->get_single_data($t_id);
            $this->load->view('admin/gallery_edit', $data);

        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }





    // For to add update image
    public function update_image()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true) {

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = strip_tags($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $url = test_input($this->input->post('url'));

            $old_profile = test_input($this->input->post('old_profile'));
            $picture = "";
            if (!empty($_FILES['userImage']['name'])) {
                $config['upload_path'] = 'public/web/pic/Gallary';
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

                    $old_file_path = "public/web/pic/Gallary/" . $old_profile;
                    if (file_exists($old_file_path)) {
                        unlink($old_file_path);
                    }
                } else {
                    $picture = $old_profile;
                    $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                }
            } else {

                $picture = $old_profile;}

            $userid = test_input($this->input->post('id'));

            $heading = test_input($this->input->post('img_heading'));
            $img_category = test_input($this->input->post('img_category'));

            $data = array('img_heading' => $heading, 'img_category' => $img_category,

                'img_path' => $picture, 'img_status' => 1);
            $this->Gallery_model->update_data($data, $userid);

            $this->session->set_flashdata('success', 'Image Updated Successfully!');
            redirect($url);

        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Gallery/view');
    }

}
