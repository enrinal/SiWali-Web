<?php
class Login extends CI_Controller{
  function __construct() {
   parent::__construct();
   $this->load->model('model_login');
 }
  function index(){
    $this->load->view('home');
  }

  function masuk(){
    $username = $_POST['username'];
    $password = md5( $_POST['password'] );
    $validate = $this->model_login->cek($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id  = $data['id'];
        $username = $data['username'];
        $level = $data['level'];
        $sesdata = array(
            'id'  => $id,
            'username'  => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // login admin
        if($level === '1'){
            redirect('admin');
        // login dosen
        }elseif($level === '2'){
            redirect('dosen');
        // login mahasiswa
        }elseif($level === '3'){
            redirect('mahasiswa');
        }
    }else{
        echo $this->session->set_flashdata('Username atau Password Salah');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}
