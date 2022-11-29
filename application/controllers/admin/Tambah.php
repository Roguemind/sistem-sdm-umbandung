<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_master');
    }
    public function tambahPegawai()
    {
        $this->load->view('admin/tambah_pegawai');
    }

    public function tambahUnit()
    {
        $this->load->view('admin/tambah_unit');
    }

    public function tambahJabatan()
    {
        $this->load->view('admin/tambah_jabatan');
    }

    public function tambahDosen()
    {
        $data['units'] = $this->Model_admin->getUnit();
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_dosen', $data);
    }

    public function tambahTendik()
    {
        $data['units'] = $this->Model_admin->getUnit();
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_tendik', $data);
    }

    public function fakultas()
    {
        $dataUnit['listf'] = $this->Model_admin->getUnit();
        $this->load->view('admin/fakultas', $dataUnit);
    }

    public function tambahSk()
    {
        $data['lista'] = $this->Model_admin->getUnit();
        $this->load->view('admin/tambah_sk', $data);
    }

    public function aksiTambahPegawai()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $nama = $this->input->POST('nama');
        $alamat = $this->input->POST('alamat');
        $email = $this->input->POST('email');
        $tanggal_lahir = $this->input->POST('tanggal_lahir');
        $tempat_lahir = $this->input->POST('tempat_lahir');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $agama = $this->input->POST('agama');
        $pendidikan = $this->input->POST('pendidikan');
        $kontak = $this->input->POST('kontak');
        $status_pernikahan = $this->input->POST('status_pernikahan');
        $tahun_lulus = $this->input->POST('tahun_lulus');
        $almamater = $this->input->POST('almamater');
        $no_sk_pegawai = $this->input->POST('no_sk_pegawai');
        $tmt_pegawai = $this->input->POST('tmt_pegawai');

        $dataPegawai = array(
            'id_pegawai' => $id_pegawai,
            'nama' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat-lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'kontak' => $kontak,
            'status_pernikahan' => $status_pernikahan,
            'tahun_lulus' => $tahun_lulus,
            'almamater' => $almamater,
            'no_sk_pegawai' => $no_sk_pegawai,
            'tmt_pegawai' => $tmt_pegawai,
        );

        $this->Model_admin->simpanDataPegawai($dataPegawai);
        redirect('admin/dashboard');
    }

    public function aksiTambahUnit()
    {
        $id_unit = $this->input->POST('id_unit');
        $nama = $this->input->POST('nama');

        $dataUnit = array(
            'id_unit' => $id_unit,
            'nama' => $nama
        );
        $this->Model_admin->simpanDataUnit($dataUnit);
        redirect('admin/dashboard');
    }

    public function aksiTambahJabatan()
    {
        $id_jabatan = $this->input->POST('id_jabatan');
        $nama_jabatan = $this->input->POST('nama_jabatan');

        $dataJabatan = array(
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $nama_jabatan
        );
        $this->Model_admin->simpanDataJabatan($dataJabatan);
        redirect('admin/dashboard');
    }

    public function aksiTambahDosen()
    {
        $id_jabatan = $this->input->POST('id_jabatan');
        $nama_jabatan = $this->input->POST('nama_jabatan');

        $dataJabatan = array(
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $nama_jabatan
        );
        $this->Model_admin->simpanDataJabatan($dataJabatan);
        redirect('admin/dashboard');
    }

    public function aksiTambahTendik()
    {
        $id_pegawai = $this->input->POST('id_pegawai');
        $no_pegawai = $this->input->POST('no_pegawai');
        $nama = $this->input->POST('nama');
        $alamat = $this->input->POST('alamat');
        $email = $this->input->POST('email');
        $tanggal_lahir = $this->input->POST('tanggal_lahir');
        $tempat_lahir = $this->input->POST('tempat_lahir');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $agama = $this->input->POST('agama');
        $pendidikan = $this->input->POST('pendidikan');
        $kontak = $this->input->POST('kontak');
        $unitkerja = $this->input->POST('unit-kerja');
        $jabatan = $this->input->POST('jabatan');
        $status_pernikahan = $this->input->POST('status_pernikahan');
        $tahun_lulus = $this->input->POST('tahun_lulus');
        $almamater = $this->input->POST('almamater');
        $no_sk_pegawai = $this->input->POST('no_sk_pegawai');
        $tmt_pegawai = $this->input->POST('tmt_pegawai');

        $dataPegawai = array(
            'id_pegawai' => $id_pegawai,
            'nama' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat-lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'kontak' => $kontak,
            'status_pernikahan' => $status_pernikahan,
            'tahun_lulus' => $tahun_lulus,
            'almamater' => $almamater,
            'no_sk_pegawai' => $no_sk_pegawai,
            'tmt_pegawai' => $tmt_pegawai,
        );


        $dataTendik = array(
            'no_pegawai' => $no_pegawai,
            'id_pegawai' => $id_pegawai,
            'id_unit' => $unitkerja,
            'id_jabatan' => $jabatan,
        );

        $this->Model_admin->simpanDataPegawai($dataPegawai);
        $this->Model_admin->simpanDataTendik($dataTendik);
        redirect('admin/dashboard');
    }

    public function aksiSk()
    {
        $no_sk = $this->input->POST('no_sk');
        $judul = $this->input->POST('judul');
        $id_unit = $this->input->POST('unit-kerja');
        $tipe_surat = $this->input->POST('tipe_surat');

        $dataSk = array(
            'no_sk' => $no_sk,
            'judul' => $judul,
            'id_unit' => $id_unit,
            'tipe_surat' => $tipe_surat
        );
        $this->Model_admin->tambahSk($dataSk);
        redirect('admin/dashboard');
    }
}
