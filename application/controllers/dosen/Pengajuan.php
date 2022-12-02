<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
    }

    public function index()
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

    public function pengajuanCuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['jangka_waktu'] = $this->Model_dosen->getPengajuan();
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar', $data);
        $this->load->view('dosen/pengajuan_cuti', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksicuti()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $nama = $this->input->POST('jenis_cuti');
        $tanggal_awal = $this->input->POST('tanggal_awal');
        $tanggal_masuk = $this->input->POST('tanggal_masuk');

        $datacuti = array(
            'id_pegawai' => $id_pegawai,
            'jensi_cuti' => $nama,
            'tgl_pengajuan' => $tanggal_awal,
            'tgl_masuk' => $tanggal_masuk

        );

        $this->Model_dosen->simpancuti($datacuti);
        redirect('dosen/dashboard');
    }
}
