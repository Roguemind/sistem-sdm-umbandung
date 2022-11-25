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
        $this->load->view('dosen/dashboard_dosen', $data);
    }

    public function cuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('no_pegawai'));
        $this->load->view('tendik/pengajuan_cuti', $data);
    }

    public function aksicuti()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $nama = $this->input->POST('nama_cuti');
        $jangka_waktu = $this->input->POST('jangka_waktu');

        $datacuti = array(
            'id_pegawai' => $id_pegawai,
            'jangka_waktu' => $jangka_waktu,
            'nama_cuti' => $nama,

        );

        $this->Model_dosen->simpancuti($datacuti);
        redirect('dosen/dashboard');
    }
}
