<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function lihat_jumlah_admin($tabel)
    {
        return $this->db->get($tabel)->num_rows();
    }

    public function lihat_jumlah_murid($tabel)
    {
        return $this->db->get($tabel)->num_rows();
    }

    public function lihat_jumlah_kriteria($tabel)
    {
        return $this->db->get($tabel)->num_rows();
    }
}

/* End of file Home_model.php */
