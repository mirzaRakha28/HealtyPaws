<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dokter extends CI_Controller {
	public function index()
	{
		// die(date("l"));
		$data['dokter'] = $this->Model_dokter->get_data();
		$data['operasional'] = $this->Model_operasional->get_data();
		
	
		$this->load->view('template_dokter/header');
        $this->load->view('admin_dokter/chat');
        $this->load->view('template_dokter/footer');

	}
}
