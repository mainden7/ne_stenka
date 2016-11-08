<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Seo_text extends CI_Model{

	public static function update_seo_text($text, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `seo_texts` SET `content` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($text, $id));
	}

	public static function add_meta_tags($meta){
		$CI = & get_instance();
		$sql = 'UPDATE `main_settings` SET `meta` = ?';
		$CI->db->query($sql, $meta);
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
	public static function load_meta_tags(){
		$CI = & get_instance();
		$sql = 'SELECT `meta` FROM `main_settings`';
		$query = $CI->db->query($sql);
		$result = $query->row_array();

		return $result;
	}
}