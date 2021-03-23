<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'C:/xampp/htdocs/healtypaws/vendor/autoload.php';
class Home extends CI_Controller {
	public function index()
	{
		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				$data['chat']= $this->db->order_by('id','ASC')->get('message')->result();
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$data['notification'] =  $this->Model_order->find_data("id_user",$_SESSION['id']);
				$data['list_chat']= $this->Model_partisipan->find_data('id_user',$_SESSION['id']);
				$data['dokter'] = $this->Model_dokter->get_data();
				// var_dump($data['dokter']);die();
				foreach($data['list_chat'] as $lc){	
				foreach($data['dokter'] as $us){
					if($lc->id_dokter == $us->id){
						$lc->{"gambar"}=$us->image;
						$lc->{"user"}=$us->name;
					}
				}
				}
				// var_dump($data['list_chat']);die();	
				if($data['notification']){
					foreach($data['notification'] as $notif){
						$sTime = strtotime($notif->tanggal);
						$eTime = strtotime(date("Y-m-d H:i:s"));
						$numberDays = abs($sTime-$eTime)/86400;
						if($numberDays > 0.020833333333333){
							$notif->aktif = "Expired";
						}else if($notif->active){
							$notif->aktif = "Belum Membayar";
						}else{
							$notif->aktif = "Aktif";
						}
					}
				}
				$this->load->view('template/header',$data);
				$this->load->view('home');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('home');
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('home');
			$this->load->view('template/footer');
		}
		
	}
	public function chat(){
		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				$data['chat']= $this->db->order_by('id','ASC')->get('message')->result();
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$data['notification'] =  $this->Model_order->find_data("id_user",$_SESSION['id']);
				$data['list_chat']= $this->Model_partisipan->find_data('id_user',$_SESSION['id']);
				$data['dokter'] = $this->Model_dokter->get_data();
				// var_dump($data['dokter']);die();
				foreach($data['list_chat'] as $lc){	
				foreach($data['dokter'] as $us){
					if($lc->id_dokter == $us->id){
						$lc->{"gambar"}=$us->image;
						$lc->{"user"}=$us->name;
					}
				}
				}
				// var_dump($data['list_chat']);die();	
				if($data['notification']){
					foreach($data['notification'] as $notif){
						$sTime = strtotime($notif->tanggal);
						$eTime = strtotime(date("Y-m-d H:i:s"));
						$numberDays = abs($sTime-$eTime)/86400;
						if($numberDays > 0.020833333333333){
							$notif->aktif = "Expired";
						}else if($notif->active){
							$notif->aktif = "Belum Membayar";
						}else{
							$notif->aktif = "Aktif";
						}
					}
				}
				$this->load->view('template/header',$data);
				$this->load->view('chat');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('home');
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('home');
			$this->load->view('template/footer');
		}
	}
	public function chat2(){
		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$data['notification'] =  $this->Model_order->find_data("id_user",$_SESSION['id']);
				$data['list_chat']= $this->Model_partisipan->find_data('id_user',$_SESSION['id']);
				$data['dokter'] = $this->Model_dokter->get_data();

				// $data['user'] =  $this->Model_user->get_data();
				$data['chat'] =$this->db->order_by('id','ASC')->get_where('message',['id_participant'=>$_GET['id'],'id_dokter'=>$_GET['id_dokter'],'id_user'=>$_SESSION['id']])->result(); 
				// // $data['name']
				
				// foreach($data['chat'] as $ct){	
				// 	foreach($data['user'] as $us){
				// 		if($ct->id_user == $us->id){
				// 			$ct->{"gambar_user"}=$us->gambar;
				// 			$ct->{"user"}=$us->name;
				// 			$ct->{"dokter"}=$data["dokter"]["name"];
				// 			$ct->{"gambar_dokter"}=$data["dokter"]["image"];
				// 			$data['name'] = $us->name;
				// 			$data['gambar'] = $us->name;
				// 		}
				// 	}
					
				// }
				
				// var_dump($data['dokter']);die();
				foreach($data['list_chat'] as $lc){	
				foreach($data['dokter'] as $us){
					if($lc->id_dokter == $us->id){
						$lc->{"gambar"}=$us->image;
						$lc->{"user"}=$us->name;
					}
				}
				}
				// var_dump($data['list_chat']);die();	
				if($data['notification']){
					foreach($data['notification'] as $notif){
						$sTime = strtotime($notif->tanggal);
						$eTime = strtotime(date("Y-m-d H:i:s"));
						$numberDays = abs($sTime-$eTime)/86400;
						if($numberDays > 0.020833333333333){
							$notif->aktif = "Expired";
						}else if($notif->active){
							$notif->aktif = "Belum Membayar";
						}else{
							$notif->aktif = "Aktif";
						}
					}
				}
				$this->load->view('template/header',$data);
				$this->load->view('chat2');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template/header2');
				$this->load->view('home');
				$this->load->view('template/footer');	
			}
		}else{
			$this->load->view('template/header2');
			$this->load->view('home');
			$this->load->view('template/footer');
		}
	}
	public function message(){
		$data=array(
			'id_user'=>$this->input->post('id_user'),
			'id_dokter'=>$this->input->post('id_dokter'),
			"type"=>$this->input->post('type'),
			"message"=>$this->input->post('pesan'),
			'date'=>date("Y-m-d H:i:s"),
			'id_participant'=>$this->input->post('id_participant')
		);
		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		  );
		  $pusher = new Pusher\Pusher(
			'0ae2082ac6b3c6c4118b',
			'2be8a6e5fc203136bbde',
			'1173290',
			$options
		  );

		$data =  $this->db->insert('message',$data);
		
		if($data){
			$pusher->trigger('my-channel', 'my-event', $data);
			$push= $this->db->order_by('id', 'ASC');	
			$push = $this->db->order_by('id','ASC')->get_where('message',['id_participant'=>$this->input->post('id_participant')])->result();
			foreach($push as $key){
			  $data_pusher[] =$key;
		  } 
			$pusher->trigger('my-channel', 'my-event', $data_pusher);
		}
		
	}
	
}
