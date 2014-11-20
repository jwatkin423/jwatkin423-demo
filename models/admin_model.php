<?php

class admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_users($userd_id)
    {
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('users.user_id', $user_id);
        $comp_id = $this->db->get('users.comp_id');
    }
    public function update_user($user_id, $user_em, $user_fn, $user_ln, $user_te, $user_pw)
    {
        $this->db->select('users.*');
        $this->db->where('users.user_id', $usrid);
    }
}

?>