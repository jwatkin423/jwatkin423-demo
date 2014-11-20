<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispdat_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
        public function client_info($clientid)
        {
            $this->db->select('clients.clnum, clients.clientname');
            $this->db->from('clients');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->row_array();
        }
        
        public function servers($clientid)
        {
            
            $this->db->select('clients.clnum, servers.*');
            $this->db->from('clients, servers');
            $this->db->where('clients.clnum', $clientid);
            $this->db->where('clients.clnum = servers.clnum');
            $query = $this->db->get();
            return $query->result_array();
            
        }
        public function domains($clientid)
        {
            $this->db->select('clients.clnum, clientdomain.*');
            $this->db->from('clients, clientdomain');
            $this->db->where('clients.clnum = clientdomain.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function printers($clientid)
        {
            $this->db->select('clients.clnum, printers.*');
            $this->db->from('clients, printers');
            $this->db->where('clients.clnum = printers.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function apps($clientid)
        {
            $this->db->select('clients.clnum, apps.*');
            $this->db->from('clients, apps');
            $this->db->where('clients.clnum = apps.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function webmail($clientid)
        {
            $this->db->select('clients.clnum, webmail.*');
            $this->db->from('clients, webmail');
            $this->db->where('clients.clnum = webmail.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function wifi($clientid)
        {
            $this->db->select('clients.clnum, wifi.*');
            $this->db->from('clients, wifi');
            $this->db->where('clients.clnum = wifi.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function sslvpn($clientid)
        {
            $this->db->select('clients.clnum, sslvpn.*');
            $this->db->from('clients, sslvpn');
            $this->db->where('clients.clnum = sslvpn.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function mlocs($clientid)
        {
            $this->db->select('clients.clnum, mlocs.*');
            $this->db->from('clients, mlocs');
            $this->db->where('clients.clnum = mlocs.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array(); 
        }
        public function isp($clientid)
        {
            $this->db->select('clients.clnum, pisp.*');
            $this->db->from('clients, pisp');
            $this->db->where('clients.clnum = pisp.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function bisp($clientid)
        {
            $this->db->select('clients.clnum, bisp.*');
            $this->db->from('clients, bisp');
            $this->db->where('clients.clnum = bisp.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function routers($clientid)
        {
            $this->db->select('clients.clnum, routers.*');
            $this->db->from('clients, routers');
            $this->db->where('clients.clnum = routers.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function firewalls($clientid)
        {
            $this->db->select('clients.clnum, firewalls.*');
            $this->db->from('clients, firewalls');
            $this->db->where('clients.clnum = firewalls.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function switches($clientid)
        {
            $this->db->select('clients.clnum, switches.*');
            $this->db->from('clients, switches');
            $this->db->where('clients.clnum = switches.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function serveraccounts($clientid)
        {
            $this->db->select('clients.clnum, serveraccounts.*');
            $this->db->from('clients, serveraccounts');
            $this->db->where('clients.clnum = serveraccounts.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function avspamapps()
        {
            //$this->db->select('anti_virus_programs.*');
            //$this->db->from('anti_virus_programs');
            $query = $this->db->get('anti_virus_programs');
            return $query->result_array();

        }
        public function avspam($clientid)
        {
            $this->db->select('clients.clnum, avspam.*');
            $this->db->from('clients, avspam');
            $this->db->where('clients.clnum = avspam.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function ups($clientid)
        {
            $this->db->select('clients.clnum, ups.*');
            $this->db->from('clients, ups');
            $this->db->where('clients.clnum = ups.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function asps($clientid)
        {
            $this->db->select('clients.clnum, asps.*');
            $this->db->from('clients, asps');
            $this->db->where('clients.clnum = asps.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function drac($clientid)
        {
            $this->db->select('clients.clnum, drac.*');
            $this->db->from('clients, drac');
            $this->db->where('clients.clnum = drac.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
        public function docs($clientid)
        {
            $this->db->select('clients.clnum, docs.*');
            $this->db->from('clients, docs');
            $this->db->where('clients.clnum = docs.clnum');
            $this->db->where('clients.clnum', $clientid);
            $query = $this->db->get();
            return $query->result_array();
        }
}

?>
