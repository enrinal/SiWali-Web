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
	 if ( $this->session->userdata('level') != '2'){
	          redirect($this->config->item('base_url'), 'refresh');
	      }
   $this->sess = $this->session->userdata('logged_in');
	 $this->load->model('model_mahasiswa');
	 $this->load->model('model_dosen');
	 $this->load->model('model_ticket');
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
	 $data['query'] = $this->model_dosen->get_dosenprofil($this->session->userdata('username'));
	 $this->load->view('dosen/profil-dosen',$data);
 }

 function mahasiswa_wali(){
	 // $this->load->view('dosen/navbar_dosen');
	 // $this->load->view('dosen/topbar_dosen');
	 $data['query'] = $this->model_mahasiswa->get_mahasiswawali($this->session->userdata('username'));
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
	  $result = $this->model_dosen->get_profile_update($this->session->userdata('username'), $data);
		redirect('dosen/profil');
	 }
	 function konsultasi() {
		 $data['query'] = $this->model_ticket->get_ticket_dosen_open($this->session->userdata('username'));
 		 $this->load->view('dosen/konsultasi_dosen',$data);
 	 }
	 function konsultasiclose() {
		 $data['query'] = $this->model_ticket->get_ticket_dosen_close($this->session->userdata('username'));
 		 $this->load->view('dosen/konsultasi_dosen_close',$data);
 	 }

	 function ganti_password(){
 		// $this->load->view('admin/sidebar_im-admin');
 		// $this->load->view('admin/topbar_admin');
 		$this->load->view('dosen/change_password');

 	}

	function change_password(){
		$user = $this->session->userdata('username');
		$password = md5($this->input->post('password'));
		$this->model_mahasiswa->change_password($user,$password);
		redirect($this->config->item('base_url'), 'refresh');
	}

	function flagmahasiswa(){
		$data = $this->uri->segment(3);
		$flag = $this->uri->segment(4);
		$this->model_dosen->flag($data,$flag);
		redirect('dosen/mahasiswa_wali');
	}

	function profilmahasiswa(){
		$data['query'] = $this->model_mahasiswa->get_mhsprofil($this->uri->segment(3));
		$this->load->view('dosen/profil_mhs',$data);
	}

	function nimmahasiswa(){
		$data['query'] = $this->model_mahasiswa->get_ip($this->uri->segment(3));
	  $this->load->view('dosen/lihatip',$data);
	}

	public function uploadlaporan(){
		$dosen = $this->model_dosen;
	  $dosen->savelaporan();
	  $this->load->view("dosen/upload_laporan");
	}

	function lihat_laporan(){
				$data['query'] = $this->model_dosen->get_laporan();
				$this->load->view('dosen/view_laporan',$data);
	}

	function pesan($id){
		$data['query'] = $this->model_ticket->get_pesan($id);
		$this->load->view('dosen/pesan_dosen',$data);
	}

	function pesanclose($id){
		$data['query'] = $this->model_ticket->get_pesan($id);
		$this->load->view('dosen/pesan_dosen_close',$data);
	}

	function send_pesan(){
		$pesan = $this->input->post('pesan');
		$ticket_id = $this->input->post('ticket_id');
		$nip_dosen  = $this->session->userdata('username');
		$nama_dosen = $this->model_dosen->get_dosenprofil($nip_dosen);
		$data = array(
			'ticket_id' => $ticket_id,
			'pesan'=> $pesan,
			'pengirim' => $nama_dosen->nama_dosen,
			'pesan_tanggal' => date('Y-m-d H:i:s')
		);
		$this->model_ticket->send_pesan($data);
		redirect('dosen/pesan/'.$ticket_id);
	}

	function close_ticket($id){
		$this->model_ticket->close_ticket($id);
		redirect('dosen/konsultasi');
	}
 }
