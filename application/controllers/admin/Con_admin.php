<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('back_end/mod_category'));
        $this->load->model(array('back_end/mod_product'));
    }



    public function index()
    {
        $data['products'] = $this->mod_product->get_latest_products_six();
        $this->load->view('back_end/index',$data);
    }

    public function add_category()
    {
        $this->load->view('back_end/add_category');
    }

    public function do_add_category()
    {
        if ($this->input->post('name') != "") {
            $cat_data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            );

            if ($this->mod_category->insert_category($cat_data)) {
                $this->session->set_flashdata('btn_save_message', 'success');
                redirect('admin/con_admin/list_category');
            }
        } else {
            $this->load->view('back_end/index');
        }
    }

    public function list_category()
    {

        $data['categories'] = $this->mod_category->get_categories();
        $this->load->view('back_end/list_category', $data);
    }

    public function edit_category($cat_id)
    {

        $data['category'] = $this->mod_category->edit_category($cat_id);
        $this->load->view('back_end/edit_category', $data);
    }

    public function do_update_category()
    {
        $cat_id = $this->input->post('cat_id');
        if ($this->input->post('name') != "") {
            $cat_data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            );

            if ($this->mod_category->update_category($cat_id, $cat_data)) {
                $this->session->set_flashdata('btn_update_message', 'success');
                redirect('admin/con_admin/list_category');
            }

        } else {
            $this->load->view('back_end/index');
        }
    }

    public function delete_category($cat_id)
    {
        $isDelete = $this->mod_category->delete_category($cat_id);
        if ($isDelete) {
            $this->session->set_flashdata('isDelete', 'success');
            redirect('admin/con_admin/list_category');
        }
    }

    public function add_product()
    {
        $data['available_categories'] = $this->mod_category->get_categories_available();
        $this->load->view('back_end/add_product', $data);
    }

    public function do_add_product()
    {
        if ($this->input->post('name') != "") {

            $config['upload_path'] = './templates/front_end/images/product_images/';
            $config['allowed_types'] = 'jpg|jpeg|gif|png';
            $config['remove_spaces'] = true;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                redirect('admin/con_admin/add_product');
            } else {
                $file_info = $this->upload->data();
                $pro_data = array(
                    'name' => $this->input->post('name'),
                    'user_id' => $this->session->userdata('user_id'),
                    'posted_by' => $this->session->userdata('user_name'),
                    'category_id' => $this->input->post('category'),
                    'price' => $this->input->post('price'),
                    'description' => $this->input->post('description'),
                    'image' => $file_info['file_name'],
                    'status' => $this->input->post('status')
                );

                if ($this->mod_product->insert_product($pro_data)) {
                    $this->session->set_flashdata('btn_save_product', 'success');
                    redirect('admin/con_admin/list_product');
                } else {
                    $this->load->view('back_end/index');
                }
            }

        }
    }

    public function list_product()
    {
        $data['products'] = $this->mod_product->get_products();
        $this->load->view('back_end/list_product', $data);
    }

    public function delete_product($pro_id)
    {
        $isDelete = $this->mod_product->delete_product($pro_id);
        if ($isDelete) {
            $this->session->set_flashdata('isDelete', 'success');
            redirect('admin/con_admin/list_product');
        }
    }

    public function edit_product($pro_id)
    {
        $data['categories'] = $this->mod_category->get_categories_available();
        $data['product'] = $this->mod_product->edit_products($pro_id);
        $this->load->view('back_end/edit_product', $data);
    }

    public function do_update_product()
    {
        if ($this->input->post('name') != "") {
            $pro_id = $this->input->post('pro_id');
            $config['upload_path'] = './templates/front_end/images/product_images/';
            $config['allowed_types'] = 'jpg|jpeg|gif|png';
            $config['remove_spaces'] = true;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $file_info = $this->upload->data();
            $pro_data = array(
                'name' => $this->input->post('name'),
                'user_id' => $this->session->userdata('user_id'),
                'modified_by' => $this->session->userdata('user_name'),
                'category_id' => $this->input->post('category'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description'),
                'updated_date' => date("Y-m-d H:m:s"),
                'image' => $file_info['file_name'],
                'status' => $this->input->post('status')
            );

            if ($this->mod_product->update_product($pro_id, $pro_data)) {
                $this->session->set_flashdata('btn_update_product', 'success');
                redirect('admin/con_admin/list_product');
            } else {
                $this->load->view('back_end/index');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_name');
        redirect(base_url());
    }
}