<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_dosen');
    }

    public function index()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['prodis'] = $this->Model_admin->getProdi();
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $data['listd'] = $this->Model_admin->getDataDosen();
        
        $data['title'] = 'pegawai';
        
        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/index', $data);
    }
    
    public function create(){
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['prodis'] = $this->Model_admin->getProdi();
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $data['listd'] = $this->Model_admin->getDataDosen();
        
        $data['title'] = 'pegawai';
        
        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/create', $data);
    }

    public function store(){
        $this->input->post('no_pegawai');

    }

    public function edit($id){}

    public function update($id){}

    public function destroy($id){}
}
