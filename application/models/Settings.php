<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Settings extends CI_Model{

	public static function load_main_settings(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `main_settings`';
		$query = $CI->db->query($sql);
		$result = $query->row_array();
		
		return $result;
	}
}