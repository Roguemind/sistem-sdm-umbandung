<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }

    public function melihatSk()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['lista'] = $this->Model_master->getArsip($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['listu'] = $this->Model_tendik->getUnit($this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('tendik/melihat_sk', $data);
    }
}
