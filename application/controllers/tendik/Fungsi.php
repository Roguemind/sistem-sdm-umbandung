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

    public function tambahlembur()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('tendik/tambah_lembur');
    }

    public function melihatSk()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['lista'] = $this->Model_dosen->getArsip_dosen($this->session->userdata('role'));
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/melihat_sk', $data);
    }

    public function aksilembur()
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
        redirect('tendik/fungsi');
    }
}
