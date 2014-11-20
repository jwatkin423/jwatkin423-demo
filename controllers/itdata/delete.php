<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        
        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');
        }
        public function domain($domainid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_domain($domainid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function server($serverid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_servers($serverid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function printer($printerid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_printer($printerid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function apps($appsid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_apps($appsid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function webmail($webmailid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_webmail($webmailid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function wifi($wifiid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_wifi($wifiid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function sslvpn($sslvpnid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_sslvpn($sslvpnid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function mlocs($mlocsid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_mlocs($mlocsid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function pisp($pispid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_pisp($pispid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);            
        }
        public function bisp($bispid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_bisp($bispid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);            
        }
        public function router($rid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_router($rid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function firewall($fwid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_fw($fwid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function switches($swid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_sw($swid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function sa($said, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_sa($said);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function av($avid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_av($avid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function asp($aspid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_asp($aspid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function ups($upsid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_ups($upsid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function drac($dracid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_drac($dracid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
        public function docs($docsid, $clnum)
        {
            $this->load->model('del_model');
            $this->del_model->del_docs($docsid);
            $clnum = $clnum * 6111988;
            redirect('/itdata/admin/dc/'.$clnum);
        }
       
}       

?>