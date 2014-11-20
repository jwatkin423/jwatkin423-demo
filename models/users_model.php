<?php
class Users_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // get user ID for given login and password
    public function login_user($user_login, $user_pwd) 
    {
       //Original function
        /*
        $query = $this->db->get_where('users', array('user_login' => $user_login, 'user_pwd' => $user_pwd));
        return $query->row_array();
         * 
         */
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('user_login', $user_login);
        $query = $this->db->get();
        $pwdcheck = $query->row_array();
        $parray = array('userid' => $pwdcheck['user_login'], 'upwd' => $pwdcheck['user_pwd'] );
        $p = $pwdcheck['user_pwd'];
        $hp = crypt($user_pwd, $p);
        if ($hp === $p)
        {
		return $pwdcheck;
        }
        else
        {
                $data['invalid'] = "Password did not match stored password";
                
         }
      }
    

    // get user info given ID
    public function get_user($user_id) {

        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row_array();
    }
    public function create_user($fname, $lname, $email, $pswd1, $address1, $address2, $city, $state, $zip, $wrknum, $cellnum, $altnum)
    {
        $hashed_password = crypt($pswd1);    
        $this->db->insert('users', [
            'fname' => $fname,
            'lname' => $lname,
            'user_login' => $email,
            'user_pwd' => $hashed_password,
            //'address1' => $address1,
            //'address2' => $address2,
            //'city' => $city,
            //'state' => $state,
            //'zip' => $zip,
            'usertype' => "A",
            'worknum' => $wrknum,
            'cellnum' => $cellnum,
            'altnum' => $altnum
        ]);
        $uid = $this->db->insert_id();
        $cuid = $uid * 344233;
         $this->db->insert('company', array(
            'compid' => $cuid,
            'compaddress1' => $address1,
            'compaddress2' => $address2,
            'compcity' => $city,
            'compstate' => $state,
            'compzip' => $zip));
         
         $this->db->where('user_id', $uid);
         $this->db->update('users', array('comp_id' => $cuid));
        ?>
<html>
    <body>
        <?php echo "comp id: ".$compid = $this->db->insert_id(); ?>
    </body>
</html>    
<?php    
      $compid = $compid * 231783;
      $compid_new = $compid / 231783;
      $this->db->select('users.*');
      $this->db->where('users.user_id', $compid_new);
      $this->db->update('users', array('comp_id' => $compid));
    }
}
?>
