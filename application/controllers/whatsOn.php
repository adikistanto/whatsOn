<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class whatsOn extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('id_user')){
				redirect('login');
			}
			$this->load->model('M_User');
		}
    public function index() {
        $this->load->view('login');
    }

    public function daftar() {
        $this->load->view('daftar');
    }

    public function beranda() {
				$data['user'] = $this->M_User->get_user();
        $this->load->view('beranda',$data);
    }

    public function profile() {
        $this->load->view('profile');
    }

}
