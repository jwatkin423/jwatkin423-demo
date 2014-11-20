<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newuser extends CI_Controller {
        public function __construct() {
        parent::__construct();

        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');

        // models
        $this->load->model('users_model');
        $this->load->model('clients_model');
    }

	public function index()
	{
            $this->load->view('header/header');
            $this->load->view('newuser/home');
            $this->load->view('footer/footer');
	}
        public function signup()
        {
           //$this->load->view('newuser/login');
         
           $email = $this->input->post('email');
           $this->load->model('checkemail_model');
           $emailcheck =  $this->checkemail_model->checkemail($email);
           $fname = $this->input->post('fname');
           $lname = $this->input->post('lname');
           $pwd1 = $this->input->post('pswd1');
           $name = $this->input->post('company_name');
           $address1 = $this->input->post('address1');
           $address2 = $this->input->post('address2');
           $city = $this->input->post('city');
           $state = $this->input->post('state');
           $zip = $this->input->post('zip');
           $wrknum = $this->input->post('wrknum');
           $cellnum = $this->input->post('cellnum');
           $altnum = $this->input->post('altnum');
           if($emailcheck == "Good!")
           {
               $this->users_model->create_user($fname, $lname, $email, $pwd1, $name, $address1, $address2, $city, $state, $zip, $wrknum, $cellnum, $altnum);
                redirect('/itdata/login');
           }
           else
           {
               redirect('/itdata/newuser/eae');
           }
            
        }
        public function eae()
        {
            $this->load->view('header/header');
            $this->load->view('newuser/eae');
            $this->load->view('footer/footer');
        }

}
