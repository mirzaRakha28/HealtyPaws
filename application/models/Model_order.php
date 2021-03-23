<?php
    class Model_order extends CI_Model{
        public function find_data($action,$data){
            return $this->db->get_where('order', [$action => $data])->result();
        }
        public function find_2_data($data){
            return $this->db->get_where('order', $data)->result();
        }
        public function add_data($data){
            $this->db->insert("order", $data);
        } 
       
    }
?>