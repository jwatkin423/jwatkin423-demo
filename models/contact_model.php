<?php

class contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function contact($email, $subject, $msg)
    {
        $to = "joseph.watkin@gmail.com";
        $from = $email;
        $headers = "From: ".$from;
        mail($to, $subject, $msg, $headers);
    }
}
?>