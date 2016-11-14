<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Order extends CI_Model{

	public static function save_order($name, $tel, $email, $region, $district, $city, $house, $corp, $comments, $delivery_date){
		$CI = & get_instance();
		$sql = 'INSERT INTO `orders`(`name`, `tel`, `email`, `region`, `district`, `city`, `house`, `corp`, `comments`, `delivery_date`, `order_date`) VALUES(?,?,?,?,?,?,?,?,?,?,?)';
		$CI->db->query($sql, array($name, $tel, $email, $region, $district, $city, $house, $corp, $comments, $delivery_date, date('Y-m-d H:i:s')));

		$order_id = $CI->db->insert_id();

		return $order_id;
	}

	public static function load_all_orders(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `orders`';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function save_order_items($order_id, $product_id, $quantity){
		$CI = & get_instance();
		$sql = 'INSERT INTO `order_items`(`order_id, `prduct_id`, `quantity`) VALUES(?,?,?)';
		$CI->db->query($sql, array($order_id, $product_id, $quantity));
	}

	public static function load_order_items($order_id){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `order_items` `oi` LEFT JOIN products `p` ON `p`.`id` = `oi`.`product_id` WHERE `oi`.`id` = ?';
		$query = $CI->db->query($sql, array($order_id));
		$result = $query->result_array();

		return $result;
	}

}