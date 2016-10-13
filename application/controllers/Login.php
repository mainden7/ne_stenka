<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  

    public function admin_login(){
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_get = ($this->input->server('REQUEST_METHOD', TRUE) == 'GET');
        $get = $this->input->get(NULL, TRUE);
        $post = $this->input->post(NULL, TRUE);
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');

        $data = array();
        if($post){
            $login = $post['username'];
            $password = $post['password'];

            $passwordx = sha1($password.'admin');
            $user = Admin::check_password($login);
            if (isset($user['login'])) {
                if ($user['password'] == $passwordx AND $user['login'] == $login) {
                    //set session
                    $this->session->set_userdata('user_id', 1);
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('admin_status', TRUE);

                    redirect('index.php/Admin_panel/index');
                }else{
                    redirect('index.php/Login/admin_login?error=confirm');
                }
            }else{
                redirect('index.php/Login/admin_login?error=exist');
            }
        }

        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        $this->load->view('admin/header');
        $this->load->view('admin/admin_login', $data);
    }

    public function logout(){
          // CodeIgniter logout.
        $this->session->sess_destroy();

        // Redirect.
        redirect(site_url());
    }

    public function forgot_pass(){
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_get = ($this->input->server('REQUEST_METHOD', TRUE) == 'GET');
        $get = $this->input->get(NULL, TRUE);
        $post = $this->input->post(NULL, TRUE);
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        /*print '<pre>' . print_r($post, TRUE) . '</pre>'; die();*/
        if($post){
            if(isset($post['email']) AND !empty($post['email'])){
                $is_email = Users::check_email($post['email']);
                if($is_email == 'TRUE'){
                    redirect('index.php/User/user_login?check=confirm');
                }else{
                    redirect('index.php/User/user_login?check=error');
                }
            }
        }
    }

}