<?php
    Defined('BASEPATH') OR exit('No direct script access allowed');
    class List_model extends CI_Model{
        public function GetResepList($num){
            $query = $this->db->get('resep', 6, $num);
            return $query ->result_array();
        }
        public function GetResepListMod($num, $lim){
            $this->db->where('kategori', $num);
            $query = $this->db->get('resep', $lim);
            $count = $this->db->count_all_results();
            return $query->result_array();
        }
    }
?> 