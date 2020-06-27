<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

	function auth_email($post){
        $this->db->from('tbl_admin');
        $this->db->where('email_admin', $post['email']);
        $query = $this->db->get();
        return $query;
    }

    function auth_pass($post){
        $this->db->from('tbl_admin');
        $this->db->where('password_admin', sha1($post['pass']));
        $query = $this->db->get();
        return $query;
    }
}

?>