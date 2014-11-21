<?php
class Addclient_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('session');
		$accnttype = $this->session->userdata('user_t');
	}

	public function create_client($comp_name, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname, $comp_mlocs, $user_id)
	{
		$accnttype == $this->accnttype;
		if($accnttype == "A")
		{
			$user_id = $this->session->userdata('user_id');
			$comp_id = $this->session->userdata('company_id');
			$this->db->insert('clients', [
				'clientname' => $comp_name,
				'address1' => $comp_address,
				'address2' => $comp_address2,
				'city' => $comp_city,
				'state' => $comp_state,
				'zip' => $comp_zip,
				'num' => $comp_tel,
				'cfname' => $comp_cfname,
				'clname' => $comp_clname,
				'mlocs' => $comp_mlocs,
				'user_id' => $user_id,
				'comp_id' => $comp_id
			]);
		}
		else
		{
			redirect('/itdata/nopermissions');
		}
	}
	public function delete_client($clientid)
	{
		
		if($accnttype == "A")
		{
			$user_id = $this->session->userdata('user_id');
			$data['users'] = $user_id;
			$this->db->where('clnum', $clientid);
			$this->db->update('clients', array('client_deleted' => 'y'));
			//$this->db->delete('clients');
			redirect('/itdata/user/');
		}
		else
		{
			redirect('/itdata/nopermissions');
		}
	}
	public function update_client($clientid)
	{
		$clientid=$clientid/6111988;
		$query = $this->db->get_where('clients', array('clnum'=> $clientid));
		return $query->row_array();
		
	}
	public function update_client_data($comp_num, $comp_name, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname, $comp_mlocs)
	{
		
	 $query = $this->db->where('clnum', $comp_num);
	 $query = $this->db->update('clients', array(
			'clientname' => $comp_name,
			'address1' => $comp_address,
			'address2' => $comp_address2,
			'city' => $comp_city,
			'state' => $comp_state,
			'zip' => $comp_zip,
			'num' => $comp_tel,
			'cfname' => $comp_cfname,
			'clname' => $comp_clname,
			'mlocs' => $comp_mlocs));
	}
		public function create_location($comp_num, $comp_address, $comp_address2, $comp_city, $comp_state, $comp_zip, $comp_tel, $comp_cfname, $comp_clname)
	{
			$user_id = $this->session->userdata('user_id');
			$this->db->insert('mlocs', array(
			'clnum' => $comp_num,
			'address1' => $comp_address,
			'address2' => $comp_address2,
			'city' => $comp_city,
			'state' => $comp_state,
			'zip' => $comp_zip,
			'num' => $comp_tel,
			'mlfname' => $comp_cfname,
			'mllname' => $comp_clname));      
	}
	public function create_domain($comp_num, $comp_domain)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('clientdomain', array(
			'clnum' => $comp_num,
			'domain' => $comp_domain));
	}
	public function create_server($comp_num, $comp_ipaddress, $comp_servername, $comp_stype)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('servers', array(
			'clnum' => $comp_num,
			'ipaddress' => $comp_ipaddress,
			'servername' => $comp_servername,
			'servertype' => $comp_stype));
	}
	public function create_printer($comp_num, $comp_ipaddress, $comp_mm, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('printers', array(
			'clnum' => $comp_num,
			'ipaddress' => $comp_ipaddress,
			'make_model' => $comp_mm,
			'password' => $comp_pd));
	}
	public function create_webmail($comp_num, $comp_web_address, $comp_username, $comp_pd, $comp_note)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('webmail', array(
			'clnum' => $comp_num,
			'webmail' => $comp_web_address,
			'note' => $comp_note,
			'username' => $comp_username,
			'password' => $comp_pd)); 
		
	}
	public function create_apps($comp_num, $comp_hshare, $comp_drive, $comp_server, $comp_uncpath, $comp_desc)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('apps', array(
			'clnum' => $comp_num,
			'appsserver' => $comp_server,
			'unc' => $comp_uncpath,
			'drive' => $comp_drive,
			'hiddenshare' => $comp_hshare,
			'dscpt' => $comp_desc));
	}
	public function create_sslvpn($comp_num, $comp_vpnaddress, $comp_lanip, $comp_eip, $comp_un, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('sslvpn', array(
			'clnum' => $comp_num,
			'urladdress' => $comp_vpnaddress,
			'lanip' => $comp_lanip,
			'ssleipaddress' => $comp_eip,
			'ssliipaddress' => $comp_lanip,
			'sslusername' => $comp_un,
			'sslpassword' => $comp_pd));
	}
	public function create_wifi($comp_num, $comp_wipa, $comp_wun, $comp_ssid, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('wifi', array(
			'clnum' => $comp_num,
			'ssid' => $comp_ssid,
			'wifiipaddress' => $comp_wipa,
			'wifiusername' => $comp_wun,
			'wifipassword' => $comp_pd));
	}
	public function create_pisp($comp_num, $comp_ispname, $comp_circ, $comp_range, $comp_conf) 
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('pisp', array(
		   'clnum' => $comp_num,
		   'ispname' => $comp_ispname,
		   'circid' => $comp_circ,
		   'addrange' => $comp_range,
		   'conf' => $comp_conf));
	}
	public function create_bisp($comp_num, $comp_bispname, $comp_bispcirc, $comp_baddrange)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('bisp', array(
			'clnum' => $comp_num,
			'bispname' => $comp_bispname,
			'bcircid' => $comp_bispcirc,
			'baddrange' => $comp_baddrange));
	}
	public function create_router($comp_num, $comp_name, $comp_iipa, $comp_eipa, $comp_dfg, $comp_dns1, $comp_dns2)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('routers', array(
		   'clnum' => $comp_num,
		   'routername' => $comp_name,
		   'rexntipaddress' => $comp_eipa,
		   'rintipaddress' => $comp_iipa,
		   'defgateway' => $comp_dfg,
		   'dns1' => $comp_dns1,
		   'dns2' => $comp_dns2));
	}
		public function create_firewall($comp_num, $comp_name, $comp_iipa, $comp_eipa, $comp_dfg, $comp_un, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('firewalls', array(
		   'clnum' => $comp_num,
		   'firewall' => $comp_name,
		   'fwexntipaddress' => $comp_eipa,
		   'fwintipaddress' => $comp_iipa,
		   'fwdefgateway' => $comp_dfg,
		   'fwusername' => $comp_un,
		   'fwpassword' => $comp_pd));
	}
	public function create_switch($comp_num, $comp_name, $comp_iipa, $comp_un, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('switches', array(
		   'clnum' => $comp_num,
		   'switchmanaged' => $comp_name,
		   'swipaddress' => $comp_iipa,
		   'swusername' => $comp_un,
		   'switchpassword' => $comp_pd));
	}    
	public function create_sa($comp_num, $comp_sa, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('serveraccounts', array(
			'clnum' => $comp_num,
			'dausername' => $comp_sa,
			'dapassword' => $comp_pd));
	}
	public function create_av($comp_num, $comp_name, $comp_hst, $comp_oth, $comp_sn, $comp_pd)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('avspam', array(
			'clnum' => $comp_num,
			'avspname' => $comp_name,
			'hosted' => $comp_hst,
			'other' => $comp_oth,
			'avusername' => $comp_sn,
			'avpassword' => $comp_pd));
	}
	public function create_asp($comp_num, $comp_name, $comp_url, $comp_un, $comp_pw, $comp_note)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('asps', array(
			'clnum' => $comp_num,
			'aspname' => $comp_name,
			'aspusername' => $comp_un,
			'asppassword' => $comp_pw,
			'aspipaddress' => $comp_url,
			'aspnote' => $comp_note));
	}
	public function create_ups($comp_num, $comp_name, $comp_url, $comp_un, $comp_pw)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('ups', array(
				'clnum' => $comp_num,
				'upsname' => $comp_name,
				'upsusername' => $comp_un,
				'upsipaddress' => $comp_url,
				'upspassword' => $comp_pw));
	}
	public function create_drac($comp_num, $comp_ip, $comp_srvr, $comp_un, $comp_pw)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->insert('drac', array(
			'clnum' => $comp_num,
			'dracip' => $comp_address,
			'dracusername' => $comp_un,
			'dracpassword' => $comp_pw,
			'dracserver' => $comp_server));
	}
	public function add_document($nf)
	{
		$this->db->insert('docs', $nf);
	}
}