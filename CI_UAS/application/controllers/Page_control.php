<?php
    defined('BASEPATH') OR exit('No direct script access
    allowed');
    class Page_control extends CI_Controller {
    function view_home($temp)
    {
        $this->load->model('resep_model');
        $data['result'] = $this->resep_model->GetResep(); 
        $data['time'] = $temp;
        $this->load->view('home_index',$data);
    }
    function view_content($temp, $temp1)
    {
        $this->load->model('list_model');
        $x = $temp1 * 6;
        $data['result'] = $this->list_model->GetResepList($x); 
        $data['list'] = $temp1;
        $data['time'] = $temp;
        $this->load->view('content_page',$data);
    }
    function view_content_mod1($temp)
    {
        $this->load->model('list_model');
        $data['result'] = $this->list_model->GetResepListMod('pembuka','6'); 
        $data['list'] = -1;
        $data['time'] = $temp;
        $this->load->view('content_page',$data);
    }
    function view_content_mod2($temp)
    {
        $this->load->model('list_model');
        $data['result'] = $this->list_model->GetResepListMod('utama','6'); 
        $data['list'] = -1;
        $data['time'] = $temp;
        $this->load->view('content_page',$data);
    }
    function view_content_mod3($temp)
    {
        $i = 0;
        $this->load->model('list_model');
        $data['result'] = $this->list_model->GetResepListMod('penutup','6'); 
        $data['list'] = -1;
        $data['time'] = $temp;
        $this->load->view('content_page',$data);
    }
    function view_about($temp)
    {
        $data['time'] = $temp;
        $this->load->view('about_us',$data);
    }
    
    function view_detail($temp)
    {
        $this->load->model('data_model');
        $resep = $this->data_model->GetWhere('resep', array('idResep' => $temp));
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
        $this->load->view('detail', $data);
    }
}