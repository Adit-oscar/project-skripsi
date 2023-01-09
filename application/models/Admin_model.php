<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  public function ambildata($tabel)
  {

    return $this->db->get($tabel);
  }

  public function TambahData($tabel, $data)
  {

    $this->db->insert($tabel, $data);
  }

  public function LihatData($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_admin' => $id]);
  }

  public function EditData($tabel, $data)
  {

    $this->db->where('id_admin', $data['id_admin']);
    $this->db->update($tabel, $data);
  }

  public function HapusData($id)
  {

    $this->db->where('id_admin', $id);
    $this->db->delete('admin');
  }
}

/* End of file ModelName.php */
