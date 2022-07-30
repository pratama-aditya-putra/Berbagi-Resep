<?php

    class Data_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function upload() {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['remove_space'] = TRUE;
            $this->upload->initialize($config);
            if($this->upload->do_upload('userfile')) {
                $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
                return $return;
            } 
            else {
                $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
                return $return;
            }
        }
        
        public function save($data) {
            $this->db->insert('resep', $data);
            return $res;
        } 
        public function Insert($id, $data) {
            
            $image_path = $this->upload->data('file_path');
            $sql = "UPDATE users SET images = '{$image_path}' WHERE id = '{$id}' LIMIT 1";
            $result = $this->db->query($sql);
            $row = $this->db->affected_rows();

            if ($row) {
                return $image_path;
            }
            else
                return FALSE;      
            $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
            return $res; // Kode ini digunakan untuk mengembalikan hasil $res
        }
        
        public function GetWhere($table, $data){
            $res=$this->db->get_where($table, $data);
            return $res->result_array();
        }
        
        public function Update($table, $data, $where){
            $res = $this->db->update($table, $data, $where); // Kode ini digunakan untukmerubah record yang sudah ada dalam sebuah tabel
            return $res;
        }
        public function Delete($table, $where){
            $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
            return $res;
        }
    }
?>