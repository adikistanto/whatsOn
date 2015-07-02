<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_User extends CI_Model {
	public function get_user($id=FALSE)
	{
		if($id===false){
			$id=$this->session->userdata('id_user');
		}	
		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function add_user()
	{
		$tgl = $this->input->post('tanggal_lahir');
		$bln = $this->input->post('bulan_lahir');
		$thn = $this->input->post('tahun_lahir');
		
		$date = $thn.'-'.$bln.'-'.$tgl;
		$data = array(
				'nama_depan' 	=> $this->input->post('nama_depan'),
				'nama_belakang'		=> $this->input->post('nama_belakang'),
				'email'=> $this->input->post('surel'),
				'sandi'=> $this->input->post('kunci_rahasia'),
				'kelamin'=> $this->input->post('gender'),
				'status_premium'=> 0,
				'ttl'=> $date,
		);
		
		$query = $this->db->insert('user', $data);
		
	}
	
	public function set_status(){
		$id=$this->session->userdata('id_user');
		
		$data = array(
				'status' 	=> $this->input->post('status'),
		);
		
		$this->db->where('id_user', $id);
		return $this->db->update('user', $data); 
	}
	/*
	public function delete_user($id)
	{
		$this->db->where('id_user', $id);
		$query = $this->db->delete('user_account');
		
		if($query){
			echo 'oke';
		}
	}
	*/
	
	public function edit_user($id)
	{	
		$tgl = $this->input->post('tanggal_lahir');
		$bln = $this->input->post('bulan_lahir');
		$thn = $this->input->post('tahun_lahir');
		
		$date = $thn.'-'.$bln.'-'.$tgl;
		
		$id=$this->session->userdata('id_user');
		
		$data = array(
				'nama_depan' 	=> $this->input->post('nama_depan'),
				'nama_belakang'		=> $this->input->post('nama_belakang'),
				'email'=> $this->input->post('email'),
				'sandi'=> $this->input->post('kunci_rahasia'),
				'kelamin'=> $this->input->post('gender'),
				'kota'=> $this->input->post('kota'),
				'status_premium'=> 0,
				'ttl'=> $date,
		);
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data); 

	}
	/*
	
	public function record_count($filter=false)
	{
		if($filter===false){
			return $this->db->count_all("user_account");
		}else{
			$this->db->where('level', $filter);
			$this->db->from('user_account');
			return $this->db->count_all_results();
		}
		
	}
	
	public function get_tingkatan(){
		$query = $this->db->get('tingkat');
		return $query->result_array();
	}
	
	public function get_fakultas(){
		$query = $this->db->get('fakultas');
		return $query->result_array();
	}*/
}