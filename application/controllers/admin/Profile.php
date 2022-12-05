<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }

    public function index()
    {
        $data['akun'] = $this->Model_master->aksesDB('tendik', $this->session->userdata('session_id'));
        $data['jabatan'] = $this->Model_tendik->getJabatan($this->session->userdata('session_id'));
        $data['unit'] = $this->Model_tendik->getUnit($this->session->userdata('session_id'));
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $data['units'] = $this->Model_admin->getUnit();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiEditProfile()
    {
        $nidn = $this->input->POST('id_pegawai');
        $nik = $this->input->POST('nik');
        $tmpt_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tanggal_lahir');
        $agama = $this->input->POST('agama');
        $alamat = $this->input->POST('alamat');
        $kontak = $this->input->POST('phone');
        $email = $this->input->POST('email');

        $dataPegawai = array(
            'nik' => $nik,
            'tempat-lahir' => $tmpt_lahir,
            'tanggal_lahir' => $tgl_lahir,
            'agama' => $agama,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
        );
        $this->Model_master->updateProfile($dataPegawai, $nidn);
        redirect('tendik/profile');
    }
}
