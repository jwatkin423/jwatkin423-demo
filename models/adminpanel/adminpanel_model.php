<?php

class adminpanel_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //this function gets all user from the account
    public function get_users($compid)
    {
            $this->db->select('users.*');
            $this->db->from('users');
            $this->db->where('comp_id',$compid);
            $query = $this->db->get();
            return $query->result_array();
    }
    //adds a user and sets the account type of user or administrator
    public function add_user($compid, $userid, $first_name, $last_name, $pwd1, $acctt)
    {
        $compid = $this->session->userdata('company_id');
        $this->db->insert('users', array(
            'comp_id' => $compid,
            'user_login' => $userid,
            'fname' => $first_name,
            'lname' => $last_name,
            'user_pwd' => crypt($pwd1),
            'usertype' => $acctt
        ));
        
    }
    //deletes a user from the account
    public function delete_user($usernum) 
    {
            $this->db->select('users.*');
            $this->db->from('users');
            $this->db->where('users.user_id', $usernum);
            $this->db->delete('users');

    }
    //gets a specific user from the account
    public function get_subuser_data($usernum)
    {
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('users.user_id', $usernum);
        $query = $this->db->get();
        return $query->row_array();
    }
    //checks what kind of permissions the user has for clients
    public function check_perm($checkstring)
    {
        $pmset = explode(",", $checkstring);
        $userid = $pmset[0];
        $clnum = $pmset[1] / 6111988;
        $viewp = $pmset[2];
        $editp = $pmset[3];
        $delp = $pmset[4];
        
        $this->db->select('permset.*');
        $this->db->from('permset');
        $this->db->where('userid', $userid);
        $this->db->where('clnum', $clnum);
        $query = $this->db->count_all_results();
        //if the user has no permissions set,
        //the insert command is used
        if($query==0)
        {
            $this->db->insert('permset', array(
                'userid' => $userid,
                'clnum' => $clnum,
                'vdperm' => $viewp,
                'etperm' => $editp,
                'delperm' => $delp
            ));
        }
        //if the user already has permissions, than the
        //update table command is used to update the permissions
        else
        {
            $this->db->where('userid', $userid);
            $this->db->where('clnum', $clnum);
            $this->db->update('permset', array('vdperm' => $viewp, 'etperm' => $editp, 'delperm' =>$delp));
        }
    }
    //gets the permissions for the specific client of the specific user
    //the permissions will determine if the user can view/edit/delete the client
    public function get_permset($clientid)
    {
            $this->db->select('permset.*');
            $this->db->from('permset');
            $this->db->where('userid', $clientid);
            $query = $this->db->get();
            return $query->result_array();
    }
    //gets the permissions of each category
    //determines if the user can view/add/edit/delete
    public function get_ipermset($clientid)
    {
            $this->db->select('itemspermset.*');
            $this->db->from('itemspermset');
            $this->db->where('i_userid', $clientid);
            $query = $this->db->get();
            return $query->row_array();
    }
    //updates the user's id, email, first name last name password or account type
    public function up_subuser($userid, $cid, $iemail, $ifname, $ilname, $cp1, $iaccnttype)
    {
        //checks to see if the password has been changed as well.  If it has,
        //all account will be updated.
        if($cp1!="N")
        {
                $this->db->where('user_id', $userid);
                $this->db->update('users', array(
                    'user_login' => $iemail, 
                    'fname' => $ifname, 
                    'lname' =>$ilname,
                    'user_pwd' => $cp1,
                    'usertype' =>$iaccnttype));
        }
        //checks to see if the password has been changed as well.  If it has not,
        //all account will be updated, except the password.
        else
        {
            $this->db->where('user_id', $userid);
                $this->db->update('users', array(
                    'user_login' => $iemail, 
                    'fname' => $ifname, 
                    'lname' =>$ilname,
                    'usertype' =>$iaccnttype));
        }
    }
    //checks the permission for each category
    public function check_ipermset($userid, $idocs, $idmn, $iavp, $ishrddrvs, $iasps, $ipisps, $ibisps, $idrac, $ifirewall, $imlocs, $iprinters, $irouters,
                    $isa, $iservers, $iswtchs, $iups, $ivpn, $iwebmail, $iwifi)
    {
            //Checks to see if the permissions have been set for the categories.
            $this->db->select('itemspermset.*');
            $this->db->from('itemspermset');
            $this->db->where('i_userid', $userid);
            $query = $this->db->count_all_results();
            //If no permissions have been set, add to the database for the user
            if($query==0)
            {
            $this->db->insert('itemspermset', array(
                'i_userid' => $userid,
                'i_docs' => $idocs,
                'i_apps' => $ishrddrvs,
                'i_asps' => $iasps,
                'i_avspam' => $iavp,
                'i_bisp' => $ibisps,
                'i_clientdomain' => $idmn,
                'i_drac' => $idrac,
                'i_firewall' => $ifirewall,
                'i_mlocs' => $imlocs,
                'i_pisp' => $ipisps,
                'i_printers' => $iprinters,
                'i_routers' => $irouters,
                'i_serveraccounts' => $isa,
                'i_servers' => $iservers,
                'i_sslvpn' => $ivpn,
                'i_switches' => $iswtchs,
                'i_ups' => $iups,
                'i_webmail' => $iwebmail,
                'i_wifi' => $iwifi));
            }
            //If permissions have been set, update the database for the user
            else
            {
                $this->db->where('i_userid', $userid);
                $this->db->update('itemspermset', array(
                'i_apps' => $ishrddrvs,
                'i_asps' => $iasps,
                'i_avspam' => $iavp,
                'i_bisp' => $ibisps,
                'i_clientdomain' => $idmn,
                'i_drac' => $idrac,
                'i_firewall' => $ifirewall,
                'i_mlocs' => $imlocs,
                'i_pisp' => $ipisps,
                'i_printers' => $iprinters,
                'i_routers' => $irouters,
                'i_serveraccounts' => $isa,
                'i_servers' => $iservers,
                'i_sslvpn' => $ivpn,
                'i_switches' => $iswtchs,
                'i_ups' => $iups,
                'i_webmail' => $iwebmail,
                'i_wifi' => $iwifi));
             }
    }
    //gets the profile of the specific user
    public function get_profile($userid)
    {
        $this->db->select("users.*");
        $this->db->from('users');
        $this->db->where('users.user_id', $userid);
        $query = $this->db->get();
        return $query->row_array();
    }
    //get the company profile for the administrator
    public function get_compinfo($userid)
    {
        $compid = $userid * 344233;
        $this->db->select('company.*');
        $this->db->from('company');
        $this->db->where('company.compid', $compid);
        $query = $this->db->get();
        return $query->row_array();
    }
    //edits the administrator's profile
    public function edit_admin_profile($userid, $fname, $lname, $email, $name, $address1, $address2, $city, $state, $zip, $wrknum, $cellnum, $altnum)
    {
        $this->db->where('users.user_id', $userid);
        $this->db->update('users', array(
            'fname' => $fname,
            'lname' => $lname,
            'user_login' => $email,
            'worknum' => $wrknum,
            'cellnum' => $cellnum,
            'altnum' => $altnum));
        $compid = $userid * 344233;
        $this->db->where('company.compid', $compid);
        $this->db->update('company', array(
            'compname' => $name,
            'compaddress1' => $address1,
            'compaddress2' => $address2,
            'compcity' => $city,
            'compstate' => $state,
            'compzip' => $zip));
    }
    //edits a users profile under the administrators account
    public function edit_profile($userid, $fname, $lname, $email, $wrknum, $cellnum, $altnum)
    {
        $this->db->where('users.user_id', $userid);
        $this->db->update('users', array(
            'fname' => $fname,
            'lname' => $lname,
            'user_login' => $email,
            'worknum' => $wrknum,
            'cellnum' => $cellnum,
            'altnum' => $altnum));
    }
}

    
?>