<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Product extends CI_Model{
	public static function add_product($name, $description){
		$CI = & get_instance();
		$sql = 'INSERT INTO `products` (`name`, `description`, `date`) VALUES (?, ?, ?)';
		$CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s')));
	}

	public static function update_product($name, $description, $id) {
        $CI = & get_instance();
        $sql = "UPDATE `products` SET  `name` = ?, `description` = ?, `date` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s'), $id));
    }

    public static function delete_product($id) {
        $CI = & get_instance();
        $sql = "DELETE FROM `products` WHERE `id` = ?";
        $CI->db->query($sql, array($id));
    }

    public static function load_products($id = NULL) {
    	$CI = & get_instance();
    	if($id == NULL){
    		$sql = "SELECT * FROM `products`";
    		$query = $CI->db->query($sql);
    		$result = $query->result_array();
    	}elseif($id != NULL){
    		$sql = "SELECT * FROM `products` WHERE id = ?";
    		$query = $CI->db->query($sql, array($id));
    		$result = $query->row_array();
    	}

    	return $result;
    }

	public static function add_product_category($name, $description){
		$CI = & get_instance();
		$sql = 'INSERT INTO `product_category` (`name`, `description`, `date`) VALUES (?, ?, ?)';
		$CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s')));
	}

	public static function update_product_category($name, $description, $id) {
        $CI = & get_instance();
        $sql = "UPDATE `product_category` SET  `name` = ?, `description` = ?, `date` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s'), $id));
    }

    public static function delete_product_category($id) {
        $CI = & get_instance();
        $sql = "DELETE FROM `product_category` WHERE `id` = ?";
        $CI->db->query($sql, array($id));
    }

    public static function load_categories($id = NULL) {
    	$CI = & get_instance();
    	if($id == NULL){
    		$sql = "SELECT * FROM `product_category`";
    		$query = $CI->db->query($sql);
    		$result = $query->result_array();
    	}elseif($id != NULL){
    		$sql = "SELECT * FROM `product_category` WHERE id = ?";
    		$query = $CI->db->query($sql, array($id));
    		$result = $query->row_array();
    	}

    	return $result;
    }

   


}