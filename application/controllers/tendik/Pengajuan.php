<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tendik');
        $this->load->model('Model_master');
    }

    public function pengajuanCuti()
    {
        $data['akun'] = $this->Model_master->aksesDB($this->session->userdata('role'), $this->session->userdata('session_id'));
        $data['jangka_waktu'] = $this->Model_tendik->getPengajuan();
        $this->load->view('_partials/head', $data);
        $this->load->view('tendik/header', $data);
        $this->load->view('tendik/sidebar', $data);
        $this->load->view('tendik/pengajuan_cuti', $data);
        $this->load->view('_partials/footer');
        $this->load->view('_partials/script');
    }

    public function aksicuti()
    {
        $no_pegawai = $this->input->POST('no_pegawai');
        $nama = $this->input->POST('jenis_cuti');
        $tanggal_awal = $this->input->POST('tanggal_awal');
        $tanggal_masuk = $this->input->POST('tanggal_masuk');
        $tgl1 = new DateTime($tanggal_awal);
        $tgl2 = new DateTime($tanggal_masuk);
        $jangka_waktu = $tgl2->diff($tgl1);
        $file =$_FILES['file'];
            if($file=''){}else{
                $config['upload_path']     ='./surat';
                $config['allowed_types']   ='pdf';
                $config['max_size']         = 100000;
                $config['file_name']        = $no_pegawai . "_" . $nama . "_" . ".pdf";
                $this->load->library('upload',$config); 
                if(!$this->upload->do_upload('file')){
                    echo "Upload gagal";die();
                }else{
                    $file=$this->upload->data('file_name');
                }
            }
        
        
        

        $datacuti = array(
            'no_pegawai' => $no_pegawai,
            'jensi_cuti' => $nama,
            'tgl_pengajuan' => $tanggal_awal,
            'tgl_masuk' => $tanggal_masuk,
            'jangka_waktu' => $jangka_waktu->d,
            'file'     =>$file

        );
        //var_dump($jangka_waktu);
        //exit();
        $this->Model_tendik->simpancuti($datacuti);
        redirect('tendik/dashboard');
    }
}
