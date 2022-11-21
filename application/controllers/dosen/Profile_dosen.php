<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
    }

    public function index()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('no_pegawai'))->row_array();
        $data['jabatan'] = $this->Model_master->getJabatan();
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header_dosen', $data);
        $this->load->view('dosen/sidebar_dosen', $data);
        $this->load->view('dosen/profile_dosen', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }
}
