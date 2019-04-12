<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model{
	function get_mahasiswa(){
		$query = $this->db->select('*')->from('mahasiswa')->get();
    return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
