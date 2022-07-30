<?php
    class Admin extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
                redirect(base_url("login"));
            } 
            $this->load->library('upload');
            $this->load->model('data_model');
            $this->load->model('list_model');
        }
        function index($temp1){
            $x = $temp1 * 6;
            $data['result'] = $this->list_model->GetResepList($x); 
            $data['list'] = $temp1;
            $this->load->view("admin_view",$data);
        }
        
        public function insert(){
            if($this->input->post('submit')) {
                $upload = $this->data_model->upload();
                $imgdata = file_get_contents($upload['file']['full_path']);
                if($upload['result'] == "success") {
                    $data = array(
                        'namaResep' => $this->input->post('NamaResep'),
                        'bahan' => $this->input->post('Bahan'),
                        'prosedur' => $this->input->post('Prosedur'),
                        'description' => $this->input->post('Deskripsi'),
                        'foto' => $imgdata,
                        'rating' => $this->input->post('Rating'),
                        'kategori' => $this->input->post('Kategori'),
                        );
                    $this->data_model->save($data);
                    redirect(base_url('admin/index/0'));
                } 
                else {
                    echo "GAGAL";
                    $data['message'] = $upload['error'];
                    echo $data['message'];
                }
            }

        }
        
        public function delete_data($idResep, $list){
            $id_mhs = array('idResep' => $idResep);
            $this->data_model->Delete('resep', $id_mhs);
            redirect(base_url('admin/index/').$list,'refresh');
        }
        public function GetWhere($table, $data){
            $res=$this->db->get_where($table, $data);
            return $res->result_array();
        }
        
        public function update($idResep){
            $resep = $this->data_model->GetWhere('resep', array('idResep' => $idResep));
            $data = array(
            'idResep' => $resep[0]['idResep'],
            'namaResep' => $resep[0]['namaResep'],
            'bahan' => $resep[0]['bahan'],
            'prosedur' => $resep[0]['prosedur'],
            'description' => $resep[0]['description'],
            'foto' => $resep[0]['foto'],
            'rating' => $resep[0]['rating'],
            'kategori' => $resep[0]['kategori'],
            );
            $this->load->view('form', $data);
        }
        
        public function update_data(){
            
            
            if($this->input->post('submit')) {
                $upload = $this->data_model->upload();
                $imgdata = file_get_contents($upload['file']['full_path']);
                    $id = $this->input->post('idResep');
                if($upload['result'] == "success") {
                    $data = array(
                        'idResep' => $this->input->post('idResep'),
                        'namaResep' => $this->input->post('NamaResep'),
                        'bahan' => $this->input->post('Bahan'),
                        'prosedur' => $this->input->post('Prosedur'),
                        'description' => $this->input->post('Deskripsi'),
                        'foto' => $imgdata,
                        'rating' => $this->input->post('Rating'),
                        'kategori' => $this->input->post('Kategori'),
                        );
                    $where = array('idResep' => $id);
                    $res = $this->data_model->Update('resep', $data,$where); 
                    if ($res>0) {
                        $temp = base_url('admin/update/');
                        redirect($temp.$id);
                    }
                    redirect(base_url('admin/index/0'));
                } 
                else {
                    echo "GAGAL";
                    $data['message'] = $upload['error'];
                    echo $data['message'];
                    echo "<script>alert('".$data['message']."');</script>";
                    $data = array(
                        'idResep' => $this->input->post('idResep'),
                        'namaResep' => $this->input->post('NamaResep'),
                        'bahan' => $this->input->post('Bahan'),
                        'prosedur' => $this->input->post('Prosedur'),
                        'description' => $this->input->post('Deskripsi'),
                        'rating' => $this->input->post('Rating'),
                        'kategori' => $this->input->post('Kategori'),
                        );
                    $where = array('idResep' => $id);
                    $res = $this->data_model->Update('resep', $data,$where); 
                    if ($res>0) {
                        $temp = base_url('admin/update/');
                        redirect($temp.$id);
                    }
                    $temp = base_url('admin/update/');
                    redirect($temp.$id);
                }
            }
        }
    }