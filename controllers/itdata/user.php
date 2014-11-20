<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index() {

        // get user ID from session
        $user_id = $this->session->userdata('user_id');

        // kick them out if they aren't logged in
        if (!$user_id) {
            // redirect to user page
            redirect('/itdata/login/err');
        }

        // get user info and get clients
        $accnttype =  $this->session->userdata('user_t');
        if($accnttype == "A")
        {
            $user = $this->users_model->get_user($user_id);
            $clients = $this->clients_model->get_user_clients($user_id);
            $data['users'] = $user;
            $data['clients'] = $clients;
            $this->load->view('header/header');
            $this->load->view('clientdata/home', $data);
            $this->load->view('footer/footer');
	}
        else 
        {
            $this->load->model('adminpanel/adminpanel_model');
            $usernum = $this->session->userdata('user_id');
            $upmset = $this->adminpanel_model->get_permset($usernum);
            $data['userpermset'] = $upmset;
            $uipmset = $this->adminpanel_model->get_ipermset($usernum);
            $data['useripermset'] = $uipmset;
            $cid = $this->session->userdata('company_id');
            $clients = $this->clients_model->get_clients_cid($cid);
            $data['clients'] = $clients;
            $this->load->view('header/header');
            $this->load->view('clientdata/home', $data);
            $this->load->view('footer/footer');
            
        }
        }
    
}

