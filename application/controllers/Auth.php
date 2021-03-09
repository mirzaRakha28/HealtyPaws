<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('user/template/header');
        $this->load->view('user/auth');
        $this->load->view('user/template/footer');

	}
	public function action_otp(){
		$data = array(
			 "otp"=> $this->input->post('otp'),
			
		);
		$user = $this->Model_autentifikasi->find_data($_SESSION['id']);
		
		 if($user['code']==$data['otp']){
			$user = $this->Model_user->find_data($_SESSION['id'],"id");
			
			$user['is_active'] = "1";
			$this->Model_user->edit_data($user);
		}
		redirect('login');
	}
        
}
