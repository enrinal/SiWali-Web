<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{


	function __construct() {
		 parent::__construct();
		 if (!$this->session->userdata('logged_in')) {
            redirect($this->config->item('base_url'), 'refresh');
        }
		if ( $this->session->userdata('level') != '3'){
						redirect($this->config->item('base_url'), 'refresh');
				}
     $this->sess = $this->session->userdata('logged_in');
		 $this->load->model('model_mahasiswa');
		 $this->load->model('model_dosen');
		 $this->load->model('model_ticket');
	 }

	 public function index()
	 {
	     $this->load->view('mahasiswa/beranda_mhs');
	 }

	 function profil()
	 {
		// $this->load->view('mahasiswa/navbar_mhs');
		// $this->load->view('mahasiswa/topbar_mhs');
		 $data['query'] = $this->model_mahasiswa->get_mhsprofil($this->session->userdata('username'));
		 $this->load->view('mahasiswa/profil_mhs',$data);
	 }
	 function lihatip()
	 {
		 $data['query'] = $this->model_mahasiswa->get_ip($this->session->userdata('username'));
		// $this->load->view('mahasiswa/navbar_mhs');
         //$this->load->view('mahasiswa/topbar_mhs');
		 $this->load->view('mahasiswa/lihatip',$data);
	 }
	 function uploadip()
	 {
		 // $this->load->view('mahasiswa/navbar_mhs');
		 // $this->load->view('mahasiswa/topbar_mhs');
		 $this->load->view('mahasiswa/uploadip');
	 }

	 function update_ip(){
		 $semester = $this->input->post('semester');
		 $ip = $this->input->post('ip');

		 $data = array(
			 'semester' => $semester,
			 'ip' => $ip
			 );
		 $this->model_mahasiswa->update_ip($this->session->userdata('username'),$data);
		 redirect('mahasiswa/uploadip');
	 }

		 public function update(){
	  	 $data = $this->input->post();
	  	 $result = $this->model_mahasiswa->get_profile_update($this->session->userdata('username'), $data);
	  	 redirect('mahasiswa/profil');
	  	 }

	 function konsultasi() {
		 $data['query'] = $this->model_ticket->get_ticket($this->session->userdata('username'));
 		 $this->load->view('mahasiswa/konsultasi_mhs',$data);
 	 }

	 function konsultasiclose() {
		 $data['query'] = $this->model_ticket->get_ticket_close($this->session->userdata('username'));
 		 $this->load->view('mahasiswa/konsultasi_mhs_close',$data);
 	 }

 	 function tiket(){
		$data['query'] = $this->model_mahasiswa->get_mhsprofil($this->session->userdata('username'));
 	 	$this->load->view('mahasiswa/create_ticket',$data);
 	 }

	 function submit_ticket(){
		 $subjek = $this->input->post('subjek');
		 $pesan = $this->input->post('pesan');
		 $nip_dosen = $this->input->post('nip_dosen');
		 $nim_mahasiswa  = $this->session->userdata('username');
		 $nip_dosen = $this->model_mahasiswa->get_mhsdosen($nim_mahasiswa);
		 $nama_mahasiswa = $this->model_mahasiswa->get_mhsnama($nim_mahasiswa);
		 $data = array(
			 'ticket_subjek' => $subjek,
			 'nim_mahasiswa' => $nim_mahasiswa,
			 'pesan' => $pesan,
			 'nip_dosen' => $nip_dosen->nip_dosen,
			 'nama_mahasiswa' => $nama_mahasiswa ->nama_mahasiswa
		 );
		 $this->model_ticket->create_ticket($data);
		 redirect('mahasiswa/konsultasi');
	 }

	 function send_pesan(){
		 $pesan = $this->input->post('pesan');
		 $ticket_id = $this->input->post('ticket_id');
		 $nim_mahasiswa  = $this->session->userdata('username');
		 $nama_mahasiswa = $this->model_mahasiswa->get_mhsnama($nim_mahasiswa);
		 $data = array(
			 'ticket_id' => $ticket_id,
			 'pesan'=> $pesan,
			 'pengirim' => $nama_mahasiswa->nama_mahasiswa,
			 'pesan_tanggal' => date('Y-m-d H:i:s')
		 );
		 $this->model_ticket->send_pesan($data);
		 redirect('mahasiswa/pesan/'.$ticket_id);
	 }

	 function ganti_password(){
 		// $this->load->view('admin/sidebar_im-admin');
 		// $this->load->view('admin/topbar_admin');
 		$this->load->view('mahasiswa/change_password');
 	}

	function change_password(){
		$user = $this->session->userdata('username');
		$password = md5($this->input->post('password'));
		$this->model_mahasiswa->change_password($user,$password);
		redirect($this->config->item('base_url'), 'refresh');
	}

	function pesan($id){
		$data['query'] = $this->model_ticket->get_pesan($id);
		$this->load->view('mahasiswa/pesan_mhs',$data);
	}

	function pesanclose($id){
		$data['query'] = $this->model_ticket->get_pesan($id);
		$this->load->view('mahasiswa/pesan_mhs_close',$data);
	}



}
