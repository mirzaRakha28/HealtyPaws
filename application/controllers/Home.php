<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

// 		$this->load->library('email',$config);
// 		$this->email->from('cshealthypaws@gmail.com', 'healthypaws');
// 		$this->email->to('mirzarakhadwipradana28@gmail.com');

// 		$this->email->subject('Email Test');
// 		$this->email->message('Testing the email class.');

// 		$this->email->send();
// die();
		$this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');

	}
}
