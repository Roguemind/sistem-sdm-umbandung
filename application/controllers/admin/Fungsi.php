<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
        $this->load->model('Model_tendik');
        $this->load->model('Model_pimpinan');
        $this->load->model('Model_admin');
    }

    public function melihatSk()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['lista'] = $this->Model_dosen->getArsip_dosen($this->session->userdata('role'));
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/melihat_sk', $data);
    }

    public function melihatCuti()
    {
        $data['listpengajuan'] = $this->Model_admin->getPengajuanbyId($this->session->userdata('pegawai'));
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_cuti', $data);
    }

    public function dataDosen()
    {
        $data['datadosen'] = $this->Model_pimpinan->getDataDosen();
        $this->load->view('pimpinan/view_dosen', $data);
    }

    public function dataTendik()
    {
        $data['datatendik'] = $this->Model_pimpinan->getDataTendik();
        $this->load->view('pimpinan/view_tendik', $data);
    }
}
