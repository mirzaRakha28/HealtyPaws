<?php
    class Model_education extends CI_Model{
        public function get_data(){
           
            return $this->db->get('education')->result();
        }
        public function find_id($id){
            $query = "SELECT * FROM education where id = '".$id."'";
           
            return $this->db->query($query)->row();
        }
    }
?>