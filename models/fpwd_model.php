<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpwd_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
 
    //creates a random salt  for the crypt function
    public function check_email($em)
    {
        $nuid = $uid;
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphalength = strlen($alphabet)-1;
        for($i = 0; $i < 8; $i++)
        {
            $n = rand(0, $alphalength);
            $pass[] = $alphabet[$n];
        }
        $newpassword = implode($pass);
        //Checks to see if the user exists
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('users.user_login', $em);
        $query = $this->db->count_all_results();
        /*if the user exists the result will equal 1 and only 1 (as there can only be one usr
        with that email address
        The function will determine if exists already and send the user an 
        email that is stored in the database.
        */
        if($query == 1)
        {
            $cpwd = crypt($newpassword);
            $this->db->where('users.user_login', $em);
            $this->db->update('users', array('user_pwd' => $cpwd));
            $mailsubject = "ITData Password Reset";
            $mailmsg = "This is your temporary password: ".$newpassword." User ID: ".$uid;
            $mailto = $em;
            $mailfrom =  "no-reply@itdata.com";
            mail($mailto, $mailsubject, $mailmsg, "From: $mailfrom");
            $pcs = $newpass." Password changed".$cpwd." ID:".$nuid;
            return $pcs;
            
        }
        //reports that the password has not changed because the user does not
        //exist
        else
        {
            $pcs = $newpassword." Password not changed ".$cpwd." ID:".$nuid;
            return $pcs;
            
        }
    }
    //changes the password for the user based on their user id
    //returns a 1 if it is successful or a 2 if it is not
    public function change_password($tuid, $npass)
    {
        $cnpass = crypt($npass);
        $this->db->where('users.user_id', $tuid);
        if($this->db->update('users', array('user_pwd' => $cnpass)))
        {
            return "1";
        }
        else
        {
            return "2";
        }
    }
}