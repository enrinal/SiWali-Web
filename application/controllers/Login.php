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
        $this->session->set_userdata('logged_in', $sesdata);
        // login admin
        if($level === '1'){
            redirect('admin',"refresh");
        // login dosen
        }elseif($level === '2'){
            redirect('dosen',"refresh");
        // login mahasiswa
        }elseif($level === '3'){
            redirect('mahasiswa',"refresh");
        }
    }else{
        echo $this->session->set_flashdata('Username atau Password Salah');
        redirect('login');
    }
  }

//   public function masuk(){
//   $username = $this->input->post("username");
//   $password = $this->input->post("password");
//   if(isset($username) and $username == '' and isset($password) and $password == ''){
//     $info = url_title('username dan password yang anda masukan kosong');
//           redirect($this->config->item('base_url').'login?info='.$info, 'refresh');
//   }
//   $this->load->model('model_login');
//   $rst_auth = $this->model_login->cek($username,$password);
//   if ($rst_auth->num_rows() > 0) {
//       $sess_array = array(
//             'id'  => $id,
//             'username'  => $username,
//             'level'     => $level,
//             'login_status' => true
//           );
//           $this->session->set_userdata('logged_in', $sess_array);
//           if($level === '1'){
//               redirect('admin',"refresh");
//           // login dosen
//           }elseif($level === '2'){
//               redirect('dosen',"refresh");
//           // login mahasiswa
//           }elseif($level === '3'){
//               redirect('mahasiswa',"refresh");
//           }
//   } else {
//     $info = url_title('username dan password yang anda masukan salah');
//           redirect($this->config->item('base_url').'login/asp?info='.$info, 'refresh');
//   }
// }
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}
