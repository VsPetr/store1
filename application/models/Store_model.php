<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

class Store_model extends CI_Model
{
    public function getUser($num,$offset)
    {
        //$this->db->limit('10');
        //$this->db->order_by('data','ASC');
        //$query = $this->db->get('articles',$num,$offset);
        //return $query->result_array();
    }

    public function add_user($data)
    {
        $this->db->insert('users',$data);
    }

    public function check($data)
    {
        $user_name = $data['user_name'];
        $password = $data['hash_password'];
        $query = $this->db->query("SELECT user_name, hash_password FROM users WHERE user_name = '$user_name' and hash_password = '$password'");
        return $query->result_array();
    }
}

?>