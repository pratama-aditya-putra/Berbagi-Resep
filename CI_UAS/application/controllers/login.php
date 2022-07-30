<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller {
        function __construct() {
            parent:: __construct();
            $this->load->model('login_model');
        }
        function index() {
            $this->load->view('login_view');
        }
        function login_action() {
            $this->form_validation->set_rules('username', 'Username',array('required', 'min_length[5]'));
            $this->form_validation->set_rules('password', 'Password',array('required', 'min_length[6]'));
            if ($this->form_validation->run() == FALSE){
                $this->load->view('login_view');
            }
            else{
                $username = $this->input->post('username'); $password = $this->input->post('password'); $where = array(
                'username' => $username,
                'password' => $password);
                $cek = $this->login_model->cek_login("admin", $where)->num_rows();
                if($cek > 0) {
                    $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url("admin/index/0"));
                }
                else {
                    echo "<script>alert('Username dan password salah!'); location = '".base_url('login')."';</script>";    
                }
            }
        }
        function logout()
        {
            $newdata = array(
                        'username'  =>'',
                        'password' => '',
                        'status' => 'logout',
                       );

             $this->session->unset_userdata($newdata);
             $this->session->sess_destroy();

             redirect(base_url("login"),'refresh');
        }
    }
