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
	/*
	public function edit($id){
		$data['data_edit'] = $this->M_Category->get_category($id);
		$data_category = $data['data_edit'];
		
		$category_name = $data_category['category_name'];
		$slug = $data_category['slug'];
		
		//echo $category_name.$slug;return;
		//set rules
		if ($category_name != $this->input->post('category_name')){
			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[100]|is_unique[category.category_name]');			
			$validasi = $this->form_validation->run();
		}else{
			$validasi = TRUE;
		}
		
		if($slug != $this->input->post('slug')){
			$this->form_validation->set_rules('slug', 'Slug', 'trim|required|max_length[100]|is_unique[category.slug]');
			$validasi = $this->form_validation->run();
		}else{
			$validasi = TRUE;
		}
		
		if ($validasi === FALSE)
		{
			$data['categories'] = $this->M_Category->get_category();
			$this->load->template_admin('admin/view_categories',$data);
		}
		else
		{
			$this->M_Category->edit_category($id);
			$this->session->set_flashdata('message', 'Category berhasil diedit');
			redirect('admin/categories');
		}
	}
	
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
