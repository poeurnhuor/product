<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mod_category extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    // Count available users, categories and posts

    public function count_users()
    {
        $this->db->select(' COUNT(*) AS num_user')
            ->from('tbl_users')
            ->where('status',1);
        return $this->db->get()->row();
    }

    public function count_categories()
    {
        $this->db->select(' COUNT(*) AS num_category')
            ->from('tbl_categories')
            ->where('status',1);
        return $this->db->get()->row();
    }

    public function count_products()
    {
        $this->db->select(' COUNT(*) AS num_post')
            ->from('tbl_products')
            ->where('status',1);
        return $this->db->get()->row();
    }
    // End count available users, categories and posts


    public function insert_category($data)
    {
        return $this->db->insert('tbl_categories', $data);
    }

    public function get_categories(){
        return $this->db->get('tbl_categories');
    }

    public function delete_category($cat_id){
       return $this->db->delete('tbl_categories', array('id' => $cat_id));
    }

    public function edit_category($cat_id){
         $this->db->where('id', $cat_id);
         return $this->db->get('tbl_categories')->row();
    }

    public function update_category($cat_id, $data){
        $this->db->where('id', $cat_id);
        return $this->db->update('tbl_categories', $data);
    }

    public function get_categories_available(){
        $this->db->where('status',1);
        return $this->db->get('tbl_categories');
    }

}