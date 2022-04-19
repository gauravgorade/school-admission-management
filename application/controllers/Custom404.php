<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Custom404 extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/custom404');
    }
}


?>