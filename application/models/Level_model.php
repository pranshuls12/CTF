<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function user_login($email, $password)
    {
        // $now = new DateTime();
        // $now->setTimezone(new DateTimezone('Asia/Kolkata'));
        $time = date('Y-m-d h:i:s', time());
        $this->db->select('id, user_email, user_level')->from('status_table');
        $this->db->where('user_email',$email);
        $this->db->where('user_password', $password);
        $res = $this->db->get()->row();
         
        if ($res) {
            $res1 = $this->login_time($time, $email);
            return $res;
        } else {
            return 0;
        }
    }

    public function login_time($time, $email)
    {
        $this->db->where('user_email',$email);
    	$res1 = $this->db->update('status_table',array('login_time' => $time));
    	if($res1){
     		return $res1;
     	}else{
     		return 0;
     	}
    }

    // public function logout_time($email, $time)
    // {
    //     $this->db->where('user_email',$email);
    // 	$res1 = $this->db->update('status_table',array('logout_time' => $time));
    // 	// if($res1){
    //     //     // echo "<script>alert();</script>";
    //  	// 	// return $res1;
    //  	// }else{
    //  	// 	return 0;
    //  	// }
    // }

    public function update_status($id, $level)
    {
        $this->db->where('id',$id);
    	$res = $this->db->update('status_table',array('user_level' => $level));
    	if($res){
     		return $res;
     	}else{
     		return 0;
     	}
    }

}
