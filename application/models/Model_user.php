<?php
    class Model_user extends CI_Model{
        public function find_data($data){
            return $this->db->get_where('user', ['email' => $data['email']])->row_array();;
        }
        
    }
?>