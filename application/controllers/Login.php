<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        if(isset($_SESSION['id'])){
            if($_SESSION['id']!=0){
                redirect("home");
            }
        }
		$this->load->view('user/template/header');
        $this->load->view('user/login');
        $this->load->view('user/template/footer');

	}
	public function action_login(){
		$data = array(
			 "email"=> $this->input->post('email'),
			"password"=>md5($this->input->post('pass')),
		);
		// $user = $this->Model_user->find_data($data);
		$user = $this->Model_user->find_data($data['email'],'email');
        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            
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
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
	}
    public function logout(){
		$_SESSION['id']= 0;
        redirect("");
	}
}
