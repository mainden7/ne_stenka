<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Seo_text extends CI_Model{

	public static function update_seo_text($text, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `seo_texts` SET `content` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($text, $id));
	}

	public static function load_seo_texts(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `seo_texts`';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function load_seo_text($id){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `seo_texts` WHERE `id` = ?';
		$query = $CI->db->query($sql, $id);
		$result = $query->row_array();

		return $result;
	}
}