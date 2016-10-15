<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/main_header', $data);
		$this->load->view('user/info', $data);
		$this->load->view('user/our_advantage', $data);
		$this->load->view('user/products', $data);
		$this->load->view('user/main_features', $data);
		$this->load->view('user/how_order', $data);
		$this->load->view('user/guarantee', $data);
		$this->load->view('user/testimonials', $data);
		$this->load->view('user/news', $data);
		$this->load->view('user/seotext', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}



}