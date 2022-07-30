<?php
Defined('BASEPATH') OR exit('No direct script access allowed');
class Tryit extends CI_Controller{
    public function index(){
        $data = $this->db->query("SELECT * FROM resep");
        foreach($data->result_array() as $mahasiswa){
            echo "Nama : ".$mahasiswa['idResep']."<br/>";
            echo "KOM : ".$mahasiswa['namaResep']."<hr/>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $mahasiswa['foto'] ).'"/>';
        }
    }
}