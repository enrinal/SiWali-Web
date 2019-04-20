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
            redirect($this->config->item('base_url'), 'refresh');
        }
        $this->sess = $this->session->userdata('logged_in');
	 $this->load->model('model_mahasiswa');
	 $this->load->model('model_dosen');
 }

 public function index()
 {
     $this->load->view('dosen/beranda_dosen');
 }

 public function profil(){
 	 // $this->load->view('dosen/topbar_dosen');
 	 // $this->load->view('dosen/sidebar_dosen');
	 $this->load->view('dosen/profil-dosen');
 }

 function mahasiswa_wali(){
	 // $this->load->view('dosen/navbar_dosen');
	 // $this->load->view('dosen/topbar_dosen');
	 $data['query'] = $this->model_mahasiswa->get_mahasiswa();
	 $this->load->view('dosen/view_mahasiswa',$data);
 }
}
