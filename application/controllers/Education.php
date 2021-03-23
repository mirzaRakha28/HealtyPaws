<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
	public function index()
	{
		$data['education'] = $this->Model_education->get_data();
		
		
		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$this->load->view('template/header',$data);
				$this->load->view('list_education');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('list_education');
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('list_education');
			$this->load->view('template/footer');
		}
	}
	public function artikel($id){
		$data['education'] = $this->Model_education->find_id($id);
		
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
				$this->load->view('artikel');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('artikel');
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('artikel');
			$this->load->view('template/footer');
		}
	}
}
