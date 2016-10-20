<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Articles extends CI_Model{
	public static function add_article($name, $content, $status, $on_main, $post, $img){
		$CI = & get_instance();
		$sql = 'INSERT INTO `products` (`title`, `content`, `date`, `image`, `status`, `on_main`, `post`) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $content, date('Y-m-d H:i:s'), $img, $status, $on_main, $post ));
	}
}