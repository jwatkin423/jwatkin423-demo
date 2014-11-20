<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clients_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

	public function get_user_clients($user_id)
	{
            //Gets all of the clients that have not been marked as deleted.
            $query = $this->db->get_where('clients', array('user_id' => $user_id, 'client_deleted' => 'n'));
            return $query->result_array();
        }
        public function get_clients_cid($compid)
        {
            $query = $this->db->get_where('clients', array('comp_id' => $compid, 'client_deleted' => 'n'));
            return $query->result_array();
        }
        public function get_client_data($clientid)
        {
            //gets all of the clients based on userid.
            $this->db->select('clients.*');
            $this->db->from('clients');
            $this->db->where('clnum', $clientid);
            //$this->db->where('cd', $cldel);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function get_clients_del($userid)
        {
            $query = $this->db->get_where('clients', array('user_id' => $userid, 'client_deleted' => 'y'));
            return $query->result_array();
        }
}