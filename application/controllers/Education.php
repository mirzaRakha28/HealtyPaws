<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
	public function index()
	{
		$data['education'] = $this->Model_education->get_data();
		
		
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('list_education');
        $this->load->view('template/footer');

	}
	public function artikel($id){
		$data['education'] = $this->Model_education->find_id($id);
		
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('artikel');
        $this->load->view('template/footer');
	}
}
