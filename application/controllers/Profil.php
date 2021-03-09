<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$data['profil'] = $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header');
        $this->load->view('profil',$data);
        $this->load->view('template/footer');

	}
	public function edit_profil(){
		$data['profil'] = $this->Model_user->find_data($_SESSION['id'],"id");
		$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('template/header',$data);
        $this->load->view('edit-profil');
        $this->load->view('template/footer');
	}

	public function edit(){
		$nama = $this->input->post('name');
		$email = $this->input->post('email');
		$password_baru = $this->input->post('password_baru');
		$password_lama = $this->input->post('password_lama');
		$telephone = $this->input->post('telephone');
		$alamat = $this->input->post('alamat');
		$gambar=$_FILES['gambar']['name'];
		$pass = $this->Model_user->find_data($_SESSION['id'],"id");
		if(md5($password_lama) != $pass['password'] ){
			$this->session->set_flashdata('message', 'password salah');
			redirect('/profil/edit-profil');
		}
		if($gambar=''){}else{
			unlink($_SERVER['DOCUMENT_ROOT'].'/healtypaws/assets/img/user/'.$pass['gambar']);	
			$config ['upload_path']='./assets/img/user/';
			$config ['allowed_types']='jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "gambar gagal";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'name' => $nama,
			'email' => $email,
			'gambar' => $gambar,
			'password' => md5($password_baru),
			'telephone' => $telephone,
			'alamat' => $alamat
		);
		$this->Model_user->update($data,$_SESSION['id']);
		redirect("/profil");
	}	
}
