<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') <> '2')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'dosen';
		$this->load->view($d);
	}
}
