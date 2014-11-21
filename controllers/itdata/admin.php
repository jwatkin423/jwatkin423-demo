<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct(){
		parent::__construct();
		
		// libraries
		$this->load->library('session');

		// helpers
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		}

		public function index() {
			$user_id = $this->session->userdata('user_id');
			$compid = $this->session->userdata('company_id');
				
			$data['users'] = $user_id;
			$data['cid'] = $compid;
				
			$this->load->view('header/header');
			$this->load->view('admin/home', $data);
			$this->load->view('footer/footer');
		}
		public function addclient() {
			$user_id = $this->session->userdata('user_id');
			$comp_id = $this->session->userdata('comp_id');
			$data['users'] = $user_id;
			$data['cid'] = $comp_id;
			$this->load->view('header/header');
			$this->load->view('admin/newclient', $data);
			$this->load->view('footer/footer');
		}
		public function add_client() {
			$user_id = $this->session->userdata('user_id');
			$comp_id = $this->session->userdata('comp_id');
			$comp_name = $this->input->post('comp_name');
			$comp_address = $this->input->post('comp_address');
			$comp_address2 = $this->input->post('comp_address2');
			$comp_city = $this->input->post('comp_city');
			$comp_state = $this->input->post('comp_state');
			$comp_zip = $this->input->post('comp_zip'); 
			$comp_tel = $this->input->post('comp_tel');
			$comp_cfname = $this->input->post('comp_cfname');
			$comp_clname = $this->input->post('comp_clname');
			$comp_mlocs = $this->input->post('comp_mlocs');

			$this->load->model('addclient_model');
			$this->addclient_model->create_client($comp_name, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname, $comp_mlocs, $user_id, $compid);
			redirect('/itdata/user');
		}
		
		public function delete_client($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('addclient_model');
			$this->addclient_model->delete_client($clientid);
		}
				  
		public function update($clientid) {
			$this->load->model('addclient_model');
			$client = $this->addclient_model->update_client($clientid);
			$data['clients'] = $client;
			$this->load->view('header/header');
			$this->load->view('admin/updateclient', $data);
			$this->load->view('footer/footer');
  
		}
		public function update_client_data() {
			$comp_num = $this->input->post('comp_num');
			$comp_name = $this->input->post('comp_name');
			$comp_address = $this->input->post('comp_address');
			$comp_address2 = $this->input->post('comp_address2');
			$comp_city = $this->input->post('comp_city');
			$comp_state = $this->input->post('comp_state');
			$comp_zip = $this->input->post('comp_zip');
			$comp_tel = $this->input->post('comp_tel');
			$comp_cfname = $this->input->post('comp_cfname');
			$comp_clname = $this->input->post('comp_clname');
			$comp_mlocs = $this->input->post('comp_mlocs');
			$this->load->model('addclient_model');
			$this->addclient_model->update_client_data($comp_num, $comp_name, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname, $comp_mlocs);
			redirect('/itdata/user/');
		}
		public function dc($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('adminpanel/adminpanel_model');
			if($this->session->userdata('user_t' !="A"))
			{
				$this->session->userdata('user_id');
				$ps = $this->adminpanel_model->get_permset($clientid);
				$data['permset'] = $ps;
			}
			$this->load->model('dispdat_model');
			$ci = $this->dispdat_model->client_info($clientid);
			$data['clinfo'] = $ci;
			$data['clientnum'] = $clientid;
			$this->load->model('dispdat_model');
			$server = $this->dispdat_model->servers($clientid);
			$data['servers'] = $server;
			$this->load->model('dispdat_model');
			$domain = $this->dispdat_model->domains($clientid);
			$data['domains'] = $domain;
			$this->load->model('dispdat_model');
			$printer = $this->dispdat_model->printers($clientid);
			$data['printers'] = $printer;
			$this->load->model('dispdat_model');
			$app = $this->dispdat_model->apps($clientid);
			$data['apps'] = $app;
			$this->load->model('dispdat_model');
			$wm = $this->dispdat_model->webmail($clientid);
			$data['webmail'] = $wm;
			$this->load->model('dispdat_model');
			$wf = $this->dispdat_model->wifi($clientid);
			$data['wifi'] = $wf;
			$this->load->model('dispdat_model');
			$vpn = $this->dispdat_model->sslvpn($clientid);
			$data['sslvpn'] = $vpn;
			$ml = $this->dispdat_model->mlocs($clientid);
			$data['mlcs'] = $ml;
			$ip = $this->dispdat_model->isp($clientid);
			$data['isps'] = $ip;
			$bps = $this->dispdat_model->bisp($clientid);
			$data['bisps'] = $bps;
			$rtr = $this->dispdat_model->routers($clientid);
			$data['rtrs'] = $rtr;
			$fwll = $this->dispdat_model->firewalls($clientid);
			$data['fwlls'] = $fwll;
			$swth = $this->dispdat_model->switches($clientid);
			$data['swths'] = $swth;
			$svaccnt = $this->dispdat_model->serveraccounts($clientid);
			$data['svaccnts'] = $svaccnt;
			$avspm = $this->dispdat_model->avspam($clientid);
			$data['avspms'] = $avspm;
			$unintsupp = $this->dispdat_model->ups($clientid);
			$data['upsp'] = $unintsupp;
			$appservprov = $this->dispdat_model->asps($clientid);
			$data['appservprovs'] = $appservprov;
			$dracsinfo = $this->dispdat_model->drac($clientid);
			$data['dinfo'] = $dracsinfo;
			$dmnts = $this->dispdat_model->docs($clientid);
			$data['documents'] = $dmnts;
			$this->load->view('header/header');
			$this->load->view('admin/showdata', $data);
			$this->load->view('footer/footer');
		}
		public function addmlocation($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('admin/clientlocation', $data);
			$this->load->view('footer/footer');
		}
		public function add_location() {
			$comp_address = $this->input->post('mloc_address');
			$comp_address2 = $this->input->post('mloc_address2');
			$comp_city = $this->input->post('mloc_city');
			$comp_state = $this->input->post('mloc_state');
			$comp_zip = $this->input->post('mloc_zip');
			$comp_tel = $this->input->post('mloc_tel');
			$comp_cfname = $this->input->post('mloc_cfname');
			$comp_clname = $this->input->post('mloc_clname');
			$comp_num = $this->input->post('mloc_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_location($comp_num, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname);
			$comp_num = $comp_num * 6111988;
			echo "client Number: ".$comp_num;
			redirect('/itdata/admin/dc/'.$comp_num);
		}
		public function add_domain($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/domain', $data);
			$this->load->view('footer/footer');
		}
		public function cl_domain() {
			$comp_domain = $this->input->post('domain');
			$comp_num = $this->input->post('domain_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_domain($comp_num, $comp_domain);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#domains');
		}
		public function add_server($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/servers', $data);
			$this->load->view('footer/footer');
		}
		public function cl_servers() {
			$comp_ipaddress = $this->input->post('ipaddress');
			$comp_servername = $this->input->post('servername');
			$comp_stype = $this->input->post('stype');
			$comp_num = $this->input->post('server_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_server($comp_num, $comp_ipaddress, $comp_servername, $comp_stype);
			$comp_num = $comp_num * 6111988;
			edirect('/itdata/admin/dc/'.$comp_num.'#servers');
		}
		public function add_printer($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/printers', $data);
			$this->load->view('footer/footer');
		}
		public function cl_printers() {
			$comp_ipaddress = $this->input->post('ipaddress');
			$comp_mm = $this->input->post('mm');
			$comp_pd = $this->input->post('pd');
			$comp_num = $this->input->post('printer_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_printer($comp_num, $comp_ipaddress, $comp_mm, $comp_pd);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#printers');
		}
		public function add_webmail($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/webmail', $data);
			$this->load->view('footer/footer');
		}
		public function cl_webmail() {
			$comp_web_address = $this->input->post('web_address');
			$comp_username = $this->input->post('username');
			$comp_pd = $this->input->post('pd');
			$comp_note = $this->input->post('wbnote');
			$comp_num = $this->input->post('webmail_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_webmail($comp_num, $comp_web_address, $comp_username, $comp_pd, $comp_note);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#webmail');
		}
		public function add_apps($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->model('dispdat_model');
			$server = $this->dispdat_model->servers($clientid);
			$data['servers'] = $server;
			$this->load->model('');
			$this->load->view('header/header');
			$this->load->view('atbs/apps', $data);
			$this->load->view('footer/footer');
		}
		public function cl_apps() {
			$comp_drive = $this->input->post('dletter');
			$comp_hshare = $this->input->post('hshare');
			$comp_path = $this->input->post('uncpath');
			$comp_server = $this->input->post('svname');
			$comp_note = $this->input->post('desc');
			$comp_num = $this->input->post('apps_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_apps($comp_num, $comp_hshare, $comp_drive, $comp_server, $comp_path, $comp_note);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#apps');
		}
		public function add_sslvpn($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/sslvpn', $data);
			$this->load->view('footer/footer');
		}
		public function cl_sslvpn() {
			$comp_vpnaddress = $this->input->post('vpnaddress');
			$comp_lanip = $this->input->post('lanip');
			$comp_eip = $this->input->post('ssl_eip');
			$comp_un = $this->input->post('ssl_username');
			$comp_pd = $this->input->post('ssl_password');
			$comp_num = $this->input->post('sslvpn_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_sslvpn($comp_num, $comp_vpnaddress, $comp_lanip, $comp_eip, $comp_un, $comp_pd);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#sslvpn');
		}
		public function add_wifi($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/wifi', $data);
			$this->load->view('footer/footer');
		}
		public function cl_wifi() {
			$comp_ssid = $this->input->post('ssid');
			$comp_wipa = $this->input->post('wipa');
			$comp_wun = $this->input->post('wun');
			$comp_pd = $this->input->post('pd');
			$comp_num = $this->input->post('wifi_num');
			$this->load->model('addclient_model');
			$this->addclient_model->create_wifi($comp_num, $comp_wipa, $comp_wun, $comp_ssid, $comp_pd);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#wifi');
		}
		public function add_pisp($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/pisp', $data);
			$this->load->view('footer/footer');
		}
		public function cl_pisp() {
			$comp_num = $this->input->post('pisp_num');
			$comp_ispname = $this->input->post('pispname');
			$comp_circ = $this->input->post('pispcirc');
			$comp_range = $this->input->post('pispaddrange');
			$comp_conf = $this->input->post('pispconf');
			$this->load->model('addclient_model');
			$this->addclient_model->create_pisp($comp_num, $comp_ispname, $comp_circ, $comp_range, $comp_conf);
			$comp_num = $comp_num *6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#pisp');
		}
		public function add_bisp($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/bisp', $data);
			$this->load->view('footer/footer');
		}
		public function cl_bisp() {
			$comp_num = $this->input->post('bisp_num');
			$comp_bispname = $this->input->post('bispname');
			$comp_bispcirc = $this->input->post('bispcirc');
			$comp_baddrange = $this->input->post('bispaddrange');
			$this->load->model('addclient_model');
			$this->addclient_model->create_bisp($comp_num, $comp_bispname, $comp_bispcirc, $comp_baddrange);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#bisp');
		}
		public function add_routers($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/routers', $data);
			$this->load->view('footer/footer');
		}
		public function cl_router() {
			$comp_num = $this->input->post('rtr_num');
			$comp_name = $this->input->post('rtrname');
			$comp_iipa = $this->input->post('rtriipa');
			$comp_eipa = $this->input->post('rtreipa');
			$comp_dfg = $this->input->post('rtrdfg');
			$comp_dns1 = $this->input->post('rtrdns1');
			$comp_dns2 = $this->input->post('rtrdns2');
			$this->load->model('addclient_model');
			$this->addclient_model->create_router($comp_num, $comp_name, $comp_iipa, $comp_eipa, $comp_dfg, $comp_dns1, $comp_dns2);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#rid');
		}
		public function add_firewall($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/firewall', $data);
			$this->load->view('footer/footer');
		}
		public function cl_firewall() {
			$comp_num = $this->input->post('fw_num');
			$comp_name = $this->input->post('fwname');
			$comp_iipa = $this->input->post('fwipa');
			$comp_eipa = $this->input->post('fwepa');
			$comp_dfg = $this->input->post('fwdfg');
			$comp_un = $this->input->post('fwusername');
			$comp_pd = $this->input->post('fwpassword');
			$this->load->model('addclient_model');
			$this->addclient_model->create_firewall($comp_num, $comp_name, $comp_iipa, $comp_eipa, $comp_dfg, $comp_un, $comp_pd);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#fid');
		}
		public function add_switch($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/switch', $data);
			$this->load->view('footer/footer');
		}
		public function cl_switch() {
			$comp_num = $this->input->post('sw_num');
			$comp_name = $this->input->post('swmngd');
			$comp_iipa = $this->input->post('swipa');
			$comp_un = $this->input->post('swusername');
			$comp_pd = $this->input->post('swpassword');
			$this->load->model('addclient_model');
			$this->addclient_model->create_switch($comp_num, $comp_name, $comp_iipa, $comp_un, $comp_pd);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#swid');
		}
		public function add_sa($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/svraccnt', $data);
			$this->load->view('footer/footer');
		}
		public function cl_sa() {
			$comp_num = $this->input->post('sa_num');
			$comp_sn = $this->input->post('sa_un');
			$comp_pd = $this->input->post('sa_pw');
			$this->load->model('addclient_model');
			$this->addclient_model->create_sa($comp_num, $comp_sn, $comp_pd);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#said');
		}
		public function add_av($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->model('dispdat_model');
			$anti_spam_apps = $this->dispdat_model->avspamapps();
			$data['avsps'] = $anti_spam_apps;
			$this->load->view('header/header');
			$this->load->view('atbs/antvspam', $data);
			$this->load->view('footer/footer');
		}
		public function cl_av() {
			$comp_num = $this->input->post('av_num');
			$comp_name = $this->input->post('avspamname');
			$comp_hst = $this->input->post('av_hosted');
			$comp_oth = $this->input->post('av_other');
			$comp_sn = $this->input->post('av_un');
			$comp_pd = $this->input->post('av_pw');
			$this->load->model('addclient_model');
			$this->addclient_model->create_av($comp_num, $comp_name, $comp_hst, $comp_oth, $comp_sn, $comp_pd);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#avid');
		}
		public function add_asp($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/appserviceprovider', $data);
			$this->load->view('footer/footer');
		}
		public function cl_asp() {
			$comp_num = $this->input->post('asp_num');
			$comp_name =  $this->input->post('asp_name');
			$comp_url = $this->input->post('asp_address');
			$comp_un = $this->input->post('asp_username');
			$comp_pw = $this->input->post('asp_pd');
			$comp_note = $this->input->post('asp_note');
			$this->load->model('addclient_model');
			$this->addclient_model->create_asp($comp_num, $comp_name, $comp_url, $comp_un, $comp_pw, $comp_note);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#aspid');
		}
		public function add_ups($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->view('header/header');
			$this->load->view('atbs/ups', $data);
			$this->load->view('footer/footer');
		}
		public function cl_ups() {
			$comp_num = $this->input->post('ups_num');
			$comp_name = $this->input->post('ups_name');
			$comp_url = $this->input->post('ups_address');
			$comp_un = $this->input->post('ups_username');
			$comp_pw = $this->input->post('ups_pd');
			$this->load->model('addclient_model');
			$this->addclient_model->create_ups($comp_num, $comp_name, $comp_url, $comp_un, $comp_pw);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#upsid');
		}
		public function add_drac($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->model('dispdat_model');
			$server = $this->dispdat_model->servers($clientid);
			$data['servers'] = $server;
			$this->load->view('header/header');
			$this->load->view('atbs/dracs', $data);
			$this->load->view('footer/footer');
		}
		public function cl_dracs() {
			$comp_num = $this->input->post('drac_num');
			$comp_ip = $this->input->post('drac_address');
			$comp_srvr = $this->input->post('svname');
			$comp_un = $this->input->post('drac_username');
			$comp_pw = $this->input->post('drac_password');
			$this->load->model('addclient_model');
			$this->addclient_model->create_drac($comp_num, $comp_ip, $comp_srvr, $comp_un, $comp_pw);
			$comp_num = $comp_num * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#drac');
		}
		public function add_docs($clientid) {
			$clientid = $clientid/6111988;
			$this->load->model('clients_model');
			$clientdata = $this->clients_model->get_client_data($clientid);
			$data['clientd'] = $clientdata;
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->view('header/header');
			$this->load->view('documents/home', $data);
			$this->load->view('header/header');
		}
		public function cl_docs() {

			$clntd = $this->input->post('doc_num');
			$clientid = $clntd*6111988;
			$clientpath = "c".$clientid;
			$path = './uploads/'.$clientpath;
			if(!file_exists($path))
			{
				mkdir($path, 0777);
			}
			$config['upload_path'] = $path;
			$config['allowed_types'] = '*';
			$config['max_size'] = '10000';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('dfile')) {
				$file_data = $this->upload->data('dfile');
				print_r($file_data);
				$fname = $file_data['file_name'];
				echo "<br />File ". $fname. " was uploaded successfully";
			} else {
				echo "Upload path ";
				print_r($config);
				echo "<br />";
				echo "Client ID ".$clientid."<br />";
				echo "Clientpath ".$clientpath."<br />";
				echo "Path ".$path."<br />";
				print_r($file_data);
				var_dump(base_url());
				var_dump(is_dir($path));
				var_dump($_SERVER['SCRIPT_FILENAME']); 
				$errorstring = $this->upload->display_errors();
				echo "Error uploading files.".$errorstring;
			}
			$descript = $this->input->post('fdescript');
			$newfile = array("clnum" => $clntd, "filepath"=>$path, "descript"=>$descript, "filename" =>$fname);
			$this->load->model('addclient_model');
			$this->addclient_model->add_document($newfile);
			$comp_num = $clntd * 6111988;
			redirect('/itdata/admin/dc/'.$comp_num.'#documents');
			
		}
}
?>