<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dosen extends CI_Model{
	function get_dosen(){
		$query = $this->db->select('*')->from('dosen')->get();
    return $query->result();
	}

	function get_dosenprofil($dosen){
		$sql = "SELECT * from dosen WHERE nip_dosen = ".$dosen."";
		return $this->db->query($sql)->row();
	}

	function get_namadosen(){
		$query = $this->db->query("select nama_dosen from dosen");
    return $query->result();
	}


	function input_data($data,$table){
		$this->db->trans_begin();
		$this->db->insert($table,$data);
		$nip=substr($data['nip_dosen'],0,6);
		$nama=substr(strtolower(str_replace(" ", "", $data['nama_dosen'])),0,5);
		$data_user = array(
			'username' => $data['nip_dosen'],
			'password' =>  md5($nama.$nip),
			'level' => 2
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
