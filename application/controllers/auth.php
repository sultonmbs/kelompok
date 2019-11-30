<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{
	
  public function index()
  {
      $this->load->view('auth/login');
  }

  public function dasbor()
  {
      if (count($this->session->all_userdata()) == 1){
        redirect('auth');
      }
      else{
        $this->load->view('auth/dasbor');
      }
  }

   public function dasboradmin()
  {
      if (count($this->session->all_userdata()) == 1){
        redirect('auth');
      }
      else{
        $this->load->view('auth/dasboradmin');
      }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('auth');
  }

  public function login(){
    $data =  array(
      'username' => $this->input->post('username'), 
      'password' => hash("sha256", $this->input->post('pass')) 
    );

    $this->db->from('users');
    $array = array('username' => $data['username'], 'password' => $data['password']);
    $this->db->where($array);
    $query = $this->db->get()->row_array();

    if(count($query) > 0){
      if($query['username'] == 'admin'){
        $this->session->set_userdata($query);
        redirect('auth/dasboradmin');
      }
      else{
        $this->session->set_userdata($query);
        redirect('auth/dasbor');
      }
    }
    else{
      redirect('auth');
    }
  }

}
