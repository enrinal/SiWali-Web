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
		if (!$this->session->userdata('logged_in')) {
            redirect($this->config->item('base_url'), 'refresh');
        }
		if ( $this->session->userdata('level') != '1'){
            redirect($this->config->item('base_url'), 'refresh');
      }
        $this->sess = $this->session->userdata('logged_in');
				$this->load->model('model_mahasiswa');
				$this->load->model('model_dosen');

  }
	public function index()
	{
		$this->load->view('admin/beranda_admin');
	}

	function input_mahasiswa(){
		// $this->load->view('admin/sidebar_im-admin');
		// $this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_dosen->get_dosen();
		$this->load->view('admin/input_mahasiswa',$data);
	}

	function input_dosen(){
		// $this->load->view('admin/sidebar_im-admin');
		// $this->load->view('admin/topbar_admin');
		$this->load->view('admin/input_dosen');

	}

	function ganti_password(){
		// $this->load->view('admin/sidebar_im-admin');
		// $this->load->view('admin/topbar_admin');
		$this->load->view('admin/change_password');

	}

	function view_mahasiswa(){
		// $this->load->view('admin/sidebar_im-admin');
		// $this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_mahasiswa->get_mahasiswa();
		$this->load->view('admin/view_mahasiswa',$data);
	}

	function view_dosen(){
		// $this->load->view('admin/sidebar_im-admin');
		// $this->load->view('admin/topbar_admin');
		$data['query'] = $this->model_dosen->get_dosen();
		$this->load->view('admin/view_dosen',$data);
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

	function tambah_mahasiswa(){
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$angkatan = $this->input->post('angkatan');
		$nip = $this->input->post('dosen_wali');

		$data = array(
			'nama_mahasiswa' => $nama,
			'nim_mahasiswa' => $nim,
			'angkatan' => $angkatan,
			'nip_dosen' => $nip
			);
		$this->model_mahasiswa->save($data,'mahasiswa');
		redirect('admin/input_mahasiswa');
	}

	function deletedosen($id){
		$this->model_dosen->delete($id);
		redirect("admin/view_dosen");
	}

	function deletemahasiswa($id){
		$this->model_mahasiswa->delete($id);
		redirect("admin/view_mahasiswa");
	}

	function change_password(){
		$user = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->model_mahasiswa->change_password($user,$password);
		redirect("admin/ganti_password");
	}
}
