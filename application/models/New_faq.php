<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class New_faq extends CI_Model{

	public static function add_question($question, $category, $answer){
		$CI = & get_instance();
		$sql = 'INSERT INTO `faq`(`question`, `category`, `answer`, `date`) VALUES (?,?,?,?)';
		$CI->db->query($sql, array($question, $category, $answer, date('Y-m-d H:i:s')));
	}

	public static function load_all(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `faq`';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function update_faq($question, $category, $answer, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `faq` SET `question` = ?, `category` = ?, `answer` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($question, $category, $answer, $id));		
	}

	public static function delete_faq($id){
		$CI = & get_instance();
		$sql = 'DELETE FROM `faq` WHERE `id` = ?';
		$CI->db->query($sql, $id);		
	}
}