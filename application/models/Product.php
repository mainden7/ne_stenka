<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Product extends CI_Model{

	public static function add_product($name, $description, $img, $price, $category, $size){
		$CI = & get_instance();
		$sql = 'INSERT INTO `products` (`name`, `description`, `date`, `image`, `price`, `category`, `size`) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $description, date('Y-m-d H:i:s'), $img, $price, $category, $size));
		$id = $CI->db->insert_id();

		return $id;
	}

	public static function update_product($name, $description, $img, $price, $size, $category,  $id) {
        $CI = & get_instance();
        $sql = "UPDATE `products` SET  `name` = ?, `description` = ?, `image` = ?, `price` = ?, `size` = ?,  `category` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $description, $img, $price, $size, $category, $id));
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

	public static function add_product_category($name, $description, $img, $price, $size, $category){
		$CI = & get_instance();
		$sql = 'INSERT INTO `product_category` (`name`, `description`, `image`, `date`, `price`, `size`, `category`) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $description, $img, date('Y-m-d H:i:s'), $price, $size, $category));
	}

	public static function update_product_category($name, $description, $img, $price, $size, $category, $id) {
        $CI = & get_instance();
        $sql = "UPDATE `product_category` SET  `name` = ?, `description` = ?, `img` = ?, `price` = ?, `size` = ?, `category` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $description, $img, $price, $size, $category, $id));
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

    public static function save_product_price($product_id, $city, $price){
    	$CI = & get_instance();
    	$sql = 'INSERT INTO `product_prices`(`product_id`, `city`, `price`) VALUES (?,?,?)';
    	$CI->db->query($sql, array($product_id, $city, $price));
    }

    public static function load_price($product_id, $city){
    	$CI = & get_instance();
    	$sql = 'SELECT `price` FROM `product_prices` WHERE `product_id` = ? AND `city` = ?';
    	$query = $CI->db->query($sql, array($product_id, $city));
    	$result = $query->row_array();

    	return $result;
    }

	public static function update_product_price($product_id, $city, $price){
    	$CI = & get_instance();
    	$sql = 'UPDATE `product_prices` SET `price` = ? WHERE `product_id` = ? AND `city` = ?';
    	$CI->db->query($sql, array($price, $product_id, $city));
    }
   


}