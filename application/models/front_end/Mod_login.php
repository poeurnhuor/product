<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mod_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_account_login($email, $pass)
    {
        return $this->db->select('
                                    tbl_users.email, 
                                    tbl_users.password, 
                                    CONCAT(tbl_users.first_name," ",tbl_users.last_name) as user_name , 
                                    tbl_users.id as user_id, 
                                    tbl_roles.name as role_name
                                ')
            ->from('tbl_users')
            ->join('tbl_roles','tbl_roles.id = tbl_users.role_id')
            ->where('tbl_users.email', $email)
            ->where('tbl_users.password', $pass)
            ->get()->row();
    }

}