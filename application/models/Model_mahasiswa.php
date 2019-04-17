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

	function save($data,$table){
		$this->db->trans_begin();
		$this->db->insert($table,$data);
		$nim=$data['nim_mahasiswa'];
		$nama=substr(strtolower(str_replace(" ", "", $data['nama_mahasiswa'])),0,5);
		$data_user = array(
			'username' => $data['nim_mahasiswa'],
			'password' =>  $nama.$nim,
			'level' => 3
		);
		$this->db->insert('users',$data_user);
		if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return array (
                'errors' => true,
                'message' => 'Data is failed insert'
            );
        } else {
            $this->db->trans_commit();
            return array (
                'errors' => false,
                'message' => 'Data Berhasil dimasukkan'
            );
        }
	}
}
