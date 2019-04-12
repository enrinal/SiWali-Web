<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dosen extends CI_Model{
	function get_dosen(){
		$query = $this->db->select('*')->from('dosen')->get();
    return $query->result();
	}

	function get_namadosen(){
		$query = $this->db->query("select nama_dosen from dosen");
    return $query->result();
	}

	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
