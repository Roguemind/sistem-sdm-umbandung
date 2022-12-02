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
        if(!$this->session->userdata('logged_in')){
            $this->load->view('login');
        }else{
            redirect($this->session->userdata('role'));
        }
    }

    public function auth_user()
    {
        if($this->input->post('username') == NULL){

        } else{
            if ($this->model_login->cekUsername($this->input->post('username'))->num_rows() > 0 && $this->model_login->cekPassword(
                $this->input->post('username'),
                $this->input->post('password')
            )->num_rows() > 0) {
                $temp = $this->model_login->cekPassword($this->input->post('username'), $this->input->post('password'))->row_array();
                $sesi = array(
                    'session_id' => $temp['no_pegawai'],
                    'logged_in' => TRUE,
                    'role' => $temp['role'],
                );
                $this->session->set_userdata($sesi);
                redirect($sesi['role'].'/dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert"> Username/Password Salah !! </div>');
                redirect('login');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
