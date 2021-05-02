<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require realpath('vendor/autoload.php');

class Admin_dokter extends CI_Controller {
	public function index()
	{
	   // echo realpath('vendor/autoload.php');die();
		if(isset($_SESSION['id_dokter'])){
            if($_SESSION['id_dokter']!=0){
                redirect("home");
            }
        }
        $this->load->view('admin_dokter/login');
	}
	public function profil(){
		if(isset($_SESSION['id_dokter'])){
            if($_SESSION['id_dokter']!=1){
                redirect('admin_dokter');
            }else{
				$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
				$data['praktek']= $this->Model_operasional->find_dataa('id_dokter',$_SESSION['id_dokter']);
				
				$this->load->view('template_dokter/header',$data);
				$this->load->view('admin_dokter/profil');
				$this->load->view('template_dokter/footer');				
			}
        }
	
	}
	public function edit_jadwal(){
		var_dump($this->input->post('hari'));die();
	}
	public function action_login(){
		$data = array(
			 "username"=> $this->input->post('username'),
			"password"=>md5($this->input->post('password')),
		);
		// $user = $this->Model_user->find_data($data);
		$user = $this->Model_dokter->find_data('username',$data['username']);
		// var_dump($user);die();
        // jika usernya ada
        if ($user) {
            // jika usernya aktif
			if ($data['password']===$user['password']) {
				$this->session->set_userdata($data);
				$_SESSION['login'] = false;
				$_SESSION['id_dokter']=$user['id']; 
				redirect('admin_dokter/menu');
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('admin_dokter');
			}
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin_dokter');
        }
	}
    public function logout(){
		$_SESSION['id_dokter']= 0;
        redirect("admin_dokter");
	}
	public function menu(){
		if(isset($_SESSION['id_dokter'])){
            if($_SESSION['id_dokter']!=1){
                redirect('admin_dokter');
            }else{
				$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
				$this->load->view('template_dokter/header',$data);
				$this->load->view('admin_dokter/menu');
				$this->load->view('template_dokter/footer');				
			}
        }
	
	}
	public function konsultasi(){
		
		if(isset($_SESSION['id_dokter'])){
            if($_SESSION['id_dokter']!=1){
                redirect('admin_dokter');
            }else{
				$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
				$data['order'] =  $this->Model_order->find_data('id_dokter',$_SESSION['id_dokter']);
				$data['user'] =  $this->Model_user->get_data();
				foreach($data['order']as $dt){
					foreach($data['user'] as $us){
						if($dt->id_user === $us->id){
							$a = array(
								'gambar' => $us->gambar,
								'name'=> $us->name
							);
							// $data["user"][0] + 	=$a;

							$dt->{"gambar"}=$us->gambar;
							$dt->{"user"}=$us->name;

						}
						
					}

				}
				$this->load->view('template_dokter/header',$data);
				$this->load->view('admin_dokter/order');
				$this->load->view('template_dokter/footer');				
			}
        }
	
	}
	public function chat(){
		
		if(isset($_GET["id_user"])&&isset($_GET["jam_order"])){
			$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
			$data['user'] =  $this->Model_user->get_data();
			$data['list_chat']= $this->Model_partisipan->find_data('id_dokter',$_SESSION['id_dokter']);

			foreach($data['list_chat'] as $lc){	
				foreach($data['user'] as $us){
					if($lc->id_user == $us->id){
						$lc->{"gambar"}=$us->gambar;
						$lc->{"user"}=$us->name;
					}
				}
			}
			$this->load->view('template_dokter/header',$data);
			$this->load->view('admin_dokter/chat');
			$this->load->view('template_dokter/footer');
		}else{
			$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
			// $data['user'] =  $this->Model_user->find_data($_GET['id_user'],'id');
			$data['list_chat']= $this->Model_partisipan->find_data('id_dokter',$_SESSION['id_dokter']);
			$data['user'] =  $this->Model_user->get_data();
			$data['list_chat']= $this->Model_partisipan->find_data('id_dokter',$_SESSION['id_dokter']);
			
			foreach($data['list_chat'] as $lc){	
				foreach($data['user'] as $us){
					if($lc->id_user == $us->id){
						$lc->{"gambar"}=$us->gambar;
						$lc->{"user"}=$us->name;
					}
				}
			}
			$this->load->view('template_dokter/header',$data);
			$this->load->view('admin_dokter/chat');
			$this->load->view('template_dokter/footer');
		}
	}
	public function chat2(){
		$_GET["id_user"] =69;
		$_GET["id"]=3;
		if(isset($_GET["id"])&&isset($_GET["id_user"])){
			$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
			$data['user'] =  $this->Model_user->get_data();
			$data['list_chat']= $this->Model_partisipan->find_data('id_dokter',$_SESSION['id_dokter']);
			$data['chat'] =$this->db->order_by('id','ASC')->get_where('message',['id_participant'=>$_GET['id'],'id_user'=>$_GET['id_user'],'id_dokter'=>$_SESSION['id_dokter']])->result(); 
			// $data['name']
			$a=$this->db->get_where('user',['id'=>$_GET['id_user']])->result_array();
			
			$data['name'] = $a[0]['name'];			
			$data['gambar'] = $a[0]['gambar'];
			foreach($data['list_chat'] as $lc){	
				foreach($data['user'] as $us){
					if($lc->id_user == $us->id){
						$lc->{"gambar"}=$us->gambar;
						$lc->{"user"}=$us->name;
					}
				}
			}
			foreach($data['chat'] as $ct){	
				foreach($data['user'] as $us){
					if($ct->id_user == $us->id){
						$ct->{"gambar_user"}=$us->gambar;
						$ct->{"user"}=$us->name;
						$ct->{"dokter"}=$data["dokter"]["name"];
						$ct->{"gambar_dokter"}=$data["dokter"]["image"];
						$data['name'] = $us->name;
						$data['gambar'] = $us->name;
					}
				}
				
			}
			$this->load->view('template_dokter/header',$data);
			$this->load->view('admin_dokter/chat');
			$this->load->view('template_dokter/footer');
		}else{
			$data['dokter']= $user = $this->Model_dokter->find_data('id',$_SESSION['id_dokter']);
			// $data['user'] =  $this->Model_user->find_data($_GET['id_user'],'id');
			
			$this->load->view('template_dokter/header',$data);
			$this->load->view('admin_dokter/chat');
			$this->load->view('template_dokter/footer');
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
			$push= $this->db->order_by('id', 'ASC');	
			$push = $this->db->order_by('id','ASC')->get_where('message',['id_participant'=>$this->input->post('id_participant')])->result();
			foreach($push as $key){
				$data_pusher[] =$key;
			} 
			$pusher->trigger('my-channel', 'my-event', $data_pusher);
		}
		
	}
}

  