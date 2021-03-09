<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!$_SESSION['login']){
            redirect("home");
        }
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('user/register');
        $this->load->view('user/template/footer');
	}
	public function action_register(){
		$data = array(
			"email"=> $this->input->post('email'),
		   "password"=>$this->input->post('password'),
		   "name"=> $this->input->post('name'),
		   "password"=>md5($this->input->post('pass')),
		   "telephone" =>$this->input->post('phone'),
		   "alamat"=>$this->input->post('address'),
	   );
	   $repass= md5($this->input->post('re_pass')); 
	   if($data["password"] != $repass){
			redirect("register");
	   
		}else{
			$set =$this->Model_user->find_data($data['email'],'email');
			if(!$set){
				$this->Model_user->add_data($data);
				$set = $this->Model_user->find_data($data['email'],'email');
				$this->sendEmail($set['id'],rand(0,99999));
				redirect("login");
			}
			else{
				
				redirect("register");
			}
	
	   }
	}
	public function sendEmail($email,$rand){
		$token["rand"] =$rand;
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'cshealthypaws@gmail.com';
		$config['smtp_pass']    = 'healthypaws123';
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
