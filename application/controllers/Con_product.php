<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_product extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array('back_end/mod_category'));
        $this->load->model(array('back_end/mod_product'));
        }

    public function detail($cat_id, $pro_id)
    {
        $data['product'] = $this->mod_product->get_products_detail($pro_id);
        $data['related_products'] = $this->mod_product->get_products_related($cat_id);
        $this->load->view('front_end/detail',$data);
    }

    public function all_products(){
        $data['all_products'] = $this->mod_product->get_all_products();
        $this->load->view('front_end/all_product',$data);
    }

    public function dell_products(){
        $data['dell_products'] = $this->mod_product->get_dell_products();
        $this->load->view('front_end/dell_product',$data);
    }

    public function asus_products(){
        $data['asus_products'] = $this->mod_product->get_asus_products();
        $this->load->view('front_end/asus_product',$data);
    }

    public function acer_products(){
        $data['acer_products'] = $this->mod_product->get_acer_products();
        $this->load->view('front_end/acer_product',$data);
    }

    public function lenevo_products(){
        $data['lenevo_products'] = $this->mod_product->get_lenevo_products();
        $this->load->view('front_end/lenevo_product',$data);
    }

    public function macbook_products(){
        $data['macbook_products'] = $this->mod_product->get_macbook_products();
        $this->load->view('front_end/macbook_product',$data);
    }
}