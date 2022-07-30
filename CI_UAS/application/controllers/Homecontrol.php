<?php
    defined('BASEPATH') OR exit('No direct script access
    allowed');
    class HomeControl extends CI_Controller {
    function view_profil()
    {
        $this->load->view('profil');
    }
}