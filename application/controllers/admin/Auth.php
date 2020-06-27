<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
        parent::__construct();
	}

	public function index(){
        already();
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])){
            $this->form_validation->set_rules('email','E-Mail','required', array('required' => 'Masukkan E-Mail Terdaftar'));
            $this->form_validation->set_rules('pass','Password','required|min_length[4]', array('required' => 'Masukkan Password Terdaftar','min_length' => 'Minimal Password 8 Karakter'));
            if ($this->form_validation->run() != false) {

                $this->load->model('admin/auth_m');
                $cek_email = $this->auth_m->auth_email($post);
                if ($cek_email->num_rows() > 0) {
                    $cek_pass = $this->auth_m->auth_pass($post);
                    if ($cek_pass->num_rows() > 0) {
                        $row = $cek_pass->row();
                        $params = array(
							'userid' => $row->id_admin,
							'username' => $row->username_admin, 
							'level' => $row->role_admin,
							'first_name' => $row->first_name_admin,
							'second_name' => $row->last_name_admin,
							'email' =>  $row->email_admin
						);
						$this->session->set_userdata($params);

						if ($row->role_admin == 1) {
							redirect('admin/dashboard');
						}else{
							redirect('admin/auth/logout');
						}
                    }else{
                        $this->session->set_flashdata('v_mail', $post['email']);
					    $this->session->set_flashdata('v_pass', $post['pass']);
                        $this->session->set_flashdata('pass', 'Maaf Password yang dimasukkan tidak benar !!!');
                        redirect('admin/auth');
                    }
                }else{
                    $this->session->set_flashdata('v_mail', $post['email']);
                    $this->session->set_flashdata('v_pass', $post['pass']);
                    $this->session->set_flashdata('email', 'Maaf E-Mail yang dimasukkan tidak terdaftar !!!');
                    redirect('admin/auth');
                }
            }else{
                $this->load->view('admin/auth/index');
            }
        }else{
            $this->load->view('admin/auth/index');
        }
    }
    
    function logout(){
        $params = array('userid','username','level','first_name', 'second_name','email');
		$this->session->unset_userdata($params);
		redirect('admin/auth');
    }
   
}
