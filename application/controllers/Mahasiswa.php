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
			 $this->load->view('mahasiswa/navbar_mhs');
			 $this->load->view('mahasiswa/beranda_mhs');
	 }

	 function profil()
	 {
		 $this->load->view('mahasiswa/navbar_mhs');
		 $this->load->view('mahasiswa/topbar_mhs');
		 $this->load->view('mahasiswa/profil_mhs');
	 }
	 function lihatip()
	 {
		 $this->load->view('mahasiswa/navbar_mhs');
		 $this->load->view('mahasiswa/topbar_mhs');
		 $this->load->view('mahasiswa/lihatip');
	 }
	 function uploadip()
	 {
		 $this->load->view('mahasiswa/navbar_mhs');
		 $this->load->view('mahasiswa/topbar_mhs');
		 $this->load->view('mahasiswa/uploadip');
	 }
}
