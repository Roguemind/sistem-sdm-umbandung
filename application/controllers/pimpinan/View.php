<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Model_pimpinan');
        $this->load->model('Model_master');
    }

    public function index(){
        $data['datadosen'] = $this->Model_pimpinan->getDataDosen();
        $data['datatendik'] = $this->Model_pimpinan->getDataTendik();
        $this->load->view('pimpinan/view_pimpinan',$data);
    }

    public function datadosen() {
        $data['datadosen'] = $this->Model_pimpinan->getDataDosen();
        $this->load->view('pimpinan/view_dosen',$data);
    }
    
    public function datatendik() {
        $data['datatendik'] = $this->Model_pimpinan->getDataTendik();
        $this->load->view('pimpinan/view_tendik',$data);
    }
}