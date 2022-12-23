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
        $data['title'] = 'Arsip Dosen';
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
        $data['title'] = 'Arsip Tendik';
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

    public function uploadSurat($role)
    {
        $judul = $this->input->POST('judul');
        $tipe_surat = $this->input->POST('tipe_surat');
        $unit_kerja = $this->input->POST('unit-kerja');
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 100000;
        $config['upload_path']      = FCPATH . '/upload/berkas/dosen/';
        $config['file_name']        = $judul . "_" . $unit_kerja . "_" . ".pdf";
        $this->load->library('upload', $config);
        $cek = $this->upload->do_upload('file_surat');
        if ($cek) {
            var_dump($this->upload->data());
        } else {
            var_dump($this->upload->display_errors());
        }
        /*if(!$this->upload->do_upload('file_surat')){
            $file_surat = $this->upload->data('file_name');
            $data = array(
                'judul' => $judul,
                'tipe_surat' => $tipe_surat,
                'id_prodi' => $unit_kerja,
                'file_surat' => $file_surat,
            );
            $this->Model_admin->uploadBerkasDosen($data);
            redirect('admin/arsip/dosen');
        }else{
            var_dump('error');
            exit;
        }*/
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
        $data['title'] = 'Cuti';
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
        $data['prodis'] = $this->Model_admin->getProdi();
        $data['jabatans'] = $this->Model_admin->getJabatan();
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
        $gelar_depan = $this->input->POST('gelar_depan');
        $gelar_belakang = $this->input->POST('gelar_belakang');
        $alamat = $this->input->POST('alamat');
        $email = $this->input->POST('email');
        $tanggal_lahir = $this->input->POST('tanggal_lahir');
        $tempat_lahir = $this->input->POST('tempat_lahir');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $agama = $this->input->POST('agama');
        $pendidikan = $this->input->POST('pendidikan');
        $kontak = $this->input->POST('kontak');
        $prodi = $this->input->POST('prodi');
        $jabatan = $this->input->POST('jabatan');
        $status_pernikahan = $this->input->POST('status_pernikahan');
        $no_sk_pegawai = $this->input->POST('no_sk_pegawai');
        $tmt_pegawai = $this->input->POST('tmt_pegawai');

        $dataPegawai = array(
            'no_pegawai' => $no_pegawai,
            'nama' => $nama,
            'gelar_depan' => $gelar_depan,
            'gelar_belakang' => $gelar_belakang,
            'alamat' => $alamat,
            'email' => $email,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat-lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'kontak' => $kontak,
            'status_pernikahan' => $status_pernikahan,
            'no_sk_pegawai' => $no_sk_pegawai,
            'tmt_pegawai' => $tmt_pegawai,
        );

        $dataDosen = array(
            'no_pegawai' => $no_pegawai,
            'id_pegawai' => $id_pegawai,
            'id_prodi' => $prodi,
            'id_jabatan' => $jabatan,
        );

        $this->Model_admin->insertPegawai($dataPegawai);
        $this->Model_admin->insertDosen($dataDosen);
        redirect('admin/viewdosen');
    }

    public function profileDosen($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['dosen'] = $this->Model_admin->aksesDataDosen($uid);
        $data['jabatan'] = $this->Model_admin->getJabatan_Dosen($uid);
        $data['profak'] = $this->Model_admin->getProFak_Dosen($uid);
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $data['prodis'] = $this->Model_admin->getProdi();
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/profile_dosen', $data);
    }

    public function aksiEditProfileDosen()
    {
        $nama = $this->input->post('nama');
        $no_pegawai = $this->input->post('no_pegawai');
        $nidn = $this->input->POST('id_pegawai');
        $nik = $this->input->POST('nik');
        $tmpt_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tanggal_lahir');
        $jk = $this->input->POST('jenis_kelamin');
        $prodi = $this->input->POST('prodi');
        $jabatan = $this->input->POST('jabatan');
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
            'agama' => $agama,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
        );
        $dataDosen = array(
            'id_prodi' => $prodi,
            'id_jabatan' => $jabatan,
        );
        $this->Model_master->updateProfile($dataPegawai, $nidn);
        $this->Model_admin->updateDosen($dataDosen, $no_pegawai);
        $this->session->set_flashdata('save', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Berhasil Di Ubah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('admin/fungsi/profileDosen/' . $no_pegawai);
    }

    public function deleteDosen($uid)
    {
        $this->Model_admin->deleteDosen($uid);
        $this->Model_admin->deletePegawai($uid);
        redirect('admin/viewtendik');
    }

    // Fungsi CRUD data Tendik
    public function dataTendik()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['units'] = $this->Model_admin->getUnit();
        $data['jabatans'] = $this->Model_admin->getJabatan();
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
        $gelar_depan = $this->input->POST('gelar_depan');
        $gelar_belakang = $this->input->POST('gelar_belakang');
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
            'no_sk_pegawai' => $no_sk_pegawai,
            'tmt_pegawai' => $tmt_pegawai,
        );

        $dataTendik = array(
            'no_pegawai' => $no_pegawai,
            'id_pegawai' => $id_pegawai,
            'id_unit' => $unitkerja,
            'id_jabatan' => $jabatan,
        );

        $this->Model_admin->insertPegawai($dataPegawai);
        $this->Model_admin->insertTendik($dataTendik);
        redirect('admin/viewtendik');
    }

    public function profileTendik($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['tendik'] = $this->Model_admin->aksesDataTendik($uid);
        $data['jabatans'] = $this->Model_admin->getJabatan();
        $data['units'] = $this->Model_admin->getUnit();
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('admin/profile_tendik', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksiEditProfileTendik()
    {
        $nama = $this->input->post('nama');
        $no_pegawai = $this->input->post('no_pegawai');
        $nidn = $this->input->POST('id_pegawai');
        $nik = $this->input->POST('nik');
        $tmpt_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tanggal_lahir');
        $jk = $this->input->POST('jenis_kelamin');
        $unit = $this->input->POST('unit');
        $jabatan = $this->input->POST('jabatan');
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
            'agama' => $agama,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
        );
        $dataTendik = array(
            'id_unit' => $unit,
            'id_jabatan' => $jabatan,
        );
        $this->Model_master->updateProfile($dataPegawai, $nidn);
        $this->Model_admin->updateTendik($dataTendik, $no_pegawai);
        $this->session->set_flashdata('save', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Berhasil Di Ubah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('view/tendik/' . $no_pegawai);
    }

    public function deleteTendik($uid)
    {
        $this->Model_admin->deleteTendik($uid);
        $this->Model_admin->deletePegawai($uid);
        redirect('admin/viewtendik');
    }

    // Fungsi Lembur
    public function melihatlembur()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['listlembur'] = $this->Model_admin->getlembur();
        $data['title'] = 'Lembur';
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
        $data['title'] = 'Jabatan Akademik Dosen';
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

    // Fungsi melihat unit
    public function melihatUnit()
    {
        $this->load->view('melihat_unit');
        $this->load->view('_partials/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/melihat_cuti');
    }
}
