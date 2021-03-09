<?php
    class Model_auth extends CI_Model{
        public function find_data($data){
            return $this->db->get_where('autentifikasi', ['id_user' => $data])->row_array();;
        }
        public function add_data($id,$rand){
            $data =array(
                "id_user" => $id,
                "code" => $rand
            );
            $this->db->insert("user", $data);
        }
        // public function edit_data($data)
        public function edit_data($data,$id){
            $this->db->set('code', $data);
            $this->db->where('id_user', $id);
            $this->db->update('autentifikasi');

        }
    }
?>