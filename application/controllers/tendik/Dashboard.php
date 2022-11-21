<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }

    public function index()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('no_pegawai'))->row_array();
        $this->load->view('_partials2/head', $data);
        $this->load->view('tendik/header_tendik', $data);
        $this->load->view('tendik/sidebar_tendik', $data);
        $this->load->view('tendik/dashboard_tendik', $data);
        $this->load->view('_partials2/footer');
        $this->load->view('_partials2/script');
    }
}
