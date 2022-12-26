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
                    'session_id' => $temp['id_pegawai'],
                    'logged_in' => TRUE,
                    'role' => $temp['role'],
                );
                $this->session->set_userdata($sesi);
                redirect($sesi['role'].'/dashboard');
            }
            
            else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert"> Username/Password Salah !! </div>');
                redirect('login');
            }
        }
    }

    public function auth_user2(){
        if($this->input->post('username') == NULL){
            if($this->model_login->cekUsername($this->input->post('username'))->num_rows() > 0 && $this->model_login->cekPassword(
                $this->input->post('username'),
                $this->input->post('password')
            )->num_rows() > 0){
                $temp = $this->model_login->cekPassword($this->input->post('username'), $this->input->post('password'))->row_array();
                switch($temp['role']){
                    case 'dosen':
                        $sesi = array(
                            'session_id' => $temp['id_pegawai'],
                            'logged_in' => TRUE,
                            'role' => $temp['role'],
                        );
                        $this->session->set_userdata($sesi);
                        redirect('dosen/dashboard');

                    case 'tendik':
                        $sesi = array(
                            'session_id' => $temp['id_pegawai'],
                            'logged_in' => TRUE,
                            'role' => $temp['role'],
                        );
                        $this->session->set_userdata($sesi);
                        redirect('tendik/dashboard');
                            
                    case 'admin':
                        $sesi = array(
                            'session_id' => $temp['id_pegawai'],
                            'logged_in' => TRUE,
                            'role' => $temp['role'],
                        );
                        $this->session->set_userdata($sesi);
                        redirect('admin/dashboard');

                    case 'pimpinan':
                        $sesi = array(
                            'session_id' => $temp['id_pegawai'],
                            'logged_in' => TRUE,
                            'role' => $temp['role'],
                        );
                            $this->session->set_userdata($sesi);
                            redirect('pimpinan/dashboard');

                    case 'dosten':
                        redirect('login/landingpage');
                }
            }
        }
        else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert"> Username/Password Salah !! </div>');
            redirect('login');
        }
    }

    public function landingpage(){
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
