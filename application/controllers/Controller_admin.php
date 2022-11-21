
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }

    public function index()
    {
        $this->load->view('admin/dashboard_admin');
    }
    public function login()
    {
        $this->load->view('login2');
    }
}
