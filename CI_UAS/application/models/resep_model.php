<?php
    Defined('BASEPATH') OR exit('No direct script access allowed');
    class Resep_model extends CI_Model{
        public function GetResep(){
        $data = $this->db->query("SELECT * FROM resep"); 
        return $data->result_array();
        }
    }
?>