<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Testimonial extends CI_Model{

	public static function add_testimonial($name, $position, $email, $description, $photo){
		$CI = & get_instance();
		$sql = 'INSERT INTO `testimonials`(`name`, `position`, `email`, `description`, `photo`, `date`) VALUES(?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $position, $email, $description, $photo, date('Y-m-d H:i:s')));
	}

	public static function load_all_testimonials(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `testimonials`';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function update_testimonial($name, $positiont, $email, $description, $photo, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `testimonials` SET `name` = ?, `position` = ?, `email` = ?, `description` = ?, `photo` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($name, $position, $email, $description, $photo, $id));
	}

	public static function delete_testimonial($id){
		$CI = & get_instance();
		$sql = 'DELETE FROM `testimonials` WHERE `id` = ?';
		$CI->db->query($sql);
	}
}
?>