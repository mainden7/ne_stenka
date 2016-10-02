<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin extends CI_Model{

	public function __construct() {
		parent::__construct();
		$this->load->database();

	}

	public static function check_login($login){

		$CI = & get_instance();
		$sql = 'SELECT * FROM `admin_info` WHERE `login` = ?';
		$query = $CI->db->query($sql, array($login));
		$result = $query->row_array();
		
		if(isset($result['user_login'])){
			return 'TRUE';
		}else{
			return 'FALSE';
		}
	}

	public static function check_email($email){

		$CI = & get_instance();
		$sql = 'SELECT * FROM `user` WHERE `user_email` = ?';
		$query = $CI->db->query($sql, array($email));
		$result = $query->row_array();
		
		if(isset($result['user_email'])){
			return 'TRUE';
		}else{
			return 'FALSE';
		}
	}

	public static function check_password($user_login) {
        $CI = & get_instance();
        $sql = "SELECT * FROM `admin_info` WHERE `login` = ?";
        $query = $CI->db->query($sql, array($user_login));
        $results = $query->result_array();
        foreach ($results AS $result) {
            $result = $result;
        }
        if (isset($result)) {
            return $result;
        } else {
            FALSE;
        }
    }
}