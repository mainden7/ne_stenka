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

	public function blocks($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'blocks';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/blocks_main', $data);
		$this->load->view('user/instruments', $data);
		$this->load->view('user/block_advantage', $data);
		$this->load->view('user/contact_director', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function faq($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'faq';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/faq');
		$this->load->view('user/seotext', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function about($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'about';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/about_header', $data);
		$this->load->view('user/who_we_are', $data);

		$this->load->view('user/consultation', $data);
		$this->load->view('user/sertificates', $data);
		$this->load->view('user/testimonials', $data);		
		$this->load->view('user/contact_director2', $data);
		$this->load->view('user/seotext', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function contacts($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'contact';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/contacts', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function product($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'blocks';
		$data['title'] = '';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/product_main', $data);
		$this->load->view('user/additional_proposal', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function instruments($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = 'instruments';
		$data['title'] = '';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/instruments_main', $data);
		$this->load->view('user/only_with_main', $data);
		$this->load->view('user/do_not_find', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function news_article($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = '';
		$data['title'] = '';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/article_main', $data);
		$this->load->view('user/other_articles', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function cart($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = '';
		$data['title'] = '';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/cart', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}

	public function cart_next($user_id = NULL){
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		$data = array();
		$data['active'] = '';
		$data['title'] = '';
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('user/header', $data);
		$this->load->view('user/main_menu', $data);
		$this->load->view('user/cart_next', $data);
		$this->load->view('user/main_footer', $data);
		$this->load->view('user/footer', $data);
	}
}