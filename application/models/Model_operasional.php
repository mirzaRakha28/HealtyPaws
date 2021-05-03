<?php
    class Model_operasional extends CI_Model{
        public function get_data(){
            $day = date("l");
            $query = "SELECT * FROM operasional where hari = '".$day."'and active = '1' " ;
            return $this->db->query($query)->result();
        }
        public function find_data($action,$action1,$data,$data1){
            return $this->db->get_where('operasional', [$action => $data,$action1=>$data1])->row_array();
        }
        public function find_dataa($action,$data){
            return $this->db->get_where('operasional', [$action => $data])->result();
        }
        public function update_data($data,$id){
            $this->db->set('hari', $data['hari']);
            $this->db->set('jam_buka', $data['jam_buka']);
            $this->db->set('jam_tutup', $data['jam_tutup']);
            $this->db->set('active', $data['active']);
            $this->db->where('id_dokter', $id);
            $this->db->where('hari', $data['hari']);
            $this->db->update('operasional');
        }
        // public function action_login(){

        // }
    }
?>