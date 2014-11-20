<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // libraries
        $this->load->library('form_validation');
        $this->load->library('session');

        // helpers
        $this->load->helper('form');
        $this->load->helper('url');

        // models
        $this->load->model('users_model');
        //$this->load->model('checkemail_model');
    }

	public function index() 
        {
        // form validation library
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_login', 'Username', 'required|valid_email');
        $this->form_validation->set_rules('user_pwd', 'Password', 'required');
        
        // session library
        $this->load->library('session');

        // models
        $this->load->model('users_model');

	if ($this->form_validation->run() !== FALSE) {
            // verify login
            $user_login = $this->input->post('user_login');
            $user_pwd = $this->input->post('user_pwd');

            //Original line
            $user = $this->users_model->login_user($user_login, $user_pwd);
            $user_id = $user['user_id'];
            //rem below out if change does not work
            $userid = $user_id;
            $user_comp_id = $user['comp_id'];
            $creds = array('user_id' => $userid, 'company_id' => $user_comp_id, 'user_t' => $user['usertype']);
            //End of Original Code

            //if($user_id) <-- the original
            if ($creds['user_id']) 
                {
                // valid login, set session with user ID
                
                //$this->session->set_userdata('user_id', $user_id);
             $this->session->set_userdata($creds);
        
                // redirect to user page
                redirect('/itdata/user');
            }
          else {
                // invalid login
              
              $data['usr'] = $user;
              $data['invalid'] = 'The username or password is wrong';
                
            }
	  }
        $this->load->view('header/header');
        $this->load->view('login/home', $data);
        $this->load->view('footer/footer');
	}

    public function err() {

        $this->load->view('err');
    }

}