<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class login_model extends CI_Model {
    public function __construct(){
        
        $this->load->database();
    }

	public function login_user($user_login, $user_pwd)
	{
        echo "userid: ".$user_login.("<br />");
        echo "userid: ".$user_pwd.("<br />");
        
        $query = $this->db->get_where('users', array('user_login' => $user_login, 'user_pwd' => $user_pwd));

        return $query->row_array(); 
        }
        public function get_user($user_id) {

        $query = $this->db->get_where('users', array('userid' => $user_id));

        return $query->row_array();
    }

}

?>
