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
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('no_pegawai'));
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header_dosen', $data);
        $this->load->view('dosen/sidebar_dosen', $data);
        $this->load->view('dosen/dashboard_dosen', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function melihatSk()
    {
        $data['lista'] = $this->Model_dosen->getArsip_dosen($this->session->userdata('role'));
        $this->load->view('dosen/melihat_sk', $data);
    }
}
