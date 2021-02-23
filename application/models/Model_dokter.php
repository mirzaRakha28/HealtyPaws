<?php
    class Model_dokter extends CI_Model{
        public function get_data(){
           
            return $this->db->get('dokter')->result();
        }
    }
?>