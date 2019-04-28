<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{


	function __construct() {
		 parent::__construct();
		 if (!$this->session->userdata('logged_in')) {
            redirect($this->config->item('base_url'), 'refresh');
        }
         $this->sess = $this->session->userdata('logged_in');
		 $this->load->model('model_mahasiswa');
		 $this->load->model('model_dosen');
	 }

	 public function index()
	 {
	     $this->load->view('mahasiswa/beranda_mhs');
	 }

	 function profil()
	 {
		// $this->load->view('mahasiswa/navbar_mhs');
		// $this->load->view('mahasiswa/topbar_mhs');
		$data['query'] = $this->model_mahasiswa->get_mhsprofil($this->sess['username']);
		 $this->load->view('mahasiswa/profil_mhs',$data);
	 }
	 function lihatip()
	 {
		 $data['query'] = $this->model_mahasiswa->get_ip($this->sess['username']);
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
		 $this->model_mahasiswa->update_ip($this->sess['username'],$data);
		 redirect('mahasiswa/uploadip');
	 }



		 public function update(){
	  	 $data = $this->input->post();
	  	 // $config['upload_path']          = './upload/fotodosen/';
	  	 // $config['allowed_types']        = 'gif|jpg|png';
	  	 // $config['max_size']             = 100;
	  	 // $config['max_width']            = 1024;
	  	 // $config['max_height']           = 768;
	  	 //
	  	 // $this->load->library('upload', $config);
	  	 //
	  	 // if ( ! $this->upload->do_upload('berkas')){
	  		//  $error = array('error' => $this->upload->display_errors());
	  		//  $this->load->view('v_upload', $error);
	  	 // }else{
	  		//  $data = array('upload_data' => $this->upload->data());
	  		//  $this->load->view('v_upload_sukses', $data);
	  	 // }
	  	 // if(isset($_FILES['foto_dosen']['name']) and $_FILES['foto_dosen']['name']){
	  		//  $data['foto_dosen'] = $_FILES['foto_dosen']['name'];
	  	 // }
	  	  $result = $this->model_mahasiswa->get_profile_update($this->sess['username'], $data);
	  		redirect('mahasiswa/profil');
	  	 }
	 function konsultasi() {
 		 $this->load->view('mahasiswa/konsultasi_mhs');
 	 }

 	 function tiket(){
 	 	$this->load->view('mahasiswa/create_ticket');
 	 }

}
