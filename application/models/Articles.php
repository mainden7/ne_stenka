<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Articles extends CI_Model{
	public static function add_article($name, $content, $status, $on_main, $post, $img){
		$CI = & get_instance();
		$sql = 'INSERT INTO `article` (`title`, `content`, `date`, `image`, `active`, `on_main`, `post`) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $content, date('Y-m-d H:i:s'), $img, $status, $on_main, $post ));
	}
	public static function load_all(){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `article` ORDER BY `date`';
		$query = $CI->db->query($sql);
		$result = $query->result_array();

		return $result;
	}

	public static function load_article($id){
		$CI = & get_instance();
		$sql = 'SELECT * FROM `article` WHERE `id` = ?';
		$query = $CI->db->query($sql, $id);
		$result = $query->row_array();

		return $result;
	}

	public static function update_article($name, $content, $status, $on_main, $post, $img,  $id) {
        $CI = & get_instance();
        $sql = "UPDATE `article` SET  `title` = ?, `content` = ?, `status` = ?, `on_main` = ?, `post` = ?, `img` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $content, $status, $on_main, $post, $img,  $id));
    }

    public static function delete_article($id) {
        $CI = & get_instance();
        $sql = "DELETE FROM `article` WHERE `id` = ?";
        $CI->db->query($sql, array($id));
    }

	public static function update_meta_articles($title, $meta, $id){
		$CI = & get_instance();
		$sql = 'UPDATE `article` SET `title` = ?, `meta` = ? WHERE `id` = ?';
		$CI->db->query($sql, array($title, $meta, $id));
	}



}