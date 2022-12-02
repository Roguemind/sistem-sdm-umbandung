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
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['lista'] = $this->Model_admin->getArsip_dosen();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_sk', $data);
    }

    public function melihatCuti()
    {
        $data['listpengajuan'] = $this->Model_admin->getPengajuanbyId();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_cuti', $data);
    }

    public function dataDosen()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listd'] = $this->Model_admin->getDataDosen();
        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_dosen', $data);
    }

    public function dataTendik()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['datatendik'] = $this->Model_admin->getDataTendik();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_tendik', $data);
    }

    public function melihatlembur()
    {
        $data['listlembur'] = $this->Model_admin->getlembur();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_lembur', $data);
    }
}
