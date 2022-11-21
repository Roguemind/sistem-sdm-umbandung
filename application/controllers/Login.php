<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }

    public function index()
    {
        $this->load->view('login2');
    }

    public function auth_user()
    {
        if ($this->model_login->cekUsername($this->input->post('username'))->num_rows() > 0 && $this->model_login->cekPassword(
            $this->input->post('username'),
            $this->input->post('password')
        )->num_rows() > 0) {
            $sesi = $this->model_login->cekPassword($this->input->post('username'), $this->input->post('password'))->row_array();
            $this->session->set_userdata($sesi);
            redirect($sesi['role']);
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert"> Password Salah !! </div>');
            redirect('login');
        }
    }
}
