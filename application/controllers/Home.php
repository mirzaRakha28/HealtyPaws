<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		// var_dump($_SESSION['id']);die();	
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('home');
        $this->load->view('template/footer');

	}
}
