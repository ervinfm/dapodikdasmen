<?php 

    function login(){
        $ci = &get_instance();
        $id = $ci->session->userdata('userid');
        if(!$id){
            redirect('admin/auth');
        }
    }

    function already(){
        $ci = &get_instance();
        $id = $ci->session->userdata('userid');
        if($id){
            redirect('admin/dashboard');
        }
    }

?>