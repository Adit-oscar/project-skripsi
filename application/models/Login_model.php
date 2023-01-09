<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function validasi_login($tabel, $data)
  {
    $user = $data['username'];
    return $this->db->get_where($tabel, ['username' => $user])->row_array();
  }

  public function cek_session()
  {

    $user = $this->session->sess_destroy('username');

    if (!empty($user)) {

      $this->session->sess_destroy();
      redirect('login');
    }
  }
}

/* End of file Login_model.php */
