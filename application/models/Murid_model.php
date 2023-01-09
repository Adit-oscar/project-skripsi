<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Murid_model extends CI_Model
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

    return $this->db->get_where($tabel, ['id_siswa' => $id]);
  }

  public function EditData($tabel, $data)
  {

    $this->db->where('id_siswa', $data['id_siswa']);
    $this->db->update($tabel, $data);
  }

  public function HapusData($tabel, $id)
  {

    $this->db->where('id_siswa', $id);
    $this->db->delete($tabel);
  }
}

/* End of file ModelName.php */
