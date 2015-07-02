<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class whatsOn extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }

    public function daftar() {
        $this->load->view('daftar');
    }

    public function beranda() {
        $this->load->view('beranda');
    }

    public function profile() {
        $this->load->view('profile');
    }

}
