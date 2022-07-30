<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hello extends CI_Controller {
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function hello1()
    {
        echo 'hello';
    }
    public function hello2($nama)
    {
        echo 'Test '.$nama;
    }
    public function test()
    {
        $this->load->view('test');
    }
}