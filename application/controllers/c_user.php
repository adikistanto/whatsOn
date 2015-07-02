<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_user')){
			redirect('login');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_User');
	}
	public function index(){
		$data['user']=$this->M_User->get_user();
		//$data['message'] = $this->session->flashdata('message');
		$this->load->view('profile',$data);
	}
	
	public function set_status(){
		$set=$this->M_User->set_status();
		if($set){
			redirect('profile');
		}else{
			redirect('test');
		}
		
	}
	
	public function edit(){
		$data['user'] = $this->M_User->get_user();
		
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[100]');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[20]|matches[re_password]|md5');
		$this->form_validation->set_rules('re_password', 'Comfirmation Password', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('edit',$data);
		}
		else
		{
			$this->M_User->edit_user();
			redirect('profile');
		}
	}
	/*
	public function delete()
	{	
		$this->session->set_flashdata('message', 'Category berhasil dihapus...');
		$id = $this->input->post('id');
		$this->M_Category->delete_category($id);
	}
	
	public function get_total_category(){
		$id = $this->input->post('id');
		$total = $this->M_Category->get_total_category($id);
		
		echo $total;
	}*/
	
}
