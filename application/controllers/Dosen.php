<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller{
// 	function __construct(){
// 		parent::__construct();
// 		if($this->session->userdata('level') <> '2')
// 		{
// 			redirect('login');
// 		}
// 	}
//
// 	public function index(){
// 		$d['username'] = $this->session->userdata('username');
// 		$d['page'] = 'dosen';
// 		$this->load->view($d);
// 	}
// }

function __construct() {
	 parent::__construct();
	 if (!$this->session->userdata('logged_in')) {
            redirect($this->config->item('base_purl'), 'refresh');
        }
	$this->sess = $this->session->userdata('logged_in');
	 $this->load->model('model_mahasiswa');
	 $this->load->model('model_dosen');
 }

 public function index()
 {
     $this->load->view('dosen/beranda_dosen');
 }

 public function aksi_upload(){
		$config['upload_path']          = './upload/fotodosen';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			// $this->load->view('v_upload_sukses', $data);
		}
	}

 public function profil(){
 	 // $this->load->view('dosen/topbar_dosen');
 	 // $this->load->view('dosen/sidebar_dosen');
	 $data['query'] = $this->model_dosen->get_dosenprofil($this->sess['username']);
	 $this->load->view('dosen/profil-dosen',$data);
 }

 function mahasiswa_wali(){
	 // $this->load->view('dosen/navbar_dosen');
	 // $this->load->view('dosen/topbar_dosen');
	 $data['query'] = $this->model_mahasiswa->get_mahasiswawali($this->sess['username']);
	 $this->load->view('dosen/view_mahasiswa',$data);
 }
 function upload_laporan() {
 	$this->load->view('dosen/upload_laporan');
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
	  $result = $this->model_dosen->get_profile_update($this->sess['username'], $data);
		redirect('dosen/profil');
	 }
 }
