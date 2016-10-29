<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class City extends CI_Model{


public static function add_city($name, $code){	
		$CI = & get_instance();
		$sql = 'INSERT INTO `cities` (`name`, `code`, `date`) VALUES (?, ?, ?)';
		$CI->db->query('SET NAMES utf8');
		$CI->db->query($sql, array($name, $code, date('Y-m-d H:i:s')));
	}

	public static function delete_city($id) {
        $CI = & get_instance();
        $sql = "DELETE FROM `cities` WHERE `id` = ?";
        $CI->db->query($sql, array($id));
    }

     public static function load_cities($id = NULL) {
    	$CI = & get_instance();
    	if($id == NULL){
    		$sql = "SELECT * FROM `cities`";
    		$query = $CI->db->query($sql);
    		$result = $query->result_array();
    	}elseif($id != NULL){
    		$sql = "SELECT * FROM `cities` WHERE id = ?";
    		$query = $CI->db->query($sql, array($id));
    		$result = $query->row_array();
    	}

    	return $result;
    }

}