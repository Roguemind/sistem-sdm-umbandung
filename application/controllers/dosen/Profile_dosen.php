<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_dosen extends CI_Controller
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
        $data['jabatan'] = $this->Model_master->getJabatan($this->session->userdata('role'), $this->session->userdata('no_pegawai'));
        $data['unit'] = $this->Model_master->getUnit($this->session->userdata('role'), $this->session->userdata('no_pegawai'));
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header_dosen', $data);
        $this->load->view('dosen/sidebar_dosen', $data);
        $this->load->view('dosen/profile_dosen', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiEditProfile()
    {
        $nama = $this->input->POST('nama');
        $nidn = $this->input->POST('nidn');
        $nik = $this->input->POST('nik');
        $tmpt_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tanggal_lahir');
        $jenis_kelamin = $this->input->POST('jk');
        $agama = $this->input->POST('agama');
        $alamat = $this->input->POST('alamat');
        $kontak = $this->input->POST('phone');
        $email = $this->input->POST('email');

        $dataPegawai = array(
            'nama' => $nama,
            'id_pegawai' => $nidn,
            'nik' => $nik,
            'tempat-lahir' => $tmpt_lahir,
            'tanggal_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
        );
        $this->db->update('pegawai',$dataPegawai, ['id_pegawai' => $nidn]);
        redirect('dosen/profile_dosen');
    }
}
