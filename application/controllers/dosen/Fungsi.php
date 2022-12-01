<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
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

    public function cuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head');
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
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

    public function tambahjad()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head');
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/tambah_jad');
    }
    public function aksitambahjad()
    {
        $id_jad = $this->input->POST('id_jad');
        $nama = $this->input->POST('nama');

        $datajad = array(
            'id_jad' => $id_jad,
            'nama' => $nama
        );
        $this->Model_dosen->simpanDatajad($datajad);
        redirect('dosen/fungsi');
    }
}
