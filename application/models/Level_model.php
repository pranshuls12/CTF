<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function user_login($email, $password)
    {
        $this->db->select('id, user_email')->from('status_table');
        $this->db->where('user_email',$email);
        $this->db->where('user_password', $password);
        $res = $this->db->get()->row();
         
        if ($res) {
            return $res;
        } else {
            return 0;
        }
        // return 1;
    }

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
