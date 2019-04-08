<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model{
	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('users');
		return $result;
	}

}
