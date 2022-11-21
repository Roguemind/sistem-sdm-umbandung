<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    }
    public function index()
    {
        $this->load->view('_partials/head');
        $this->load->view('admin/header_admin');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('admin/profile_admin');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }
}
