<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Controller {
    public function add_data(){
        $data = array(
            "id_user"=> $_GET["id_user"],
			"id_dokter"=>$_GET["id_dokter"],
			"id_participant"=>$_GET["id_participant"],
            "rating"=>$this->input->post('rating'),
        );
        $this->db->insert("rating", $data);
        redirect("home/chat");
    }
}
