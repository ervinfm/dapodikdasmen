<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        login();
    }

    function index(){
        $this->template->load('admin/template','admin/dashboard');
    }
  
}
?>