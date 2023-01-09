<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends CI_Model
{

  public function ambildata($tabel, $tabel2)
  {

    $this->db->join($tabel2, $tabel . '.nisn = ' . $tabel2 . '.nisn', 'left');

    return $this->db->get($tabel);
  }

  public function TambahPenilaianMuridBerdasarkanId($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id' => $id]);
  }

  public function LihatPenilaianMuridBerdasarkanId($tabel, $tabel2, $id)
  {

    $this->db->join($tabel2, $tabel . '.nisn = ' . $tabel2 . '.nisn', 'left');

    return $this->db->get_where($tabel, ['id' => $id]);
  }

  public function LihatPenilaianMurid($tabel, $tabel2)
  {

    $this->db->join($tabel2, $tabel . '.nisn = ' . $tabel2 . '.nisn', 'left');

    return $this->db->get($tabel);
  }

  public function EditData($tabel_kriteria, $tabel_rating, $data, $kriteria)
  {

    $this->db->where('id', $data['id']);
    $this->db->update($tabel_kriteria, $data);

    if ($data['nisn'] > 0) {

      $this->db->where('nisn', $data['nisn']);
      $this->db->delete($tabel_rating);
      $this->db->insert_batch($tabel_rating, $kriteria);
    } else {

      $this->db->insert_batch($tabel_rating, $kriteria);
    }
  }
}

/* End of file Penilaian_model.php */
