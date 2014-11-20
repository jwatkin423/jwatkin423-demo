<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        
        // libraries
        
        // helpers
        $this->load->helper('url');
        }
        
        public function index()
        {
            $this->load->view('header/header');
            $this->load->view('contact/home');
            $this->load->view('footer/footer');
            
        }
        public function cnt()
        {
            $email = $this->input->post('emai');
            $subject = $this->input->post('subject');
            $msg = $this->input->post('msg');
            $this->load->model('contact_model');
            $this->contact_model->contact($email, $subject, $msg);
            $this->load->view('header/header');
            $this->load->view('contact/submitted');
            $this->load->view('footer/footer');
        }
}