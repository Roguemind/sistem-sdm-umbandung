<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Model_pimpinan');
        $this->load->model('Model_master');
        $this->load->model('Model_login');
    }

    public function index() {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'),$this->session->userdata('no_pegawai'))->row_array();
        $this->load->view('pimpinan/dashboard_pimpinan',$data);
    }

    public function viewData(){
        $data['datadosen'] = $this->Model_pimpinan->getDataDosen();
        $data['datatendik'] = $this->Model_pimpinan->getDataTendik();
        $this->load->view('pimpinan/view_pimpinan',$data);
    }
}