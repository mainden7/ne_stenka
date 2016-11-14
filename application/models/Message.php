<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Message extends CI_Model{
    public static function save_message($name, $tel, $comment, $subject){
        $CI = & get_instance();
        $sql = 'INSERT INTO `message`(`name`, `tel`, `comment`, `subject`, `date`) VALUES(?, ?, ?, ?, ?)';
        $CI->db->query($sql, array($name, $tel, $comment, $subject, date('Y-m-d H:i:s')));
    }

    public static function load_messages(){
        $CI = & get_instance();
        $sql = 'SELECT * FROM `message`';
        $query = $CI->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public static function delete_message($id){
        $CI = & get_instance();
        $sql = 'DELETE FROM `message` WHERE `id` = ?';
        $CI->db->query($sql, $id);
    }
}