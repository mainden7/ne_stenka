<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		$data = array();
		$data['main_settings'] = Settings::load_main_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
		//views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header');
		$this->load->view('admin/main_menu');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	
	}

	public function main_settings(){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        if($post){
        	//save logo
            if ($_FILES['logo']['name']) {
                $uploaddir = 'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['logo']['name']);
                if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile)) {
                    $logo = $_FILES['logo']['name'];
                } else {
                    $logo = $post['old_logo'];
                }
            } else {
                $logo = $post['old_logo'];
            }

            //save favicon
            if ($_FILES['favicon']['name']) {
                $uploaddir = 'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['favicon']['name']);
                if (move_uploaded_file($_FILES['favicon']['tmp_name'], $uploadfile)) {
                    $favicon = $_FILES['favicon']['name'];
                } else {
                    $favicon = $post['old_favicon'];
                }
            } else {
                $favicon = $post['old_favicon'];
            }
            $title = $post['main_title'];
            //update settings
            Settings::update_main_settings($logo, $favicon, $title);
            //update admin login and pass
            $admin_creds = Settings::load_admin_settings();
            $admin_pass = $admin_creds['password'];
            $admin_login = $admin_creds['login'];
            $new_login = $post['admin_login'];
            $new_pass = sha1($post['admin_pass'] . 'admin');
            if($admin_login != $new_login OR $admin_pass != $new_pass){
            	//send email
                $this->load->library('email');
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $msg = 'New Login: ' . $new_login . '. New Password: ' . $new_pass;

                $this->email->initialize($config);
                $this->email->from();
                $this->email->to();
                $this->email->subject('Изменены настройки пользователя');
                $this->email->message($msg);
                $this->email->send();
            	Settings::update_admin_creds($new_login, $new_pass);
            }
            
        }
		$data['main_settings'] = Settings::load_main_settings();		
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/main_settings', $data);
		$this->load->view('admin/footer');
	}

	public function contact_settings(){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        if($post){
        	Settings::update_contact_settings($post['facebook'], $post['twitter'], $post['linkedin'], $post['google_plus'], $post['instagram'], $post['main_email'], $post['tel_1'], $post['tel_2']);            
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/contact_settings', $data);
		$this->load->view('admin/footer');
	}

	public function products(){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        if($post || $is_post){
        	/*print '<pre>' . print_r($post, true) . '</pre>'; die();*/
        	$name = $post['name'];
        	$description = $post['description'];
        	Product::add_product($name, $description);
        	redirect('/admin_panel/categories');
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['products'] = Product::load_products();
		$data['categories'] = Product::load_categories();
		/*print '<pre>' . print_r($data['categories'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/products', $data);
		$this->load->view('admin/footer');
	}

	public function categories(){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        if($post || $is_post){
        	/*print '<pre>' . print_r($post, true) . '</pre>'; die();*/
        	$name = $post['name'];
        	$description = $post['description'];
        	Product::add_product_category($name, $description);
        	redirect('/admin_panel/categories');
        }
        
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['categories'] = Product::load_categories();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/categories', $data);
		$this->load->view('admin/footer');
	}

	public function edit_category($id = NULL) {
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();

        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        // Data.
        if ($post || $is_post) {

            $name = $post['name'];
            $description = $post['description'];
            $id = $post['id'];
            Product::update_product_category($name, $description, $id);
            redirect(site_url() . '/admin_panel/categories');
        }
    }

    public function delete_category($id = NULL) {
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        
        Product::delete_product_category($id);
        redirect(site_url() . '/admin_panel/categories');
    }

    public function testimonials(){
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		// CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        if($post || $is_post){
        	//save logo
            if ($_FILES['photo']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $photo = $_FILES['photo']['name'];
                }
            }
        	
        	Testimonial::add_testimonial($post['name'], $post['position'], $post['email'], $post['description'], $photo);
        	redirect(site_url() . '/admin_panel/testimonials');
        	
        }
        
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['testimonials'] = Testimonial::load_all_testimonials();
		/*print '<pre>' . print_r($data['testimonials'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/testimonials', $data);
		$this->load->view('admin/footer');
    }
}
