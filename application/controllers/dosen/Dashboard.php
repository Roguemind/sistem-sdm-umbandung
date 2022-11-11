<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Model_dosen');
    }

    public function index() {
        $data['akun'] = $this->Model_tendik->getAkun($this->session->userdata('id_pegawai'));
        $this->load->view('dosen/dashboard_dosen',$data);
    }
}