<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_ticket extends CI_Model{
  function create_ticket($data){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    $this->db->trans_begin();
    $ticket_id = $randomString;
    $data_ticket = array(
      'ticket_id' => $ticket_id,
      'ticket_subjek' => $data['ticket_subjek'],
      'ticket_time' => date('Y-m-d H:i:s'),
      'nim_mahasiswa' => $data['nim_mahasiswa'],
      'nip_dosen' => $data['nip_dosen']
    );
    $this->db->insert('ticket',$data_ticket);
    $data_pesan = array(
      'ticket_id' =>$ticket_id,
      'pengirim' => $data['nama_mahasiswa'],
      'pesan' =>$data['pesan'],
      'pesan_tanggal' => date('Y-m-d H:i:s')
    );
    $this->db->insert('pesan',$data_pesan);
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

  function send_pesan($data){
    $this->db->insert('pesan',$data);

  }

  function get_pesan($id){
    $sql = "SELECT * FROM `pesan` WHERE `ticket_id`='".$id."' ORDER BY `pesan`.`pesan_tanggal` ASC" ;
    return $this->db->query($sql)->result();

  }
  function get_ticket($nim){
    $sql = "SELECT * FROM `ticket` JOIN `mahasiswa` on `ticket`.`nim_mahasiswa`
    = `mahasiswa`.`nim_mahasiswa` JOIN `dosen`
    on `ticket`.`nip_dosen` = `dosen`.`nip_dosen`  WHERE `mahasiswa`.`nim_mahasiswa`=".$nim." AND `ticket`.`status`='1'  ORDER BY ticket_time DESC";
    return $this->db->query($sql)->result();
  }

  function get_ticket_close($nim){
    $sql = "SELECT * FROM `ticket` JOIN `mahasiswa` on `ticket`.`nim_mahasiswa`
    = `mahasiswa`.`nim_mahasiswa` JOIN `dosen`
    on `ticket`.`nip_dosen` = `dosen`.`nip_dosen`  WHERE `mahasiswa`.`nim_mahasiswa`=".$nim." AND `ticket`.`status`='0'  ORDER BY ticket_time DESC";
    return $this->db->query($sql)->result();
  }

  function get_ticket_dosen_open($nip){
    $sql = "SELECT * FROM `ticket` JOIN `mahasiswa` on `ticket`.`nim_mahasiswa`
    = `mahasiswa`.`nim_mahasiswa` JOIN `dosen`
    on `ticket`.`nip_dosen` = `dosen`.`nip_dosen` WHERE `dosen`.`nip_dosen`=".$nip." AND `ticket`.`status`='1' ORDER BY ticket_time DESC";
    return $this->db->query($sql)->result();
  }

  function get_ticket_dosen_close($nip){
    $sql = "SELECT * FROM `ticket` JOIN `mahasiswa` on `ticket`.`nim_mahasiswa`
    = `mahasiswa`.`nim_mahasiswa` JOIN `dosen`
    on `ticket`.`nip_dosen` = `dosen`.`nip_dosen` WHERE `dosen`.`nip_dosen`=".$nip." AND `ticket`.`status`='0' ORDER BY ticket_time DESC";
    return $this->db->query($sql)->result();
  }

  function close_ticket($data){
    $this->db->set('status','0');
		$this->db->where('ticket_id',$data);
		$this->db->update('ticket');
  }

}
