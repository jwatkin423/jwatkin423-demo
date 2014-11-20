<?php
class Items_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // get user given ID or email
    public function get_user_items($user_id) {

        $query = $this->db->get_where('items', array('user_id' => $user_id));

        return $query->result_array();
    }
}
