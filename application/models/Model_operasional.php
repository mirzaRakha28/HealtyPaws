<?php
    class Model_operasional extends CI_Model{
        public function get_data(){
            $day = date("l");
            $query = "SELECT * FROM operasional where hari = '".$day."'and active = '1' " ;
            return $this->db->query($query)->result();
        }
    }
?>