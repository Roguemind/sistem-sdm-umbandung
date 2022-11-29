<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }

    public function pengajuanCuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('no_pegawai'));
        $data['jangka_waktu'] = $this->Model_tendik->getPengajuan();
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('tendik/pengajuan_cuti', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksicuti()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $nama = $this->input->POST('nama_cuti');
        $tanggal_awal = $this->input->POST('tanggal_awal');
        $tanggal_masuk = $this->input->POST('tanggal_masuk');

        $datacuti = array(
            'id_pegawai' => $id_pegawai,
            'tanggal_awal' => $tanggal_awal,
            'nama_cuti' => $nama,
            'tanggal_masuk' => $tanggal_masuk

        );

        $this->Model_tendik->simpancuti($datacuti);
        redirect('tendik/dashboard');
    }
}
