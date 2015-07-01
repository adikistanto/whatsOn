<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_Auth');
	}
	
	public function login()
	{
		//set_rules validasi
		$this->form_validation->set_rules('identitas', 'Username', 'trim|required');
		$this->form_validation->set_rules('kunci_rahasia', 'Password', 'trim|required|md5');
		
		if ($this->form_validation->run() === FALSE)//jika gagal/tidak memenuhi aturan
		{
			$this->load->view('login');		
		}
		else //jika berhasil/memenuhi aturan
		{
			$row = $this->M_Auth->check_user($this->input->post('identitas'),$this->input->post('kunci_rahasia'));//cek apakah user terdaftar
			//echo $this->input->post('username').' '.$this->input->post('password');return;
			if(!empty($row)){	//jika terdaftar
				$data_user = $this->M_Auth->get_user($this->input->post('identitas'));
				$sess_array = array(
				'id_user'	=> $data_user['id_user'],
				'username' => $data_user['email'],
				'status' => $data_user['status_premium'],
				'logged_in' => TRUE
				);
				
				$this->session->set_userdata($sess_array);
				redirect('profile');
			}else{
				$data['error'] = 'Gagal Login, username/password tidak terdaftar';
				$this->load->view('login',$data);
			}
		}
		
	}
	/*
	public function home()
	{	
		if($this->session->userdata('logged_in')==false){
			redirect('login');
		}
		
		if($this->session->userdata('level')==1){
			redirect('eo/index');
		}else{
			redirect('sponsor/index');
		}
	}*/
	
	public function logout()
	{
		if($this->session->userdata('logged_in')==false){
			redirect('login');
		}
		$this->session->sess_destroy();
		redirect('login');
	}
	
}

/* End of file c_auth.php */
/* Location: ./application/controllers/admin/c_auth.php */