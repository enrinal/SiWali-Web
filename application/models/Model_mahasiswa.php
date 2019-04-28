<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model{
	function get_mahasiswa(){
		$query = $this->db->select('*')->from('mahasiswa')->get();
    return $query->result();
	}

	function get_mahasiswawali($dosen){
		$sql = "SELECT `nim_mahasiswa`, `nama_mahasiswa`, `angkatan`, `semester_1`,
		 `semester_2`,`semester_3`,`semester_4`,`semester_5`,`semester_6`,`semester_7`,
		 `semester_8` FROM `mahasiswa` WHERE nip_dosen=".$dosen." ";
		return $this->db->query($sql)->result();
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
			'password' =>  md5($nama.$nim),
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

	function get_ip($nim){
		$sql = "SELECT `semester_1`,`semester_2`, `semester_3`, `semester_4`, `semester_5`, `semester_6`, `semester_7`, `semester_8` FROM `mahasiswa` WHERE nim_mahasiswa=".$nim." ";
		return $this->db->query($sql)->row();
	}

	function get_mhsprofil($mhs){
		$sql = "SELECT * from mahasiswa WHERE nim_mahasiswa = ".$mhs."";
		return $this->db->query($sql)->row();
	}

	function update_ip($nim,$data){
		$ip = (float) $data['ip'];
		if($data['semester']=='semester_1'){
			$sql = "UPDATE `mahasiswa` SET semester_1='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_2'){
			$sql = "UPDATE `mahasiswa` SET semester_2='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_3'){
			$sql = "UPDATE `mahasiswa` SET semester_3='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_4'){
			$sql = "UPDATE `mahasiswa` SET semester_4='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_5'){
			$sql = "UPDATE `mahasiswa` SET semester_5='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_6'){
			$sql = "UPDATE `mahasiswa` SET semester_6='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_7'){
			$sql = "UPDATE `mahasiswa` SET semester_7='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
		if($data['semester']=='semester_8'){
			$sql = "UPDATE `mahasiswa` SET semester_8='".$ip."'
                WHERE nim_mahasiswa=".$nim."";
			$this->db->query($sql);
		}
	}

	function get_profile_update($id, $data){

				$this->db->where('nim_mahasiswa', $id);
				$data = $this->db->update('mahasiswa', $data);
		}

		function delete($id){
			$this->db->delete('mahasiswa', array('nim_mahasiswa' => $id));
			$this->db->delete('users', array('username' => $id));
	    }

			function change_password($id,$data){
				$this->db->set('password',$data);
				$this->db->where('username',$id);
				$this->db->update('users');
			}
}
