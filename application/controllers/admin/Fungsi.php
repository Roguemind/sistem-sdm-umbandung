<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
        $this->load->model('Model_master');
        $this->load->model('Model_tendik');
        $this->load->model('Model_pimpinan');
        $this->load->model('Model_admin');
    }

    //View Arsip
    public function lihatArsipDosen()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['lista'] = $this->Model_admin->getArsipDosen();
        $data['listp'] = $this->Model_admin->getProdi();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/arsip_dosen', $data);
    }

    public function lihatArsipTendik()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['lista'] = $this->Model_admin->getArsipTendik();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/arsip_tendik', $data);
    }

    public function tambahSurat()
    {
        $data['listsk'] = $this->Model_admin->getArsipTendik();
        $data['lista'] = $this->Model_admin->getUnit();
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_sk', $data);
    }

    public function aksiBerkasDosen()
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


    public function aksiBerkasTendik()
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

    // Fungsi Cuti
    public function melihatCuti()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listpengajuan'] = $this->Model_admin->getPengajuanbyId();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_cuti', $data);
    }

    // Fungsi CRUD data Dosen
    public function dataDosen()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listd'] = $this->Model_admin->getDataDosen();
        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_dosen', $data);
    }

    public function aksiTambahDosen()
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

        $dataDosen = array(
            'no_pegawai' => $no_pegawai,
            'id_pegawai' => $id_pegawai,
            'id_prodi' => $unitkerja,
            'id_jabatan' => $jabatan,
        );

        $this->Model_admin->simpanDataPegawai($dataPegawai);
        $this->Model_admin->simpanDataTendik($dataDosen);
        redirect('admin/dashboard');
    }

    // Fungsi CRUD data Tendik
    public function dataTendik()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listt'] = $this->Model_admin->getDataTendik();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_tendik', $data);
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

    // Fungsi Lembur
    public function melihatlembur()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listlembur'] = $this->Model_admin->getlembur();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_lembur', $data);
    }

    public function tambahlembur()
    {
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_lembur');
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
        $this->Model_admin->tambahlembur($datalembur);
        redirect('admin/tambah');
    }

    //Fungsi CRUD tambahan
    //CRUD Unit
    public function tambahUnit()
    {
        $this->load->view('admin/tambah_unit');
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

    //CRUD Jabatan
    public function tambahJabatan()
    {
        $this->load->view('admin/tambah_jabatan');
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

    //CRUD Fakultas
    public function fakultas()
    {
        $data['listf'] = $this->Model_admin->getUnit();
        $this->load->view('admin/fakultas', $data);
    }

    public function tambahfakultas()
    {
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_fakultas');
    }

    public function aksiTambahfakultas()
    {
        $id_fakultas = $this->input->POST('id_fakultas');
        $nama_fakultas = $this->input->POST('nama_fakultas');

        $datafakultas = array(
            'id_fakultas' => $id_fakultas,
            'nama_fakultas' => $nama_fakultas
        );
        $this->Model_admin->simpanDatafakultas($datafakultas);
        redirect('admin/tambah');
    }

    //CRUD Prodi
    public function tambahprodi()
    {
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/tambah_prodi');
    }

    public function aksiTambahprodi()
    {
        $id_prodi = $this->input->POST('id_prodi');
        $id_fakultas = $this->input->POST('id_fakultas');
        $nama_prodi = $this->input->POST('nama_prodi');

        $dataprodi = array(
            'id_prodi' => $id_prodi,
            'id_fakultas' => $id_fakultas,
            'nama_prodi' => $nama_prodi
        );
        $this->Model_admin->simpanDataprodi($dataprodi);
        redirect('admin/tambah');
    }

    //Fungsi JAD

    public function tampiljad()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listjad'] = $this->Model_admin->getjad();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/tampil_jad', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiSetujuJAD($uid)
    {
        $aktivasi = array(
            'id_jad' => $uid,
            'aktivasi' => 1,
        );
        $this->Model_admin->simpanDatajad($aktivasi, $uid);
        redirect('admin/fungsi/tampilJad');
    }
}
