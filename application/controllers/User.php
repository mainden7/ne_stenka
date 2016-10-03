<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index($user_id = NULL){


		$this->load->view('user/header');
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}



}