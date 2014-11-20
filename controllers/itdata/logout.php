<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

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
        if ($this->session->userdata('user_id'))
        {
            $this->session->unset_userdata('user_t');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('company_id');
            $this->session->sess_destroy();
            redirect('/itdata/','refresh');
        }
        else
        {
            redirect('/itdata/','refresh');
        }
    }
    
}
?>