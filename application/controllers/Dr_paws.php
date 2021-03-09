<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dr_paws extends CI_Controller {
	public function index()
	{
		$data['dokter'] = $this->Model_dokter->get_data();
		$data['operasional'] = $this->Model_operasional->get_data();
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('dr_paws');
        $this->load->view('template/footer');

	}
}
