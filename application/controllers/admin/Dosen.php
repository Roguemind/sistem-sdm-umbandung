<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
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

        $data['title'] = 'dosen';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/dosen/index', $data);
    }

    public function profileDosen($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['dosen'] = $this->Model_pegawai->getProfilDosen($uid);
        $data['rekpens'] = $this->Model_pegawai->getRekamPendidikan($uid);
        $data['title'] = 'pegawai';
        $this->load->view('_partials/head', $data);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/profile_dosen', $data);
    }

    public function store()
    {
        // Rules validasi
        $this->form_validation->set_rules(
            'inputNik',
            'NIK',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );


        $this->form_validation->set_rules(
            'inputNamaBelakang',
            'nama_belakang',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputAlamat',
            'alamat',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTempatLahir',
            'tempat_lahir',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTanggalLahir',
            'tanggal_lahir',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputAgama',
            'agama',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputJenisKelamin',
            'jenis_kelamin',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoSKPegawai',
            'no_sk_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTMTSKPegawai',
            'tmt_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNPWP',
            'npwp',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNamaWajibPajak',
            'nama_wajib_pajak',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputStatusPernikahan',
            'status_pernikahan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputPekerjaanPasangan',
            'pekerjaan pasangan/isi tidak bekerja bila lajang',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputJumlahTanggungan',
            'jumlah_tanggungan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'nomor pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );
        
        $this->form_validation->set_rules(
            'inputProgramStudi',
            'program studi dosen',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputStatusKerja',
            'status pekerja',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputStatus',
            'status',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoSKPegawai',
            'nomor sk pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTMTSKPegawai',
            'tmt pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'nomor pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputKewarganegaraan',
            'kewarganegaraan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputJabatan',
            'jabatan struktural dosen',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
            $data['jabdos'] = $this->Model_pegawai->getJabatanDosen();
            $data['jabten'] = $this->Model_pegawai->getJabatanTendik();
            $data['prodi'] = $this->Model_admin->getProdi();
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/dosen/tambah', $data);
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
                'no_sk_pegawai' => $this->input->POST('inputNoSKPegawai'),
                'tmt_pegawai' => $this->input->POST('inputTMTSKPegawai'),
                'npwp' => $this->input->POST('inputNPWP'),
                'nama_wajib_pajak' => $this->input->POST('inputNamaWajibPajak'),
                'status_pernikahan' => $this->input->POST('inputStatusPernikahan'),
                'nama_pasangan' => $this->input->post('inputNamaPasangan'),
                'pekerjaan_pasangan' => $this->input->post('inputPekerjaanPasangan'),
                'jumlah_tanggungan' => $this->input->POST('inputJumlahTanggungan'),
                'golongan_dan_pangkat' => $this->input->POST('inputGolongan'),
                'golongan_dan_panggkat_inpassing' => '-',
                'status_kewarganegaraan' => $this->input->POST('inputKewarganegaraan'),
            );
            $this->Model_pegawai->savePegawai($dataPegawai);
            $dataDosen = array(
                'nik' => $this->input->POST('inputNik'),
                'id_pegawai' => $this->input->post('inputNoPegawai'),
                'id_prodi' => $this->input->post('inputProgramStudi'),
                'id_jabatan' => $this->input->post('inputJabatan'),
                'status_kerja' => $this->input->post('inputStatusKerja'),
                'status' => $this->input->post('inputStatus'),
                'id_scopus' => $this->input->post('inputScopusID'),
                'id_sinta' => $this->input->post('inputSINTAID'),
                'id_publons' => $this->input->post('inputPublonsID'),
            );
            $dataAkun = array(
                'username' => $this->input->post('inputNik'),
                'password' => md5('dosen'),
                'role' => 'dosen',
                'id_pegawai' => $this->input->post('inputNoPegawai')
            );
            $this->Model_pegawai->saveDosen($dataDosen);
            $this->Model_pegawai->saveAkun($dataAkun);
            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil menambahkan data');
            redirect('admin/dosen');
        }
    }

    public function edit($id)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['pegawai'] = $this->Model_pegawai->getPegawaiById($id);
        $data['title'] = 'dosen';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/dosen/edit', $data);
    }

    public function update($uid)
    {
        $nik = $uid;

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
            'inputNamaBelakang',
            'nama belakang',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputAlamat',
            'alamat',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTempatLahir',
            'tempat_lahir',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTanggalLahir',
            'tanggal_lahir',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputAgama',
            'agama',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputJenisKelamin',
            'jenis_kelamin',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputKontak',
            'kontak',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoSKPegawai',
            'nomor sk pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputTMTSKPegawai',
            'tmt',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNPWP',
            'npwp',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNamaWajibPajak',
            'nama wajib pajak',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputStatusPernikahan',
            'status_pernikahan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputKewarganegaraan',
            'status_kewarganegaraan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'id_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputProgramStudi',
            'id_prodi',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputJabatan',
            'id_jabatan',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );
        
        $this->form_validation->set_rules(
            'inputStatusKerja',
            'status_kerja',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
            $data['dosen'] = $this->Model_pegawai->getProfilDosen($uid);
            $data['keluarga'] = $this->Model_pegawai->getKeluargaPegawai($uid);
            $data['jabdos'] = $this->Model_pegawai->getJabatanDosen();
            $data['prodi'] = $this->Model_admin->getProdi();
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/dosen/edit', $data);
        } else {
            $nik = $uid;
            $dataPegawai = array(
                'nik' => $this->input->POST('inputNik'),
                'nama_depan' => $this->input->POST('inputNamaDepan'),
                'nama_tengah' => $this->input->POST('inputNamaTengah'),
                'nama_belakang' => $this->input->POST('inputNamaBelakang'),
                'alamat' => $this->input->POST('inputAlamat'),
                'tempat_lahir' => $this->input->POST('inputTempatLahir'),
                'tanggal_lahir' => $this->input->POST('inputTanggalLahir'),
                'agama' => $this->input->POST('inputAgama'),
                'jenis_kelamin' => $this->input->POST('inputJenisKelamin'),
                'email_pribadi' => $this->input->POST('inputEmail'),
                'kontak' => $this->input->POST('inputKontak'),
                'pendidikan' => $this->input->POST('inputpendidikan'),
                'no_sk_pegawai' => $this->input->POST('inputNoSKPegawai'),
                'tmt_pegawai' => $this->input->POST('inputTMTSKPegawai'),
                'npwp' => $this->input->POST('inputNPWP'),
                'nama_wajib_pajak' => $this->input->POST('inputNamaWajibPajak'),
                'status_pernikahan' => $this->input->POST('inputStatusPernikahan'),
                'nama_pasangan' => $this->input->POST('inputNamaPasangan'),
                'pekerjaan_pasangan' => $this->input->POST('inputPekerjaanPasangan'),
                'jumlah_tanggungan' => $this->input->POST('inputJumlahTanggungan'),
                'golongan_dan_pangkat' => $this->input->POST('inputGolongan'),
                'golongan_dan_panggkat_inpassing' => '-',
                'status_kewarganegaraan' => $this->input->POST('inputKewarganegaraan'),
            );
            $dataDosen = array(
                'nik' => $this->input->POST('inputNik'),
                'id_pegawai' => $this->input->post('inputNoPegawai'),
                'id_prodi' => $this->input->post('inputProgramStudi'),
                'id_jabatan' => $this->input->post('inputJabatan'),
                'status' => $this->input->post('inputStatus'),
                'status_kerja' => $this->input->post('inputStatusKerja'),
                'id_scopus' => $this->input->post('inputScopusID'),
                'id_sinta' => $this->input->post('inputSINTAID'),
                'id_publons' => $this->input->post('inputPublonsID'),
            );
            $this->Model_pegawai->editPegawai($nik, $dataPegawai);
            $this->Model_pegawai->editDosen($nik, $dataDosen);
            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil edit data');
            redirect('admin/dosen/');
        }
    }

    public function delete($id)
    {
        $this->Model_pegawai->deleteDosen($id);
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
