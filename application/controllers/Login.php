<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    { parent::__construct();
        $this->load->model('model_login');         		
    }

	public function index()
	{
		$this->load->view('login');
	}
    
    public function auth_user(){
        if($this->model_login->cekUsername($this->input->post('username')) -> num_rows() > 0 && $this->model_login->cekPassword($this->input->post('username'),
        $this->input->post('password'))->num_rows() > 0){
            $sesi = $this->model_login->cekPassword($this->input->post('username'),$this->input->post('password'))->row_array();
            $this->session->set_userdata($sesi);
            redirect($sesi['role']);
        }
    }
}
