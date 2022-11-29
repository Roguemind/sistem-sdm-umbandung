<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
    }

    public function index()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('login');
        } else{
            $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
            $this->load->view('_partials/head');
            $this->load->view('dosen/header', $data);
            $this->load->view('dosen/sidebar');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('dosen/dashboard', $data);
        }
    }
}
