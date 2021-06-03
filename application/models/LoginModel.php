<?php defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model{

	public function check_user($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('user');
	}
}
