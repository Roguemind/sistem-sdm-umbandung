
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        
    }
    
    public function index() {
        $this->load->view('admin/dashboard_admin');
    }
}