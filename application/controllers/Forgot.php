<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
	public function index()
	{
		if(isset($_SESSION['id'])){
            if($_SESSION['id']!=0){
                redirect("home");
            }
			
        }
		$this->load->view('user/template/header');
        $this->load->view('user/forgot');
        $this->load->view('user/template/footer');

	}
    public function action_forgot(){
        $password1 = $this->input->post('password');
        $password2 = $this->input->post('password2');
        $email = $this->input->post('email');
        $id = $this->Model_user->find_data($email,"email");
        if($password1 == $password2){
            redirect('forgot');
        }else {
            $pass = array(
                "password" => md5($password1), 
            );
            $this->Model_user->update($pass,$id['id']);
            $this->sendEmail($id['id'],rand(0,99999));
            redirect("login");
        }

        
    }
    public function sendEmail($email,$rand){
		$token["rand"] =$rand;
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'cshealthypaws@gmail.com';
		$config['smtp_pass']    = 'healthypaws1234';
		$config['charset']    = 'utf-8';
		
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not      
		$data =$this->Model_user->find_data($email,'id');	
		$_SESSION['id'] = $data['id'];
		$this->load->library('email',$config);
		$this->email->from('cshealthypaws@gmail.com', 'healthypaws');
		$this->email->to($data['email']);

		$this->email->subject('Email Test');
		$temp = $this->load->view('template_email/email',$token,TRUE);
		$this->email->message($temp);

		$this->email->send();
		
		if(!$this->Model_autentifikasi->find_data($email)){
			$this->Model_autentifikasi->add_data($rand,$email);
			redirect("auth");
		}else{
			$this->Model_autentifikasi->edit_data($rand,$email);
			redirect("auth");
		}
		redirect("auth");
	}
}
