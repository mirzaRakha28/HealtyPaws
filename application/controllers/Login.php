<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        if(!$_SESSION['login']){
            redirect("home");
        }
		$this->load->view('user/template/header');
        $this->load->view('user/login');
        $this->load->view('user/template/footer');

	}
	public function action_login(){
		$data = array(
			 "email"=> $this->input->post('your_name'),
			"password"=>md5($this->input->post('your_pass')),
		);
		// $user = $this->Model_user->find_data($data);
		$user = $this->Model_user->find_data($data['email'],'email');
        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            
			if ($user['is_active'] == 1) {
                // cek password
               
                if ($data['password']===$user['password']) {
			        $this->session->set_userdata($data);
					$_SESSION['login'] = false;
                    $_SESSION['id']=$user['id']; 
                    redirect('home');
				    
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('login');
                }
            } else {

                $this->Model_autentifikasi->edit_data(rand(0,99999),$user["id"]);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                $this->session->data("id",$user['id']);
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
	}
    public function logout(){
		$_SESSION['login']= true;
        redirect("");
	}
}
