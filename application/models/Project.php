<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Project extends CI_Model{

	public static function add_project($name, $client_name, $testimonial, $description, $img){
		$CI = & get_instance();
		$sql = 'INSERT INTO `projects` (`name`, `client_name`, `testimonial`, `description`, `img`, `date`) VALUES (?, ?, ?, ?, ?, ?)';
		$CI->db->query($sql, array($name, $client_name, $testimonial, $description, $img, date('Y-m-d H:i:s')));
	}
	public static function update_project($name, $client_name, $testimonial, $description, $img, $id) {
        $CI = & get_instance();
        $sql = "UPDATE `projects` SET  `name` = ?, `client_name` = ?, `testimonial` = ?, `description` = ?, `img` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($name, $client_name, $testimonial, $description, $img, $id));
    }

    public static function post_project($id, $status) {
        $CI = & get_instance();
        $sql = "UPDATE `projects` SET `active` = ? WHERE `id` = ?";
        $CI->db->query($sql, array($status, $id));
    }

    public static function delete_project($id) {
        $CI = & get_instance();
        $sql = "DELETE FROM `projects` WHERE `id` = ?";
        $CI->db->query($sql, array($id));
    }

    public static function load_projects($id = NULL) {
    	$CI = & get_instance();
    	if($id == NULL){
    		$sql = "SELECT * FROM `projects`";
    		$query = $CI->db->query($sql);
    		$result = $query->result_array();
    	}elseif($id != NULL){
    		$sql = "SELECT * FROM `projects` WHERE id = ?";
    		$query = $CI->db->query($sql, array($id));
    		$result = $query->row_array();
    	}

    	return $result;
    }

}