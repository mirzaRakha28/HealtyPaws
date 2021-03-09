<?php
    class Model_user extends CI_Model{
        public function find_data($data,$action){

            return $this->db->get_where('user', [$action => $data])->row_array();
        }
        public function add_data($data){
            $this->db->insert("user", $data);
        }
        public function edit_data($data){
            $this->db->set('is_active', $data['is_active']);
            $this->db->where('id', $data['id']);
            $this->db->update('user');
        }
        public function update($data,$id){
            $this->db->where('id',$id);
            $this->db->update('user',$data);
        }
        
    }
?>