<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	function __construct(){
        parent::__construct();
        login();
        $this->load->model('admin/dapok/sekolah_m');
    }

    function index(){
        $data['row'] = $this->sekolah_m->get();
        $this->template->load('admin/template','admin/dapok/sekolah/index', $data);
    }
  
}
?>