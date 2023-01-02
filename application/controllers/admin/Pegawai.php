<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_dosen');

        $this->load->model('Model_pegawai');
    }

    public function index()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));

        $data['listDosen'] = $this->Model_pegawai->getPegawaiDosen();
        $data['listTendik'] = $this->Model_pegawai->getPegawaiTendik();

        $data['title'] = 'pegawai';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/index', $data);
    }

    public function profileDosen($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['dosen'] = $this->Model_pegawai->getProfilDosen($uid);
        $data['keluarga'] = $this->Model_pegawai->getKeluargaPegawai($uid);
        $data['rekpens'] = $this->Model_pegawai->getRekamPendidikan($uid);
        $data['title'] = 'pegawai';
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/profile_dosen', $data);
    }

    public function profileTendik($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['tendik'] = $this->Model_pegawai->getProfilTendik($uid);
        $data['keluarga'] = $this->Model_pegawai->getKeluargaPegawai($uid);
        $data['units'] = $this->Model_admin->getUnit();
        $data['rekpens'] = $this->Model_pegawai->getRekamPendidikan($uid);
        $data['title'] = 'pegawai';
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/pegawai/profile_tendik', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function create()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['jabdos'] = $this->Model_pegawai->getJabatanDosen();
        $data['jabten'] = $this->Model_pegawai->getJabatanTendik();
        $data['prodi'] = $this->Model_admin->getProdi();
        $data['unit'] = $this->Model_admin->getUnit();
        $data['title'] = 'pegawai';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/tambah', $data);
    }

    public function store()
    {
        // Rules validasi
        $this->form_validation->set_rules(
            'inputNik',
            'nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
            $data['fakultas'] = $this->Model_pegawai->getFakultas();
            $data['prodi'] = $this->Model_pegawai->getProdi();
            $data['unit'] = $this->Model_pegawai->getUnit();
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/tambah', $data);
        } else {
            if ($this->input->post('inputNamaDepan') != NULL) {
                $nama_dpn = $this->input->post('inputNamaDepan');
            } else {
                $nama_dpn = NULL;
            }
            if ($this->input->post('inputNamaTengah') != NULL) {
                $nama_tgh = $this->input->post('inputNamaTengah');
            } else {
                $nama_tgh = NULL;
            }
            if ($this->input->post('inputNamaBelakang') != NULL) {
                $nama_blkg = $this->input->post('inputNamaBelakang');
            } else {
                $nama_blkg = NULL;
            }
            $dataPegawai = array(
                // 'id_pegawai' => rand(10,1000),

                'nik' => $this->input->POST('inputNik'),
                'nama_depan' => $nama_dpn,
                'nama_tengah' => $nama_tgh,
                'nama_belakang' => $nama_blkg,
                'alamat' => $this->input->POST('inputAlamat'),
                'tempat_lahir' => $this->input->POST('inputTempatLahir'),
                'tanggal_lahir' => $this->input->POST('inputTanggalLahir'),
                'agama' => $this->input->POST('inputAgama'),
                'jenis_kelamin' => $this->input->POST('inputJenisKelamin'),
                'status_pernikahan' => $this->input->POST('inputSetatusPernikahan'),
                'email_pribadi' => $this->input->POST('inputEmail'),
                'kontak' => $this->input->POST('inputKontak'),
                'pendidikan' => $this->input->POST('inputpendidikan'),
                'no_sk_pegawai_tetap' => $this->input->POST('inputNoSKPegawaiTetap'),
                'no_sk_calon_pegawai' => $this->input->POST('inputNoSKCalonPegawai'),
                'tmt_calon_pegawai' => $this->input->POST('inputTMTSKCalonPegawai'),
                'npwp' => $this->input->POST('inputNPWP'),
                'nama_wajib_pajak' => $this->input->POST('inputNamaWajibPajak'),
                'status_pernikahan' => $this->input->POST('inputStatusPernikahan'),
                'jumlah_tanggungan' => $this->input->POST('inputJumlahTanggungan'),
                'golongan_dan_pangkat' => $this->input->POST('inputGolongan'),
                'golongan_dan_panggkat_inpassing' => '-',
                'status_kewarganegaraan' => $this->input->POST('inputKewarganegaraan'),
            );
            $dataKeluarga = array(
                'nik_pegawai' => $this->input->post('inputNik'),
                'nama_anggota' => $this->input->post('inputNamaPasangan'),
                'hubungan' => 'Suami/Istri',
                'nik_anggota' => '-',
                'pekerjaan' => $this->input->post('inputPekerjaanPasangan'),
            );
            $this->Model_pegawai->savePegawai($dataPegawai);
            $this->Model_pegawai->saveKeluargaPegawai($dataKeluarga);
            if ($this->input->post('inputJabatanPegawai') == 'Dosen') {
                $dataDosen = array(
                    'nik' => $this->input->POST('inputNik'),
                    'id_pegawai' => $this->input->post('inputNoPegawai'),
                    'id_prodi' => $this->input->post('inputProgramStudi'),
                    'id_jabatan' => $this->input->post('inputJabatan'),
                    'status_kerja' => $this->input->post('inputStatusKerja'),
                    'id_scopus' => $this->input->post('inputScopusID'),
                    'id_sinta' => $this->input->post('inputSINTAID'),
                    'id_publons' => $this->input->post('inputPublonsID'),
                );
                $dataAkun = array(
                    'username' => $this->input->post('inputNik'),
                    'password' => 'dosen',
                    'role' => 'dosen',
                    'id_pegawai' => $this->input->post('inputNoPegawai')
                );
                $this->Model_pegawai->saveDosen($dataDosen);
                $this->Model_pegawai->saveAkun($dataAkun);
            } else if ($this->input->post('inputJabatanPegawai') == 'Tendik') {
                $dataTendik = array(
                    'nik' => $this->input->POST('inputNik'),
                    'id_pegawai' => $this->input->post('inputNoPegawai'),
                    'id_unit' => $this->input->post('inputUnitKerja'),
                    'id_jabatan' => $this->input->post('inputJabatan'),
                    'status_kerja' => $this->input->post('inputStatusKerja'),
                );
                $dataAkun = array(
                    'username' => $this->input->post('inputNik'),
                    'password' => 'tendik',
                    'role' => 'tendik',
                    'id_pegawai' => $this->input->post('inputNoPegawai')
                );
                $this->Model_pegawai->saveTendik($dataTendik);
                $this->Model_pegawai->saveAkun($dataAkun);
            }
            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil menambahkan data');
            if ($this->input->post('inputJabatanPegawai') == 'Dosen') {
                redirect('admin/dosen');
            } else if ($this->input->post('inputJabatanPegawai') == 'Tendik') {
                redirect('admin/tendik');
            }
        }
    }

    public function edit($id)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['pegawai'] = $this->Model_pegawai->getPegawaiById($id);
        $data['title'] = 'pegawai';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/edit', $data);
    }

    public function update()
    {
        $nik = $this->input->POST('inputNoPegawai');

        // Rules validasi
        $this->form_validation->set_rules(
            'inputNik',
            'nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNik',
            'nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNik',
            'nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNik',
            'nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );


        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
            $data['pegawai'] = $this->Model_pegawai->getPegawaiById($nik);
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/editUp', $data);
        } else {
            $nik = $this->input->POST('inputNoPegawai');
            $dataPegawai = array(
                'no_pegawai' => $this->input->POST('inputNoPegawai'),
                'nik' => $this->input->POST('inputNik'),
                'gelar_depan' => $this->input->POST('inputGelarDepan'),
                'nama' => $this->input->POST('inputNamaLengkap'),
                'gelar_belakang' => $this->input->POST('inputGelarBelakang'),
                'alamat' => $this->input->POST('inputAlamat'),
                'tempat_lahir' => $this->input->POST('inputTempatLahir'),
                'tanggal_lahir' => $this->input->POST('inputTanggalLahir'),
                'agama' => $this->input->POST('inputAgama'),
                'jenis_kelamin' => $this->input->POST('inputJenisKelamin'),
                'status_pernikahan' => $this->input->POST('inputSetatusPernikahan'),
                'email' => $this->input->POST('inputEmail'),
                'kontak' => $this->input->POST('inputKontak'),
                'pendidikan' => $this->input->POST('inputpendidikan'),
                'no_sk_pegawai' => $this->input->POST('inputNoSkPegawai'),
                'tmt_pegawai' => $this->input->POST('inputTmtPegawai'),
                'foto_peg' => $this->input->POST('inputfotoprofile'),
            );
            $this->Model_pegawai->editPegawai($nik, $dataPegawai);

            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil edit data');
            redirect('admin/pegawai');
        }
    }

    public function delete($id)
    {
        if ($this->input->post('pilihDataTampil') == "dosen") {
            $this->Model_pegawai->deleteDosen($id);
        } else if ($this->input->post('pilihDataTampil') == "tendik") {
            $this->Model_pegawai->deleteTendik($id);
        }
        $this->Model_pegawai->deletePegawai($id);

        if ($this->Model_pegawai->deletePegawai($id) == TRUE) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'text' => 'Berhasil hapus data',
                    'type' => 'success'
                )));
        }
    }
}
