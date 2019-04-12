<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public $sess;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

 function __construct() {
    parent::__construct();
    $this->load->model('model_mahasiswa');
		$this->load->model('model_dosen');
  }
	public function index()
	{
			$this->load->view('admin/navbar_admin');
			$this->load->view('admin/beranda_admin');
	}

	function input_mahasiswa(){
		$this->load->view('admin/navbar_admin');
		$this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_dosen->get_dosen();
		$this->load->view('admin/input_mahasiswa',$data);
	}

	function input_dosen(){
		$this->load->view('admin/navbar_admin');
		$this->load->view('admin/topbar_admin');
		$this->load->view('admin/input_dosen');

	}

	function view_mahasiswa(){
		$this->load->view('admin/navbar_admin');
		$this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_mahasiswa->get_mahasiswa();
		$this->load->view('admin/view_mahasiswa',$data);
	}

	function view_dosen(){
		$this->load->view('admin/navbar_admin');
		$this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_dosen->get_dosen();
		$this->load->view('admin/view_dosen',$data);
	}

	function assign_data(){
		$this->load->view('admin/navbar_admin');
		$this->load->view('admin/beranda_admin');
	}

	function tambah_dosen(){
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');

		$data = array(
			'nama_dosen' => $nama,
			'nip_dosen' => $nip
			);
		$this->model_dosen->input_data($data,'dosen');
		redirect('admin/input_dosen');
	}
}
