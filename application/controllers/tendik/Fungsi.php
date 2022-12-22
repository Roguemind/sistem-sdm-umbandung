<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }
    
    //Melihat SK
    public function melihatSk()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['lista'] = $this->Model_master->getArsip($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['listu'] = $this->Model_tendik->getUnit($this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('tendik/melihat_sk', $data);
    }

    //Fungsi Lembur
    public function tambahLembur()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('tendik/tambah_lembur');
    }


    public function aksiLembur()
    {
        $id_lembur = $this->input->POST('id_lembur');
        $no_pegawai = $this->input->POST('no_pegawai');
        $jenis_pk = $this->input->POST('jenis_pk');
        $tanggal_lembur = $this->input->POST('tanggal_lembur');

        $datalembur = array(
            'id_lembur' => $id_lembur,
            'no_pegawai' => $no_pegawai,
            'jenis_pk' => $jenis_pk,
            'tanggal_lembur' => $tanggal_lembur
        );
        $this->Model_tendik->tambahlembur($datalembur);
        redirect('tendik/tambahlembur');
    }

    //Fungsi Cuti
    public function pengajuanCuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['jangka_waktu'] = $this->Model_tendik->getPengajuan();
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('tendik/pengajuan_cuti', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiCuti()
    {
        $no_pegawai = $this->input->POST('no_pegawai');
        $nama = $this->input->POST('nama_cuti');
        $tanggal_awal = $this->input->POST('tanggal_awal');
        $tanggal_masuk = $this->input->POST('tanggal_masuk');

        $datacuti = array(
            'no_pegawai' => $no_pegawai,
            'tanggal_awal' => $tanggal_awal,
            'nama_cuti' => $nama,
            'tanggal_masuk' => $tanggal_masuk

        );

        $this->Model_tendik->simpancuti($datacuti);
        redirect('tendik/dashboard');
    }
}
