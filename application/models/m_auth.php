<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Auth extends CI_Model {
	public function check_user($username,$password)
	{
		$query = $this->db->get_where('user', array('email' => $username, 'sandi' => $password));
		return $query->row();
	}
	
	public function get_user($username)
	{
		$query = $this->db->get_where('user', array('email' =>$username));
		return $query->row_array();
	}
}