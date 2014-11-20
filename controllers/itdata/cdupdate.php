<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cdupdate extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        
        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');
        }

	public function index()
	{
            $user_id = $this->session->userdata('user_id');
            $data['users'] = $user_id; 
            $this->load->view('header/header');
            $this->load->view('admin/home', $data);
            $this->load->view('footer/footer');
	}


        public function adddomain($clientid)
        {
            $clientid = $clientid/6111988;
            $this->load->model('clients_model');
            $clientdata = $this->clients_model->get_client_data($clientid);
            $data['clientd'] = $clientdata;
            $this->load->view('header/header');
            $this->load->view('admin/clientlocation', $data);
            $this->load->view('footer/footer');
            $clientid=$clientid*61119888;
            redirect('/itdata/admin/data_client/'.$clientid);
        }
        public function add_location()
        {
          $comp_address = $this->input->post('mloc_address');
          $comp_address2 = $this->input->post('mloc_address2');
          $comp_city = $this->input->post('mloc_city');
          $comp_state = $this->input->post('mloc_state');
          $comp_zip = $this->input->post('mloc_zip');
          $comp_tel = $this->input->post('mloc_tel');
          $comp_cfname = $this->input->post('mloc_cfname');
          $comp_clname = $this->input->post('mloc_clname');
          echo "Client Number: ".$comp_num = $this->input->post('mloc_num');
          $this->load->model('addclient_model');
          $this->addclient_model->create_location($comp_num, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname);
          $comp_num = $comp_num * 6111988;
          echo "client Number: ".$comp_num;
          redirect('/itdata/admin/data_client/'.$comp_num);
        }
}
