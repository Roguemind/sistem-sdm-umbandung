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

    //Fungsi Lihat SK
    public function melihatSk()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['lista'] = $this->Model_dosen->getArsip($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head', $data);
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/melihat_sk', $data);
    }

    //Fungsi Pengajuan Cuti
    public function pengajuanCuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head');
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/pengajuan_cuti', $data);
    }

    public function aksiCuti()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $nama = $this->input->POST('jenis_cuti');
        $jangka_waktu = $this->input->POST('jangka_waktu');

        $datacuti = array(
            'id_pegawai' => $id_pegawai,
            'jangka_waktu' => $jangka_waktu,
            'jenis_cuti' => $nama,

        );

        $this->Model_dosen->simpancuti($datacuti);
        redirect('dosen/dashboard');
    }

    //Fungsi JAD
    public function tambahJAD()
    {
        $aktivasis = $this->Model_dosen->cekJAD($this->session->userdata('session_id'))->row();

        if ($this->Model_dosen->cekJAD($this->session->userdata('session_id'))->num_rows() == 0) {
            $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
            $this->load->view('_partials/head');
            $this->load->view('dosen/header', $data);
            $this->load->view('dosen/sidebar');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('dosen/tambah_jad', $data);
        } else {


            if ($aktivasis->aktivasi == 0) {
                $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
                $this->load->view('_partials/head');
                $this->load->view('dosen/header', $data);
                $this->load->view('dosen/sidebar');
                $this->load->view('_partials/footer');
                $this->load->view('_partials/script');
                $this->load->view('dosen/tunggu');
            } else {
                $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
                $this->load->view('_partials/head');
                $this->load->view('dosen/header', $data);
                $this->load->view('dosen/sidebar');
                $this->load->view('_partials/footer');
                $this->load->view('_partials/script');
                $this->load->view('dosen/formJAD');
            }
        }
    }

    public function aksiPengajuanJAD()
    {
        $nik = $this->input->post('nik');
        $this->Model_dosen->pengajuanJAD($nik);
        redirect('dosen');
    }

    public function formJAD()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $this->load->view('_partials/head');
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('dosen/formJAD');
    }
}
