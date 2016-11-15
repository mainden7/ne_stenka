<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        /*print '<pre>' . print_r($this->session, true) . '</pre>'; die();*/
        $data = array();
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['news'] = Articles::load_all();
        $data['testimonials'] = Testimonial::load_all_testimonials();
        $data['categories'] = Product::load_categories();
        $data['products'] = Product::load_products();
        $data['page'] = 'home';
        $page_id = 1;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
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

    public function blocks($block_category = NULL)
    {
        if(isset($block_category)) {

            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = 'blocks';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();
            if($block_category < 1 OR $block_category > 4){
                show_404();
            }
            if($block_category == 1){
                $block_category = 'Стеновые блоки';
            }elseif($block_category == 2){
                $block_category = 'Пазогребневые блоки';
            }elseif($block_category == 3){
                $block_category = 'Брусовые перемычки';
            }elseif($block_category == 4){
                $block_category = 'Перегородочные блоки';
            }

            $data['categories'] = Product::load_categories(1);
            $data['proposal_category'] = Product::load_categories(3);
            $data['blocks_category'] = $block_category;
            $data['products'] = Product::load_block_by_category($block_category);
            $data['proposal_products'] = Product::load_product_by_category($data['proposal_category']['name']);
            $data['title'] = $data['categories']['title'];
            $data['meta'] = $data['categories']['meta'];
            $data['page'] = 'blocks';
            $data['oneclick'] = Product::load_oneclick();
            $page_id = 2;
            $data['seo_text'] = Seo_text::load_seo_text($page_id);
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
        }else{
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = 'blocks';
            $data['proposal_category'] = Product::load_categories(3);
            $data['categories'] = Product::load_categories(1);
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();
            $data['products'] = Product::load_products();
            $data['blocks_category'] = $data['categories']['name'];
            $data['oneclick'] = Product::load_oneclick();
            $data['title'] = $data['categories']['title'];
            $data['meta'] = $data['categories']['meta'];
            $data['proposal_products'] = Product::load_product_by_category($data['proposal_category']['name']);
            $data['page'] = 'blocks';

            $page_id = 2;
            $data['seo_text'] = Seo_text::load_seo_text($page_id);
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
    }

    public function faq($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'faq';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['page'] = 'faq';
        $page_id = 3;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
         $data['title'] = $data['seo_text']['title'];
        $data['meta'] = $data['seo_text']['meta'];
        $data['faq'] = New_faq::load_all();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/faq');
        $this->load->view('user/do_not_find');
        $this->load->view('user/seotext', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function about($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'about';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['testimonials'] = Testimonial::load_all_testimonials();
        $data['projects'] = Project::load_projects();
        $data['page'] = 'about';
        $page_id = 4;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
        $data['title'] = $data['seo_text']['title'];
        $data['meta'] = $data['seo_text']['meta'];
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/about_header', $data);
        $this->load->view('user/who_we_are', $data);
        $this->load->view('user/our_projects', $data);
        $this->load->view('user/consultation', $data);
        $this->load->view('user/sertificates', $data);
        $this->load->view('user/testimonials', $data);
        $this->load->view('user/contact_director2', $data);
        $this->load->view('user/seotext', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function contacts($user_id = NULL)
    {
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
        $this->load->view('user/map');
        $this->load->view('user/footer', $data);
    }

    public function product($id = NULL)
    {
        if (isset($id)) {
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
            $data['product'] = Product::load_products($id);
            $data['additional_products'] = Product::load_products();
            $data['title'] = $data['product']['title'];
            $data['meta'] = $data['product']['meta'];
            if (!isset($data['product']) OR empty($data['product'])) {
                show_404();
            }
            if ($data['product']['category'] != 'Блоки') {
                show_404();
            }
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/product_main', $data);
            $this->load->view('user/additional_proposal', $data);
            $this->load->view('user/do_not_find', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        } else {
            $id = 1;
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
            $data['product'] = Product::load_product_by_category('Блоки');
            $data['additional_products'] = Product::load_products();
            $data['products'] = Product::load_products();
            $data['title'] = $data['product'][0]['title'];
            $data['meta'] = $data['product'][0]['meta'];

            if (!isset($data['product']) OR empty($data['product'])) {
                show_404();
            }


//            print '<pre>' . print_r($data['product'], true) . '</pre>'; die();
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/product_default', $data);
            $this->load->view('user/additional_proposal', $data);
            $this->load->view('user/do_not_find', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        }
    }
    public function slabs($id = NULL)
    {


            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = 'slabs';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();

            $data['categories'] = Product::load_categories(2);
        $data['proposal_category'] = Product::load_categories(3);
        $data['blocks_category'] = $data['categories']['name'];
            $data['products'] = Product::load_block_by_category($data['blocks_category']);
        $data['proposal_products'] = Product::load_product_by_category($data['proposal_category']['name']);
        $data['oneclick'] = Product::load_oneclick();
//print '<pre>' . print_r($data['proposal_products'], true) . '</pre>'; die();
            $data['title'] = $data['categories']['title'];
            $data['meta'] = $data['categories']['meta'];
            $data['page'] = 'slabs';
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/slabs_main', $data);
            $this->load->view('user/instruments', $data);
            $this->load->view('user/contact_director', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);

    }

    public function instruments($user_id = NULL)
    {
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
        $data['products'] = Product::load_products();
        $data['categories'] = Product::load_categories(3);
        $data['title'] = $data['categories']['title'];
        $data['meta'] = $data['categories']['meta'];
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

    public function news_article($id = NULL){
        if(isset($id)) {
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
            $data['articles'] = Articles::load_all();
            $data['article'] = Articles::load_article($id);
            $data['title'] = $data['article']['title'];
            $data['meta'] = $data['article']['meta'];
            $data['article_id'] = $id;
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/article_main', $data);
            $this->load->view('user/other_articles', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        }else{
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
            $data['articles'] = Articles::load_all();

            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/articles', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        }
    }

    public function cart($user_id = NULL)
    {
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

        if (isset($this->session->userdata['items'])) {
            $added_items = $this->session->userdata['items'];
        } else {
            $added_items = array();
        }
        /*print '<pre>' . print_r($added_items, true) . '</pre>'; die();*/
        $product_id = 0;
        $product = array();
        foreach ($added_items as $item_id => $item_count) {

            $product[$item_id] = Product::load_products($item_id);
            $product[$item_id]['quantity'] = $item_count;
        }
//        print '<pre>' . print_r($product, true) . '</pre>'; die();
        if (empty($product)) {
            $data['empty_cart_title'] = 'В корзине нет покупок';
        }
        $data['products'] = $product;
        $data['categories'] = Product::load_categories();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function cart_next($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);

        $data = array();
        $data['active'] = '';
        $data['title'] = '';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['products'] = $get;
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/cart_next', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function post_order()
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        if ($post OR $is_post) {
            $data['contact_settings'] = Settings::load_contact_settings();
            $email = $data['contact_settings']['main_email'];
            $products = substr($post['products'], 0, -1);
            $products = explode('/', $products);
            foreach ($products as $key => $value) {
                $pr = explode(',', $value);

                $products[$key] = $pr;
            }
            $id = Order::save_order($post['name'], $post['tel'], $post['email'], $post['region'], $post['district'], $post['city'], $post['street'], $post['house'], $post['corp'], $post['comments'], $post['delivery_date']);

            $order_msg = '';
            foreach ($products as $product) {
                Order::save_order_items($id, $product[0], $product[1]);
                # code...
                $product_ordered = Product::load_products($product[0]);
                $product_quantity = $product[1];
                $order_msg .= $product_ordered['name'] . ' в количестве: ' . $product_quantity . '<br>';
            }
            /*print '<pre>' . print_r($order_msg, true) . '</pre>'; die();*/

            $this->load->library('email');
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';

            $subject = 'Новый заказ';
            $msg = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                    	<h3>Главная информация</h3>
                        <p>Имя: ' . $post['name'] . '</p>
                        <p>Телефон: ' . $post['tel'] . '</p>                       
                        <p>Email: ' . $post['email'] . '</p>
                        <h3>Адрес</h3>
                        <p>Регион: ' . $post['region'] . '</p>
                        <p>Район: ' . $post['district'] . '</p>
                        <p>Район: ' . $post['city'] . '</p>
                        <p>Улица: ' . $post['street'] . '</p>
                        <p>Дом: ' . $post['house'] . '</p>
                        <p>Корпус: ' . $post['corp'] . '</p> 
                        <p>Дата доставки: ' . $post['date'] . '</p> 
                        <p>Комментарий: ' . (isset($post['comments']) ? $post['commetns'] : '') . '</p> 
                        <p>Заказ: ' . $order_msg . '</p> 
                    </body>
                </html>';

            $this->email->initialize($config);
            $this->email->from('no-reply@ne_stenka.com');
            $this->email->to('denis.sa@core-tech.ru');
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();


        }
    }

    public function instrument_product($id = NULL)
    {
        if (isset($id)) {
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

            $data['product'] = Product::load_products($id);
            $data['title'] = $data['product']['title'];
            $data['meta'] = $data['product']['meta'];
            if (!isset($data['product']) OR empty($data['product'])) {
                show_404();
            }
            if ($data['product']['category'] != 'Инструменты') {
                show_404();
            }
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);

            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/instrument_product', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        } else {
            show_404();
        }

    }

    public function set_city()
    {
        $this->session->set_userdata('user_city', $_POST['city']);
    }

    public function add_to_cart($id = NULL, $where = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);

        if ($post) {
//			print '<pre>' . print_r($post, TRUE) . '</pre>'; die();
            //if something is in cart - load from session and save to array, if no set and empty array
            if (isset($this->session->userdata['items'])) {
                $added_items = $this->session->userdata['items'];
            } else {
                $added_items = array();
            }
            //as there form with unique name we connect it with word 'quantity' and id of product
            $quantity = 'quantity' . $post['id'];
            if (isset($post[$quantity]) OR !empty($post[$quantity])) {
                $quantity = $post[$quantity];
            } else {
                $quantity = $post['quantity'];
            }


            $id = $post['id'];
            //where to go after saving
            $path = $post['path'];
            //add to our array needed amount of current product
            if (!isset($added_items[$id])) {
                $added_items[$id] = $quantity;
            } else {
                $added_amount = $added_items[$id];
                $added_items[$id] = $quantity + $added_amount;
            }
            /*print '<pre>' . print_r($added_items, true) . '</pre>'; die();*/
            //reset session before adding items
            $this->session->set_userdata('items', null);
            //add to session
            $this->session->set_userdata('items', $added_items);

            redirect($path);
        } else {
            show_404();
        }
    }

    public function delete_from_cart($id = NULL)
    {

        if (isset($id)) {
            $items = $this->session->userdata['items'];
            unset($items[$id]);
            $this->session->set_userdata('items', $items);
            redirect('/user/cart');
            /*print '<pre>' . print_r($items, true) . '</pre>'; die();*/
        } else {
            show_404();
        }
    }

    public function send_message(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);

        if($post || $is_post){
            
            $this->load->library('email');
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';

            $subject = $post['subject'];
            $msg = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                    	<h3>Главная информация</h3>
                        <p>Имя: ' . $post['name'] . '</p>
                        <p>Телефон: ' . $post['tel'] . '</p> 
                        <p>Комментарий: ' . (isset($post['comments']) ? $post['comments'] : '') . '</p> 
                    </body>
                </html>';

            $this->email->initialize($config);
            $this->email->from('no-reply@ne_stenka.com');
            $this->email->to('denis.sa@core-tech.ru');
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
            Message::save_message($post['name'], $post['tel'], $post['comments'], $subject);
        }else{
            show_404();
        }

    }
}