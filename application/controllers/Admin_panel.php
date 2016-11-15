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
        $data['orders'] = Order::load_all_orders();
        $data['messages'] = Message::load_messages();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
		//views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header');
		$this->load->view('admin/main_menu');
		$this->load->view('admin/home', $data);
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
            $main_name = $post['main_name'];
            //update settings
            Settings::update_main_settings($logo, $favicon, $title, $main_name);
            if(!empty($post['admin_login']) AND !empty($post['admin_pass'])){
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

    public function oneclick(){
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

            Product::save_oneclick($post['one_block'], $post['one_slabs']);
            redirect('/admin_panel/oneclick');
        }

        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['oneclick'] = Product::load_oneclick();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('admin/header');
        $this->load->view('admin/main_header', $data);
        $this->load->view('admin/main_menu');
        $this->load->view('admin/oneclick', $data);
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
//        	print '<pre>' . print_r($post, true) . '</pre>'; die();
        	//save logo
            if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['omg']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }else{
            	$img = '';
            }
            
        	$name = $post['name'];
        	$description = $post['description'];
        	
        	$size = $post['size'];
        	$category = $post['category'];
            $sub_category = $post['block_category'];
            if(isset($post['recommended'])){
                $recommended = 1;
            }else{
                $recommended = 0;
            }
            $pallet_amount = isset($post['pallet_amount']) ? $post['pallet_amount'] : 0;
            $on_pallet_amount = isset($post['on_pallet_amount']) ? $post['on_pallet_amount'] : 0;
        	$id = Product::add_product($name, $description, $img, NULL, $category, $sub_category, $size, $recommended, $pallet_amount, $on_pallet_amount);
        	$cities = City::load_cities();
            foreach ($cities as $city) {

            	Product::save_product_price($id, $city['name'], (isset($post[$city['name']]) ? (int)$post[$city['name']] : 0));
            }

        	redirect('/admin_panel/products');
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['products'] = Product::load_products();
		$data['categories'] = Product::load_categories();
		$data['cities'] = City::load_cities();
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

	public function edit_product($id = NULL) {
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['omg']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }else{
            	$img = $post['old_img'];
            }
            /*print '<pre>' . print_r($post, true) . '</pre>'; die();*/
            $name = $post['name'];
            $description = $post['description'];
            $category = $post['category'];
            $sub_category = $post['block_category'];
            $size = $post['size'];
            $id = $post['id'];
            if(isset($post['recommended'])){
                $recommended = 1;
            }else{
                $recommended = 0;
            }
            $pallet_amount = isset($post['pallet_amount']) ? $post['pallet_amount'] : 0;
            $on_pallet_amount = isset($post['on_pallet_amount']) ? $post['on_pallet_amount'] : 0;
            Product::update_product($name, $description, $img, NULL, $size, $category, $sub_category, $recommended, $pallet_amount, $on_pallet_amount, $id);
            $cities = City::load_cities();
            foreach ($cities as $city) {

            	Product::update_product_price($id, $city['name'], (isset($post[$city['name']]) ? (int)$post[$city['name']] : 0));
            }
            redirect(site_url() . '/admin_panel/products');
        }
    }

    public function delete_product($id = NULL) {
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        
        Product::delete_product($id);
        redirect(site_url() . '/admin_panel/product');
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['omg']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }
        	$name = $post['name'];
        	$description = $post['description'];
        	Product::add_product_category($name, $description, $img);
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['omg']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }else{
            	$img = $post['old_img'];
            }
            $name = $post['name'];
            $description = $post['description'];
            $id = $post['id'];
            Product::update_product_category($name, $description, $img, $id);
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
    public function edit_testimonial($id = NULL) {
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
        	if ($_FILES['photo']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    $photo = $_FILES['photo']['name'];
                }
            }else{
            	$photo = $post['old_photo'];
            }
            $name = $post['name'];
            $position = $post['postion'];
            $email = $post['email'];
            $description = $post['description'];
            $id = $post['id'];
            Testimonial::update_testimonial($name, $positiont, $email, $description, $photo, $id);
            redirect(site_url() . '/admin_panel/testimonials');
        }
    }

    public function delete_testimonial($id = NULL) {
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        
        Testimonial::delete_testimonial($id);
        redirect(site_url() . '/admin_panel/testimonials');
    }

    public function news(){
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
        	/*print '<pre>' . print_r($_FILES, true) . '</pre>'; die();*/
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/img/';
                $uploadfile = $uploaddir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }
        	$name = $post['name'];
        	$content = $post['content'];
        	if($post['status'] == 'on'){
        		$status = 1;
        	}else{
        		$status = 0;
        	}
        	$post = $post['post'];
        	$on_main = $post['on_main'];
        	Articles::add_article($name, $content, $status, $on_main, $post, $img);
        	redirect('/admin_panel/news');
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['news'] = Articles::load_all();
		
		/*print '<pre>' . print_r($data['categories'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/news', $data);
		$this->load->view('admin/footer');
	}
	public function edit_article($id = NULL) {
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/upload/site/';
                $uploadfile = $uploaddir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }else{
            	$img = $post['old_img'];
            }
            $name = $post['name'];
            $content = $post['content'];
            $status = $post['status'];
            $on_main = $post['on_main'];
            $post = $post['post'];
            $id = $post['id'];
            Articles::edit_article($name, $content, $status, $on_main, $post, $img, $id);
            redirect(site_url() . '/admin_panel/news');
        }
    }

    public function delete_article($id = NULL) {
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        
        Articles::delete_article($id);
        redirect(site_url() . '/admin_panel/news');
    }

    public function projects(){
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/img/upload/';
                $uploadfile = $uploaddir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }
            $name = $post['name'];
            $client_name = $post['client_name'];
            $testimonial = $post['testimonial'];
            $description = $post['description'];
            Project::add_project($name, $client_name, $testimonial, $description, $img);
            redirect(site_url() . '/admin_panel/projects');
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['projects'] = Project::load_projects();
		
		/*print '<pre>' . print_r($data['projects'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/projects', $data);
		$this->load->view('admin/footer');
	}

	public function edit_project() {
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
        	if ($_FILES['img']['name']) {
                $uploaddir = base_url().'application/resources/img/upload';
                $uploadfile = $uploaddir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    $img = $_FILES['img']['name'];
                }
            }else{
            	$img = $post['old_img'];
            }
            $name = $post['name'];
            $client_name = $post['client_name'];
            $testimonial = $post['testimonial'];
            $description = $post['description'];
            $id = $post['id'];
            Project::update_project($name, $client_name, $testimonial, $description, $img, $id);
            redirect(site_url() . '/admin_panel/projects');
        }
    }

    public function project_post($id, $status){
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		Project::post_project($id, $status);
        redirect(site_url() . '/admin_panel/projects');		
    }

    public function delete_project($id = NULL) {
    	if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
        
        Project::delete_project($id);
        redirect(site_url() . '/admin_panel/projects');
    }


    public function cities(){
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
        	$code = Translitor::str2url($post['name']);

        	City::add_city($post['name'], $code);
            redirect('/admin_panel/cities');
        }
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['cities'] = City::load_cities();
		
		/*print '<pre>' . print_r($data['projects'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/cities', $data);
		$this->load->view('admin/footer');
	}

	public function delete_city($id = NULL){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		City::delete_city($id);
		redirect('/admin_panel/cities');
	}

	public function seo(){
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
        	Seo_text::update_seo_text($post['content'], $post['id']);
        	redirect('/admin_panel/seo');
        	/*print '<pre>' . print_r($post, true) . '</pre>'; die();*/
        } 
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['seo_texts'] = Seo_text::load_seo_texts();
		$data['meta'] = Seo_text::load_meta_tags();
        $data['news'] = Articles::load_all();
        $data['categories'] = Product::load_categories();
        $data['products']  = Product::load_products();
        $data['faq'] = Seo_text::load_seo_text(4);
        $data['about'] = Seo_text::load_seo_text(5);
//		print '<pre>' . print_r($data['seo_texts'], true) . '</pre>'; die();
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/seo', $data);
		$this->load->view('admin/footer');
	}

    public function add_meta(){
        if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
            redirect('/login/admin_login');
        }
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        if($post || $is_post){
            if(!isset($post['type'])) {
                Seo_text::add_meta_tags($post['meta']);
            }else{
                switch ($post['type']){
                    case 'product':
                        Product::update_meta_product($post['title'], $post['meta'], $post['id']);
                        break;
                    case 'category':
                        Product::update_meta_category($post['title'], $post['meta'], $post['id']);
                        break;
                    case 'articles':
                        Articles::update_meta_articles($post['title'], $post['meta'], $post['id']);
                        break;
                    case 'faq':
                        Seo_text::update_meta_pages($post['title'], $post['meta'], 'faq');
                        break;
                    case 'about':
                        Seo_text::update_meta_pages($post['title'], $post['meta'], 'about');
                        break;
                }
            }
            redirect('/admin_panel/seo');
        }
    }

	public function faq(){
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
        	New_faq::add_question($post['question'], $post['category'], $post['answer']);
        	redirect('/admin_panel/faq');
        }
        
		$data['main_settings'] = Settings::load_main_settings();
		$data['contact_settings'] = Settings::load_contact_settings();
		$data['faq'] = New_faq::load_all();
		
		
		/*print '<pre>' . print_r($data['projects'], true) . '</pre>'; die();*/
		// Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
		$this->load->view('admin/header');
		$this->load->view('admin/main_header', $data);
		$this->load->view('admin/main_menu');
		$this->load->view('admin/faq', $data);
		$this->load->view('admin/footer');
	}

	public function edit_faq() {
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
        	// print '<pre>' . print_r($post, true) . '</pre>'; die();
            New_faq::update_faq($post['question'], $post['category'], $post['answer'], $post['id']);
            redirect('/admin_panel/faq');
        }
    }

    public function delete_faq($id = NULL){
		if(!isset($this->session->userdata['admin_status']) OR $this->session->userdata['admin_status'] != TRUE){
			redirect('/login/admin_login');
		}
		New_faq::delete_faq($id);
		redirect('/admin_panel/faq');
	}
}
