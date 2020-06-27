<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_m extends CI_Model {

    function get($id = null){
        $this->db->from('tbl_provinsi');
        if($id != null){
            $this->db->where('id_provinsi');
        }else{
            $this->db->order_by('id_provinsi','ASC');
        }
        $query = $this->db->get();
        return $query;
    }

}