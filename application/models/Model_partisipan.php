<?php
    class Model_partisipan extends CI_Model{
        // public function get_data(){
        //     $day = date("l");
        //     $query = "SELECT * FROM operasional where hari = '".$day."'and active = '1' " ;
        //     return $this->db->query($query)->result();
        // }
        public function find_data($action,$data){
            return $this->db->get_where('participant', [$action => $data])->result();
        }
    }
?>