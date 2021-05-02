<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_healtypaws extends CI_Controller {
	public function index()
	{
		if(isset($_SESSION['id_admin'])){
			die();
            if($_SESSION['id_admin']!=0){
                redirect("home");
            }
        }
        $this->load->view('admin_healty/login');
	}

	public function action_login(){
		$data = array(
			 "username"=> $this->input->post('username'),
			"password"=>md5($this->input->post('password')),
		);
		// $user = $this->Model_user->find_data($data);
		$user = $this->db->get_where('admin', ['username' =>$data['username']])->row_array();
		// var_dump($user);die();
        // jika usernya ada
        // var
		if ($user) {
            // jika usernya aktif
			
			if ($data['password']===$user['password']) {
				$this->session->set_userdata($data);
				$_SESSION['login'] = false;
				
				$_SESSION['id_admin']=$user['id']; 
				redirect('admin_healtypaws/menu');
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('admin_healtypaws');
			}
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin_healtypaws');
        }
	}
    public function logout(){
		$_SESSION['id_admin']= 0;
        redirect("admin_healtypaws");
	}
	public function menu(){
		if(isset($_SESSION['id_admin'])){
            if($_SESSION['id_admin']!=1){
                redirect('admin_healtypaws');
            }else{
				$this->load->view('admin_healty/header');
				$this->load->view('admin_healty/menu');
				$this->load->view('admin_healty/footer');				
			}
        }
	
	}
	public function list_dokter(){
		if(isset($_SESSION['id_admin'])){
            if($_SESSION['id_admin']!=1){
                redirect('admin_healtypaws');
            }else{
				$data['dokter']= $user = $this->Model_dokter->get_data();
				$this->load->view('admin_healty/header',$data);
				$this->load->view('admin_healty/list_dokter');
				$this->load->view('admin_healty/footer');				
			}
        }
	
	}

	public function tambah_dokter(){
		if(isset($_SESSION['id_admin'])){
            if($_SESSION['id_admin']!=1){
                redirect('admin_healtypaws');
            }else{
				$this->load->view('admin_healty/header');
				$this->load->view('admin_healty/form_dokter');
				$this->load->view('admin_healty/footer');				
			}
        }
	
	}
	public function form_dokter(){
		$gambar=$_FILES['gambar']['name'];
		if($gambar=''){}else{
				
			$config ['upload_path']='./assets/img/dokter/';
			$config ['allowed_types']='jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "gambar gagal";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
		$data=array(
			'name'=>$this->input->post('name'),
			'username'=>$this->input->post('username'),
			'password'=>md5(1234),
			'image' =>$gambar,
		);
		$this->db->insert("dokter", $data);
		redirect('index.php/admin_healtypaws/list_dokter');
	
	}
	public function pembayaran_dokter(){
		$data['order']= $this->db->get('order')->result();
		foreach($data['order'] as $od){
			$dokter =  $this->db->get_where('dokter', ['id' => $od->id_dokter])->row_array();
			$user = $this->db->get_where('user', ['id' => $od->id_user])->row_array();
			$od->{'name'}=$user['name'];
			$od->{'gambar'}=$user['gambar'];
			$od->{'name_dokter'}=$dokter['name'];
		}
		$this->load->view('admin_healty/header');
			$this->load->view('admin_healty/pembayaran',$data);
			$this->load->view('admin_healty/footer');	
	
	}
	public function active(){
		$data=array(
			'id_dokter'=>$_GET["id_dokter"],
			'id_user'=>$_GET["id_user"],
			'date'=>$_GET["date"],
		);
		$this->db->insert("participant", $data);
		$user = $this->db->get_where('participant', ['id_dokter'=>$_GET["id_dokter"],
		'id_user'=>$_GET["id_user"],
		'date'=>$_GET["date"]])->row_array();

		$this->db->set('id_participant', $user["id"]);
		$this->db->set('active', true);
		$this->db->where('id', $_GET['id']);
		$this->db->update('order');
		redirect('admin_healtypaws/pembayaran_dokter');

	}
}

  