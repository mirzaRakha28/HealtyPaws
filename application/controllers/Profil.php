<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function index()
	{
        $id = $this->Model_dokter->get_data();
        foreach($id as $i){
            if(md5($i->id)==$_GET['id']){
                $data['dokter'] = $this->Model_dokter->find_data('id',$i->id);
                $id_user= $i->id;
                break;
            }
        }
        $data['operasional'] = $this->Model_operasional->find_data("id_dokter","hari",$id_user,"Sunday");
		$data['order'] = $this->Model_order->find_data("id_dokter",$data['dokter']['id']);
		
	
        if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$this->load->view('template/header',$data);
				$this->load->view('order');
				$this->load->view('template/footer');
			}else{
				redirect("login");
			}
		}else{
			redirect("login");
		}
		
	}
	public function pesan(){
		$id = $this->Model_dokter->get_data();
        foreach($id as $i){
            if(md5($i->id)==$_GET['id']){
                $data['dokter'] = $this->Model_dokter->find_data('id',$i->id);
                $id_user= $i->id;
                break;
            }
        }
        $data['operasional'] = $this->Model_operasional->find_data("id_dokter","hari",$id_user,"Sunday");
		$data['order'] = $this->Model_order->find_data("id_user",$_SESSION['id']);
		$sum = 1;
		$data['bool'] = 0;
		foreach($data['order'] as $od){
			if($od->id_user=$_SESSION['id']){
				$sum++;
			}
			if($sum > 2){
				
				$data['bool'] = 1;
			}
		}

		if(isset($_SESSION['id'])){
			if($_SESSION['id']!=0){
				
				$data['gambar'] =  $this->Model_user->find_data($_SESSION['id'],"id");
				$this->load->view('template/header',$data);
				$this->load->view('pesanan');
				$this->load->view('template/footer');
			}else{
				redirect("login");
			}
		}else{
			redirect("login");
		}
		
	}
	public function pay(){
		$jam_pesan = $this->input->post('jam_pesan');
		$jam_selesai = $this->input->post('jam_selesai');
		$id_dokter = $this->input->post('id_dokter');
		$harga = $this->input->post('harga');
		$tanggal = date("Y-m-d H:i:s");
		$data = array(
			"jam_order"=>$jam_pesan,
			"jam_selesai"=>$jam_selesai,
			"id_dokter"=>$id_dokter,
			"harga"=>$harga,
		);
		if($this->Model_order->find_2_data($data)){
			redirect();
		}else{
			$data = array(
				"jam_order"=>$jam_pesan,
				"jam_selesai"=>$jam_selesai,
				"id_dokter"=>$id_dokter,
				"harga"=>$harga,
				"tanggal"=>$tanggal,
				"id_user"=>$_SESSION['id'],
				"id_participant"=>0,
					"active"=>0
			);
			$this->Model_order->add_data($data);
			redirect();
		}
	}
}
