<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dr_paws extends CI_Controller {
	public function index()
	{
		$data['dokter'] = $this->Model_dokter->get_data();
		$data['operasional'] = $this->Model_operasional->get_data();
		// var_dump($data['dokter']);
		// var_dump($data['operasional']);die();
		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$data['notification'] =  $this->Model_order->find_data("id_user",$_SESSION['id']);
				if($data['notification']){
					foreach($data['notification'] as $notif){
						$sTime = strtotime($notif->tanggal);
						$eTime = strtotime(date("Y-m-d H:i:s"));
						$numberDays = abs($sTime-$eTime)/86400;
						if($numberDays > 0.020833333333333){
							$notif->aktif = "Expired";
						}else{
							$notif->aktif = "Aktif";
						}
					}
				}
				$this->load->view('template/header',$data);
				$this->load->view('dr_paws',$data);
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('dr_paws',$data);
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('dr_paws',$data);
			$this->load->view('template/footer');
		}
	}
}
