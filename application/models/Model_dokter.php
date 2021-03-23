<?php
    class Model_dokter extends CI_Model{
        public function get_data(){
           
            return $this->db->get('dokter')->result();
        }
        public function find_data($action,$data){
            return $this->db->get_where('dokter', [$action => $data])->row_array();
        }
    }
?>