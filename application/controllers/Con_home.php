<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
//        $this->load->model(array('back_end/mod_category'));
        $this->load->model(array('back_end/mod_product'));
    }

	public function index()
	{

        $data['products'] = $this->mod_product->get_latest_products_six();
        $data['dells'] = $this->mod_product->get_products_category_dell();
        $data['asuses'] = $this->mod_product->get_products_category_asus();
        $data['acers'] = $this->mod_product->get_products_category_acer();
        $data['lenevos'] = $this->mod_product->get_products_category_lenevo();
        $data['macbooks'] = $this->mod_product->get_products_category_macbook();

        $this->load->view('front_end/index',$data);
	}
}
