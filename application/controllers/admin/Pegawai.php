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
        $data['prodis'] = $this->Model_admin->getProdi();
        $data['jabatans'] = $this->Model_admin->getJabatan();

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

    public function create()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['fakultas'] = $this->Model_pegawai->getFakultas();
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
            'Nik',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
            $data['fakultas'] = $this->Model_pegawai->getFakultas();
            $data['prodi'] = $this->Model_admin->getProdi();
            $data['unit'] = $this->Model_admin->getUnit();
            $data['title'] = 'pegawai';

            $this->load->view('_partials/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('_partials/footer');
            $this->load->view('_partials/script');
            $this->load->view('admin/pegawai/tambah', $data);
        } else {
            $dataPegawai = array(
                // 'id_pegawai' => rand(10,1000),
                'nik' => $this->input->POST('inputNik'),
                'id_pegawai' => $this->input->POST('inputNoPegawai'),
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
                'sk_pegawai' => $this->input->POST('inputNoSkPegawai'),
                'tmt_pegawai' => $this->input->POST('inputTmtPegawai'),
            );
            $this->Model_pegawai->savePegawai($dataPegawai);

            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil menambahkan data');
            redirect('admin/pegawai');
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
        $nik = $this->input->POST('inputnik');

        // Rules validasi
        $this->form_validation->set_rules(
            'inputNik',
            'Nik',
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
            $this->load->view('admin/pegawai/edit', $data);
        } else {
            $dataPegawai = array(
                'nik' => $this->input->POST('inputNik'),
                'id_pegawai' => $this->input->POST('inputNoPegawai'),
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
                'sk_pegawai' => $this->input->POST('inputNoSkPegawai'),
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
        $hapusPegawai = $this->Model_pegawai->deletePegawai($id);

        if ($hapusPegawai) {
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
