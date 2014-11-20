<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkemail_model extends CI_Model {
    
    public function __construct() 
    {
            $this->load->database();
    }
    //If the email esists, returns 'Good!' or 
    //If the email does not exist, returns 'Not Good"
    public function checkemail($email)
    {
            $this->db->select('user_login');
            $this->db->from('users');
            $this->db->where('user_login', $email);
            $query = $this->db->count_all_results();
            if ($query==0)
            {
                return "Good!";
            }
            else
            {
                return "Not Good";
            }
    }
    //Encrypts the password for the user with a salt phrase
    public function cpt_password($password_m)
    {
        $thenewpassword = CRYPT($password_m, 'An!Extrememly#long@Password!');
        return $thenewpassword;
    }

}