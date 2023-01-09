<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
  }

  public function index()
  {

    $this->form_validation->set_rules('username', 'Username', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('password', 'Password', 'required', array(
      'required' => '%s harus diisi !'
    ));


    if ($this->form_validation->run() ==  FALSE) {

      $data['judul_halaman'] = "Halaman Login";
      $this->load->view('login/index', $data);
    } else {
      $this->_login();
    }
  }

  private function _login()
  {

    $data['username'] = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->Login_model->validasi_login('admin', $data);

    if ($user) {
      if ($password == $user['password']) {

        redirect('home');
      } else {
        $this->session->set_flashdata('flash', 'Password Salah!');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('flash', 'Username Salah!');
      redirect('login');
    }
  }

  public function logout()
  {
    $this->session->set_flashdata('flash', 'Anda Telah Logout!');
    redirect('login');
  }
}
