<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hello extends CI_Controller {
    public function index()
    {
        echo $temp."<br/>";
        echo $temp1."<br/>";
    }
    public function hello1()
    {
        echo 'hello';
    }
    public function hello2($nama)
    {
        echo 'Test '.$nama;
    }
}