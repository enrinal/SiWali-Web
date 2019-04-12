<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'admin';
		$this->load->view('beranda_admin');
	}
}
