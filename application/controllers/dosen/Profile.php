<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
    }

    public function index()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['jabatan'] = $this->Model_dosen->getJabatan($this->session->userdata('session_id'));
        $data['profak'] = $this->Model_dosen->getProfak($this->session->userdata('session_id'));
        $data['rekpens'] = $this->Model_master->getRekamPendidikan($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/script');
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar', $data);
        $this->load->view('dosen/profile', $data);
        $this->load->view('_partials/footer');
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
        $this->session->set_flashdata('save', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Berhasil Di Ubah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('dosen/profile');
    }
}
