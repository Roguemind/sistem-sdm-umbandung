<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tendik extends CI_Controller
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

        $data['listTendik'] = $this->Model_pegawai->getPegawaiTendik();

        $data['title'] = 'tendik';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/tendik/index', $data);
    }

    public function profileTendik($uid)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['tendik'] = $this->Model_pegawai->getProfilTendik($uid);
        $data['units'] = $this->Model_admin->getUnit();
        $data['rekpens'] = $this->Model_pegawai->getRekamPendidikan($uid);
        $data['title'] = 'tendik';
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
        $data['units'] = $this->Model_pegawai->getUnit();
        $data['title'] = 'pegawai';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/tendik/tambah', $data);
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
            $data['tendik'] = $this->Model_pegawai->getProfilTendik($uid);
            $data['keluarga'] = $this->Model_pegawai->getKeluargaPegawai($uid);
            $data['jabten'] = $this->Model_pegawai->getJabatanTendik();
            $data['units'] = $this->Model_admin->getUnit();
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/tendik/edit', $data);
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
            $dataTendik = array(
                'nik' => $this->input->POST('inputNik'),
                'id_pegawai' => $this->input->post('inputNoPegawai'),
                'id_unit' => $this->input->post('inputUnitKerja'),
                'id_jabatan' => $this->input->post('inputJabatan'),
                'jabfung' => $this->input->post('inputJabatanFungsional'),
                'status_kerja' => $this->input->post('inputStatusKerja'),
            );
            $this->Model_pegawai->editPegawai($nik, $dataPegawai);
            $this->Model_pegawai->editTendik($nik, $dataTendik);
            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil edit data');
            redirect('admin/tendik/');
        }
    }

    public function edit($id)
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['pegawai'] = $this->Model_pegawai->getPegawaiById($id);
        $data['title'] = 'tendik';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/tendik/edit', $data);
    }

    public function delete($id)
    {
        $this->Model_pegawai->deleteTendik($id);
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
