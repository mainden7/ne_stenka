<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index($user_id = NULL){


		$this->load->view('user/header');
		$this->load->view('user/main_menu');
		$this->load->view('user/main_header');
		$this->load->view('user/info');
		$this->load->view('user/our_advantage');
		$this->load->view('user/footer');
	}



}