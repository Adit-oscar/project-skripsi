<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_model extends CI_Model {

  public function ambildata($tabel) {

    return $this->db->get($tabel);

  }

  public function LihatKriteriaBerdasarkanId($tabel, $id) {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);       

  }

  public function EditData($tabel, $data) {

    $this->db->where('id_kriteria', $data['id_kriteria']);
    $this->db->update($tabel, $data);

  }

}

/* End of file ModelName.php */
