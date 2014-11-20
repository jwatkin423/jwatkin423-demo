<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpwd extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        
        // libraries
        
        // helpers
        $this->load->helper('url');
        $this->load->library('session');
        }
        
        public function index()
        {
            $this->load->view('header/header');
            $this->load->view('fpwd/home');
            $this->load->view('footer/footer');
         }
         public function cfpwd()
        {
            $em = $this->input->post('userlogin');
            $this->load->model('fpwd_model');
            $np = $this->fpwd_model->check_email($em, $uid);
            redirect('/itdata/login');
         }
        
        
}
?>