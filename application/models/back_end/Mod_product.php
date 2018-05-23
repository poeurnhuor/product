<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mod_product extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_product($data)
    {
        return $this->db->insert('tbl_products', $data);
    }

    public function get_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_products.status AS pro_status,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id');
        return $this->db->get();
    }

    public function edit_products($pro)
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_products.status AS pro_status,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.id', $pro);
        return $this->db->get()->row();
    }

    public function update_product($pro_id, $data){
        $this->db->where('id', $pro_id);
        return $this->db->update('tbl_products', $data);
    }

    public function delete_product($pro_id){
        return $this->db->delete('tbl_products', array('id' => $pro_id));
    }

    public function get_latest_products_six()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.status AS pro_status,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->order_by('tbl_products.id','DESC');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_category_dell()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name', 'dell');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_category_asus()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name', 'asus');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_category_acer()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name', 'acer');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_category_lenevo()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name', 'lenevo');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_category_macbook()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name           	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name', 'macbook');
        $this->db->limit(6);
        return $this->db->get();
    }

    public function get_products_detail($pro_id)
    {
        $this->db->select('
                           tbl_products.name,
                           tbl_products.price,
                           tbl_products.description,
                           tbl_products.image       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.id',$pro_id)
            ->where('tbl_products.status',1)
            ->order_by('tbl_products.id','DESC');
        return $this->db->get()->row();
    }

    //Show Product related with Categories
    public function get_products_related($cat_id)
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_categories.id',$cat_id)
            ->where('tbl_products.status',1)
            ->order_by('tbl_products.id','DESC');
        $this->db->limit(6);
        return $this->db->get();
    }
    // End show Product related with Categories

    public function get_all_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

    public function get_dell_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name','dell')
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

    public function get_asus_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name','asus')
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

    public function get_acer_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name','acer')
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

    public function get_lenevo_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name','lenevo')
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

    public function get_macbook_products()
    {
        $this->db->select('
                           tbl_products.id AS pro_id,
                           tbl_products.name AS pro_name,
                           tbl_products.price,
                           tbl_products.description AS pro_description,
                           tbl_products.image,
                           tbl_categories.id AS cat_id,
                           tbl_categories.name AS cat_name       	
                          ')
            ->from('tbl_products')
            ->join('tbl_categories','tbl_categories.id = tbl_products.category_id')
            ->where('tbl_products.status',1)
            ->where('tbl_categories.name','macbook')
            ->order_by('tbl_products.id','DESC');
        return $this->db->get();
    }

}