<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $this->load->view('header/header');
            $this->load->view('home');
            $this->load->view('footer/footer');
	}
        
        public function about()
        {
            $this->load->view('header/header');
            $this->load->view('about');
            $this->load->view('footer/footer');
        }       
              
}

