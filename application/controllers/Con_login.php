<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array('front_end/mod_login'));
        $this->load->model(array('back_end/mod_category'));
    }

    public function index()
    {
        $this->load->view('front_end/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            redirect('con_login/index');
        } else {
            $email = $this->input->post("email");
            $pass = md5($this->input->post("password"));
            $has_account = $this->mod_login->get_account_login($email, $pass);

            $num_users = $this->mod_category->count_users();
            $num_categories = $this->mod_category->count_categories();
            $num_products = $this->mod_category->count_products();
            $this->session->set_userdata('user_id', $has_account->user_id);
            $this->session->set_userdata('user_name', $has_account->user_name);
            $this->session->set_userdata('role_name', $has_account->role_name);
            $this->session->set_userdata('role_name', $has_account->role_name);
            $this->session->set_userdata('num_user', $num_users->num_user);
            $this->session->set_userdata('num_category', $num_categories->num_category);
            $this->session->set_userdata('num_post', $num_products->num_post);

            redirect(base_url());
        }
    }
    public function logout(){

        $this->session->unset_userdata('user_name');
        redirect(base_url());
    }

}
