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

		// $config['protocol']    = 'smtp';
        // $config['smtp_host']    = 'ssl://smtp.gmail.com';
        // $config['smtp_port']    = '465';
        // $config['smtp_timeout'] = '7';
        // $config['smtp_user']    = 'cshealthypaws@gmail.com';
        // $config['smtp_pass']    = 'healthypaws123';
        // $config['charset']    = 'utf-8';
        // $config['newline']    = "\r\n";
        // $config['mailtype'] = 'text'; // or html
        // $config['validation'] = TRUE; // bool whether to validate email or not      

		// $this->load->library('email',$config);
		// $this->email->from('cshealthypaws@gmail.com', 'healthypaws');
		// $this->email->to('mirzarakhadwipradana28@gmail.com');

		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');

		// $this->email->send();
		$this->load->view('user/template/header');
        $this->load->view('user/register');
        $this->load->view('user/template/footer');

	}
	public function action_register(){
		$data = array(
			"email"=> $this->input->post('email'),
		   "password"=>$this->input->post('password'),
		   "name"=> $this->input->post('name'),
		   "password"=>$this->input->post('pass'),
		   "re-pass"=> $this->input->post('re-pass'),
		   "alamat"=>$this->input->post('alamat'),
	   );
	   if($data["password"] != $data['re-pass']){
		redirect("register");
	   }else{
		   if($this->Model_user->find_data($data)){
			   redirect("register");
		   }else{
			   
		   }
	   }
	}
}
