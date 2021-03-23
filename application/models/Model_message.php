<?php
    class Model_message extends CI_Model{
        public function insert($data){
           
            return $this->db->insert('message',$data);
        }
        public function message_sort(){
            
            return $this->db->order_by('id', 'ASC')->get('message')->result();	
        }
    }
?>