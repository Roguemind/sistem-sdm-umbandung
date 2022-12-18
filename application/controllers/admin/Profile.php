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
        $data['title'] = 'profile';
        $data['akun'] = $this->Model_master->aksesDB('admin', $this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiEditProfile()
    {
        $nama_dpn = $this->input->post('namadpn');
        $nama_tgh = $this->input->post('namatgh');
        $nama_blkg = $this->input->post('namablkg');
        $nopeg = $this->input->POST('id_pegawai');
        $nik = $this->input->POST('nik');
        $tmpt_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tanggal_lahir');
        $agama = $this->input->POST('agama');
        $alamat = $this->input->POST('alamat');
        $kontak = $this->input->POST('kontak');
        $email = $this->input->POST('email');

        $dataPegawai = array(
            'nama_depan' => $nama_dpn,
            'nama_tengah' => $nama_tgh,
            'nama_belakang' => $nama_blkg,
            'nik' => $nik,
            'tempat_lahir' => $tmpt_lahir,
            'tanggal_lahir' => $tgl_lahir,
            'agama' => $agama,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email_pribadi' => $email,
        );
        $this->Model_master->updateProfile($dataPegawai, $nik);
        redirect('admin/profile');
    }
}
