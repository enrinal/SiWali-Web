<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') <> '3')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'mahasiswa';
		$this->load->view($d);
	}
}