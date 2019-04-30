<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dosen extends CI_Model{

	private $_table = "laporan";

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

	function get_profile_update($id, $data){
        $this->db->where('nip_dosen', $id);
        $data = $this->db->update('dosen', $data);
    }

	function delete($id){
		$this->db->delete('dosen', array('nip_dosen' => $id));
		$this->db->delete('users', array('username' => $id));
    }

	function change_password($id,$data){
		$this->db->set('password',$data);
		$this->db->where('username',$id);
		$this->db->update('users');
	}

	function flag($id,$flag){
		if($flag=="1"){
			$this->db->set('flag','0');
		}else {
			$this->db->set('flag','1');
		}
		$this->db->where('nim_mahasiswa',$id);
		$this->db->update('mahasiswa');
	}
	private function _uploadberkas()
	{
		$config['upload_path']          = './upload/berkas/';
		$config['allowed_types']        = 'pdf';
		$config['overwrite']			      = true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('berkas_laporan')) {
			return $this->upload->data("file_name");
		}
	}

	public function savelaporan()
    {
        $post = $this->input->post();
        $this->tgl_upload = date('Y-m-d H:i:s');;
		    $this->semester = $post["semester"];
				$this->tahun_ajaran = $post["tahun_ajaran"];
				$this->nip_dosen = $this->session->userdata('username');
		    $this->berkas_laporan = $this->_uploadberkas();
        $this->db->insert($this->_table, $this);
    }

		function get_laporan(){
			$sql = "SELECT * FROM `laporan` JOIN `dosen` ON `laporan`.`nip_dosen` = `dosen`.`nip_dosen`";
			return $this->db->query($sql)->result();
		}
}
