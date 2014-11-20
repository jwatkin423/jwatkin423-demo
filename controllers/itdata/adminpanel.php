<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminpanel extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        $this->load->database();
        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');
        $company_id = $this->session->userdata('comp_id');
        $account_type =$this->session->userdata('user_t');
        $this->load->model('adminpanel/adminpanel_model');
        }

	public function index()
	{
            //$user_id = $this->session->userdata('user_id');

            if(($account_type == "A") || ($account_type == "SA"))
            {
                $data['company'] = $company_id; 
                $this->load->view('header/header');
                $this->load->view('admin/home', $data);
                $this->load->view('footer/footer');
            }
            else
            {
                /*$this->load->view('header/header');
                $this->load->view('admin/nonadminhome');
                $this->load->view('footer/footer');*/
                redirect('/itdata/user/');
            }
            
	}
        public function addclient()
        {
            $company_id = $this->session->userdata('comp_id');
            $account_type =$this->session->userdata('user_t');
            $user_id = $this->session->userdata('user_id');
            $data['users'] = $user_id; 
            if(($account_type == "A") || ($account_type == "SA"))
            {
                $this->load->view('header/header');
                $this->load->view('admin/newclient', $data);
                $this->load->view('footer/footer');
            }
            else
            {
                /*$this->load->view('header/header');
                $this->load->view('admin/nonadminhome');
                $this->load->view('footer/footer');*/
                redirect('/itdata/user/');
            }
        }
        public function users()
        {
           $user_id = $this->session->userdata('user_id');
           $comp_id = $this->session->userdata('company_id');
           $this->load->model('adminpanel/adminpanel_model');
           $u_data = $this->adminpanel_model->get_users($comp_id);
           $data['users_data'] = $u_data;
           $this->load->view('header/header');
           $this->load->view('admin_panel/showuser', $data);
           $this->load->view('footer/footer');
           
        }
        public function create_user()
        {
            $cid = $this->session->userdata('company_id');
            $acd = array('compid' => $cid);
            $data['coid'] = $acd;
            $this->load->view('header/header');
            $this->load->view('admin_panel/newuser', $data);
            $this->load->view('header/header');
            
        }
        public function add_user()
        {
            $userid = $this->input->post('email');
            $first_name = $this->input->post('fname');
            $last_name = $this->input->post('lname');
            $pwd1 = $this->input->post('password1');
            $compid = $this->input->post('company_id');
            $acctt = $this->input->post('accnttype');
            $this->load->model('adminpanel/adminpanel_model');
            $this->adminpanel_model->add_user($compid, $userid, $first_name, $last_name, $pwd1, $acctt);
            $data['company'] = $compid; 
            $this->load->view('header/header');
            $this->load->view('admin/home', $data);
            $this->load->view('footer/footer');
        }
        public function update_user($userid)
        {
            $comp_id = $this->session->compdata('company_id');
            $this->load->model('adminpanel/adminpanel_model');
            $usi = $this->adminpanel_model->user_update($user_id);
            $data['userdata'] = $usi;
            $this->load->view('header/header');
            $this->load->view('admin/updateuser', $data);
            $this->load->view('header/header');
        }
        public function edit_user()
        {
            $user_id = $this->input->post('usr_id');
            $user_em = $this->input->post('username');
            $user_fn = $this->input->post('first_name');
            $user_ln = $this->input->post('last_name');
            $user_te = $this->input->post('user_phone');
            $user_pw = $this->input-post('user_pd');
            $this->load->model('adminpanel/admin_model');
            $this->admin_model->edit_user($user_id, $user_em, $user_fn, $user_ln, $user_te, $user_pw);
            
        }
        public function update_profile($usernum)
        {
            $accnttype =  $this->session->userdata('user_t');
            $user_id =  $this->session->userdata('user_id');
            if($accnttype == "A")
            {
                $this->load->model('users_model');
                $user = $this->users_model->get_user($user_id);
                $this->load->model('clients_model');
                $clients = $this->clients_model->get_user_clients($user_id);
                $data['users'] = $user;
                $data['clients'] = $clients;
            }
            if($accnttype == "SA") 
            {
                $cid = $this->session->userdata('company_id');
                $this->load->model('clients_model');
                $clients = $this->clients_model->get_clients_cid($cid);
                $data['clients'] = $clients;
         
            }
            if($accnttype == "U") 
            {
                $cid = $this->session->userdata('company_id');
                $this->load->model('clients_model');
                $clients = $this->clients_model->get_clients_cid($cid);
                $data['clients'] = $clients;
         
            }
            $this->load->model('adminpanel/adminpanel_model');
            $userd =  $this->adminpanel_model->get_subuser_data($usernum);
            $data['ud'] = $userd;
            $upmset = $this->adminpanel_model->get_permset($usernum);
            $data['userpermset'] = $upmset;
            $uipmset = $this->adminpanel_model->get_ipermset($usernum);
            $data['useripermset'] = $uipmset;
            $this->load->view('header/header');
            $this->load->view('admin_panel/userprofile', $data);
            $this->load->view('header/header');
        }
        public function edit_profile()
        {
            //Data on the User
            $userid = $this->input->post('userid');
            $cid = $this->input->post('company_id');
            $iemail = $this->input->post('email');
            $ifname = $this->input->post('fname');
            $ilname = $this->input->post('lname');
            $cpwd = $this->input->post('chpwd');
            $ipassword1 = $this->input->post('password1');
            if($cpwd=="Y")
            {
                $cp1 = crypt($ipassword1);
            }
            else
            {
                $cp1 = "N";
            }
            $iaccnttype = $this->input->post('accnttype');
            $this->adminpanel_model->up_subuser($userid, $cid, $iemail, $ifname, $ilname, $cp1, $iaccnttype);            
            //What type of Data they can see
            $idocs = $this->input->post('docs');
            $idmn = $this->input->post('dmn');
            $iavp = $this->input->post('avp');
            $ishrddrvs = $this->input->post('shrddrvs');
            $iasps = $this->input->post('asps');
            $ipisps = $this->input->post('pisps');
            $ibisps = $this->input->post('bisps');
            $idrac = $this->input->post('drac');
            $ifirewall = $this->input->post('firewall');
            $imlocs = $this->input->post('mlocs');
            $iprinters = $this->input->post('printers');
            $irouters = $this->input->post('routers');
            $isa = $this->input->post('sa');
            $iservers = $this->input->post('servers');
            $iswtchs = $this->input->post('swtchs');
            $iups = $this->input->post('ups');
            $ivpn = $this->input->post('vpn');
            $iwebmail = $this->input->post('webmail');
            $iwifi = $this->input->post('wifi');
            $this->adminpanel_model->check_ipermset($userid, $idocs, $idmn, $iavp, $ishrddrvs, $iasps, $ipisps, $ibisps, $idrac, $ifirewall, $imlocs, $iprinters, $irouters,
                    $isa, $iservers, $iswtchs, $iups, $ivpn, $iwebmail, $iwifi);
            
            //Tests to see if the user already has permissions set for the client, and updates them accordingly
            $narray= array('clients'=>"test");
            foreach($_POST as $key => $val)
            {
                
                $ved=(explode("_", $key));
                if(($ved[0]=="view")||($ved[0]=="edit")||($ved[0]=="delete"))
                {
                    $vedarray = array_push($narray, $val);
                    if ($ved[0]=="view")
                    {
                        $viewperm = $userid.",".$ved[1].",".$val;
                        //echo "The customer number: ".$ved[1]." View=".$val."<br />";
                        $stringtest = $viewperm;
                    }

                    if ($ved[0]=="edit")
                    {
                        //echo "The customer number: ".$ved[1]." Edit=".$val."<br />";
                        $stringtest = $stringtest."," .$val;
                    }

                    if ($ved[0]=="delete")
                    {
                        //echo "The customer number: ".$ved[1]." Delete=".$val."<br />";
                        $stringtest = $stringtest."," .$val;
                    }
                    //echo "String test: ".$stringtest."<br />";
                    $this->adminpanel_model->check_perm($stringtest);
                }
            }
            redirect('/itdata/adminpanel/users/');
        }
        public function delete_user($usernum)
        {
            $this->load->model('adminpanel/adminpanel_model');
            $this->adminpanel_model->delete_user($usernum);
            redirect('/itdata/adminpanel/users/');
        }

        public function chpwd()
        {
            $userid = $this->session->userdata('user_id');
            $data['uid'] = $userid;
            $this->load->view('header/header');
            $this->load->view('fpwd/chpassword', $data);
            $this->load->view('header/header');
            
        }
        public function uppwd()
        {
            $uid = $this->input->post('monochrome');
            $tuid = $uid/767676;
            $npass = $this->input->post('pw1');
            $this->load->model('fpwd_model');
            $rstatus = $this->fpwd_model->change_password($tuid, $npass);
            if($rstatus==1)
            {
                redirect('itdata/adminpanel');
            }
            else
            {
                redirect('/itdata/login');
            }
        }
        public function profile()
        {
            $userid = $this->session->userdata('user_id');
            $accnt = $this->session->userdata('user_t');
            $this->load->model('adminpanel/adminpanel_model');
            $userpro = $this->adminpanel_model->get_profile($userid);
            $data['userprf'] = $userpro;

            if($accnt == "A")
            {
                $userid = $this->session->userdata('user_id');
                $comp_info = $this->adminpanel_model->get_compinfo($userid);
                $data['compinfo'] = $comp_info;
                $this->load->view('header/header');
                $this->load->view('admin_panel/adminhome', $data);
                $this->load->view('footer/footer');
            }
            else
            {
                $this->load->view('header/header');
                $this->load->view('admin_panel/userhome', $data);
                $this->load->view('footer/footer');                
            }
        }
        public function update_pro()
        {
           $accnt = $this->input->post('biodome');
           $userid = $this->input->post('monochrome');
           $email = $this->input->post('email');
           $fname = $this->input->post('fname');
           $lname = $this->input->post('lname');
           $wrknum = $this->input->post('wrknum');
           $cellnum = $this->input->post('cellnum');
           $altnum = $this->input->post('altnum');
           $this->load->model('adminpanel/adminpanel_model');
           if($accnt == "A")
           {
                $name = $this->input->post('company_name');
                $address1 = $this->input->post('address1');
                $address2 = $this->input->post('address2');
                $city = $this->input->post('city');
                $state = $this->input->post('state');
                $zip = $this->input->post('zip');
                $this->adminpanel_model->edit_admin_profile($userid, $fname, $lname, $email, $pwd1, $name, $address1, $address2, $city, $state, $zip, $wrknum, $cellnum, $altnum);
           }
           else
           {
                $this->users_model->edit_profile($userid, $fname, $lname, $email, $pwd1, $wrknum, $cellnum, $altnum);
           }
           redirect('itdata/adminpanel/profile');
        }
        public function dclients($id)
        {
            
        }
}