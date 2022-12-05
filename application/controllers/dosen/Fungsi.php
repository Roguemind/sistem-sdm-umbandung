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
        $aktivasi = $this->Model_dosen->cekJAD($this->session->userdata('session_id'))->result_array();
        if ($this->Model_dosen->cekJAD($this->session->userdata('session_id'))->num_rows() == 0) {
            $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
            $this->load->view('_partials/head');
            $this->load->view('dosen/header', $data);
            $this->load->view('dosen/sidebar');
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('dosen/tambah_jad', $data);
        } else {
            if ($this->Model_dosen->cekJAD($aktivasi == 0)) {
                $this->load->view('dosen/tunggu');
            } else {
                redirect('dosen/fungsi/formJAD');
            }
        }
    }

    public function aksiPengajuanJAD()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $this->Model_dosen->pengajuanJAD($id_pegawai);
        redirect('dosen');
    }

    public function formJAD()
    {
        $this->load->view('dosen/formJAD');
    }
}
