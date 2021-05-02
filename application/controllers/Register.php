<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(isset($_SESSION['id'])){
            if($_SESSION['id']!=0){
                redirect("home");
            }
        }
		// $data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
	
		$this->load->view('user/template/header');
        $this->load->view('user/register');
        $this->load->view('user/template/footer');
	}
	public function action_register(){
		$data = array(
			"email"=> $this->input->post('email'),
		   "password"=>$this->input->post('password'),
		   "name"=> $this->input->post('name'),
		   "password"=>md5($this->input->post('pass')),
		   "telephone" =>$this->input->post('phone'),
		   "alamat"=>$this->input->post('address'),
		   "gambar"=>base_url()."assets/img/user/user.png",
		   "is_active"=>0
	   );
	   $repass= md5($this->input->post('re_pass')); 
	   if($data["password"] != $repass){
			redirect("login");
	   
		}else{
			
				
				redirect("login");
			
	
	   }
	}
	
}
