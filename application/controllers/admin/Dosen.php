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

    public function create()
    {
        $data['akun'] = $this->Model_admin->aksesDB($this->session->userdata('session_id'));
        $data['jabdos'] = $this->Model_pegawai->getJabatanDosen();
        $data['jabten'] = $this->Model_pegawai->getJabatanTendik();
        $data['prodi'] = $this->Model_admin->getProdi();
        $data['unit'] = $this->Model_admin->getUnit();
        $data['title'] = 'dosen';

        $this->load->view('_partials/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
        $this->load->view('admin/pegawai/dosen/tambah', $data);
    }

    public function store()
    {
        // Rules validasi
        $this->form_validation->set_rules(
            'inputNoPegawai',
            'no_pegawai',
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
            $dataPegawai = array(
                // 'id_pegawai' => rand(10,1000),
                'no_pegawai' => $this->input->POST('inputNoPegawai'),
                'nik' => $this->input->POST('inputNik'),
                'gelar_depan' => 'Prof.',
                'nama_tengah' => $this->input->POST('inputNamaLengkap'),
                'gelar_belakang' => 'M.Sc',
                'alamat' => $this->input->POST('inputAlamat'),
                'tempat_lahir' => $this->input->POST('inputTempatLahir'),
                'tanggal_lahir' => $this->input->POST('inputTanggalLahir'),
                'agama' => $this->input->POST('inputAgama'),
                'jenis_kelamin' => $this->input->POST('inputJenisKelamin'),
                'status_pernikahan' => $this->input->POST('inputSetatusPernikahan'),
                'email_pribadi' => $this->input->POST('inputEmail'),
                'kontak' => $this->input->POST('inputKontak'),
                'pendidikan' => $this->input->POST('inputpendidikan'),
                'no_sk_pegawai' => $this->input->POST('inputNoSkPegawai'),
                'tmt_pegawai' => $this->input->POST('inputTmtPegawai'),

            );
            $this->Model_pegawai->savePegawai($dataPegawai);
            if ($this->input->post('inputJabatanPegawai') == 'Dosen') {
                $dataDosen = array(
                    'no_pegawai' => $this->input->post('inputNoPegawai'),
                    'id_prodi' => $this->input->post('inputProgramStudi'),
                    'id_jabatan' => $this->input->post('inputJabatan'),
                    'status_kerja' => $this->input->post('inputStatusKerja')
                );
                $this->Model_pegawai->saveDosen($dataDosen);
            } else if ($this->input->post('inputJabatanPegawai') == 'Tendik') {
                if ($this->input->post('inputUnitKerja') == 'Fakultas') {
                    $dataTendik = array(
                        'no_pegawai' => $this->input->post('inputNoPegawai'),
                        'id_unit' => $this->input->post('inputProgramStudi'),
                        'id_jabatan' => $this->input->post('inputJabatan'),
                        'status_kerja' => $this->input->post('inputStatusKerja')
                    );
                    $this->Model_pegawai->saveTendik($dataTendik);
                } else if ($this->input->post('inputJabatanPegawai') == 'Unit') {
                    $dataTendik = array(
                        'no_pegawai' => $this->input->post('inputNoPegawai'),
                        'id_fakultas' => $this->input->post('inputProgramStudi'),
                        'id_jabatan' => $this->input->post('inputJabatan'),
                        'status_kerja' => $this->input->post('inputStatusKerja')
                    );
                    $this->Model_pegawai->saveTendik($dataTendik);
                }
            }
            // set flash data
            $this->session->set_flashdata('msg', 'Berhasil menambahkan data');
            redirect('admin/pegawai');
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

    public function update()
    {
        $nik = $this->input->POST('inputNoPegawai');

        // Rules validasi
        $this->form_validation->set_rules(
            'inputNoPegawai',
            'no_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'no_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'no_pegawai',
            'required',
            array(
                'required' => 'Wajib mengisi %s.',
            )
        );

        $this->form_validation->set_rules(
            'inputNoPegawai',
            'no_pegawai',
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
