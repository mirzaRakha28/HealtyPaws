<?php
    class Model_autentifikasi extends CI_Model{
        public function find_data($data){
            $this->db->get_where('user', ['email' => $email])->row_array();
        }
    }
?>