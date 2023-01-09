<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_model extends CI_Model
{

  public function ambildata($tabel)
  {

    $this->db->group_by('nisn');
    return $this->db->get($tabel);
  }

  public function ambildatarating($tabel_rating, $tabel_murid)
  {

    $query = 'SELECT nisn, 

    SUM( IF (id_kriteria = 1, nilai, NULL) ) AS kriteria1,
    SUM( IF (id_kriteria = 2, nilai, NULL) ) AS kriteria2, 
    SUM( IF (id_kriteria = 3, nilai, NULL) ) AS kriteria3, 
    SUM( IF (id_kriteria = 4, nilai, NULL) ) AS kriteria4, 
    SUM( IF (id_kriteria = 5, nilai, NULL) ) AS kriteria5, 
    SUM( IF (id_kriteria = 6, nilai, NULL) ) AS kriteria6, 
    SUM( IF (id_kriteria = 7, nilai, NULL) ) AS kriteria7, 
    SUM( IF (id_kriteria = 8, nilai, NULL) ) AS kriteria8,
    SUM( IF (id_kriteria = 9, nilai, NULL) ) AS kriteria9, 
    SUM( IF (id_kriteria = 10, nilai, NULL) ) AS kriteria10, 
    SUM( IF (id_kriteria = 11, nilai, NULL) ) AS kriteria11, 
    SUM( IF (id_kriteria = 12, nilai, NULL) ) AS kriteria12, 
    SUM( IF (id_kriteria = 13, nilai, NULL) ) AS kriteria13, 
    SUM( IF (id_kriteria = 14, nilai, NULL) ) AS kriteria14, 
    SUM( IF (id_kriteria = 15, nilai, NULL) ) AS kriteria15, 
    SUM( IF (id_kriteria = 16, nilai, NULL) ) AS kriteria16, 
    SUM( IF (id_kriteria = 17, nilai, NULL) ) AS kriteria17, 
    SUM( IF (id_kriteria = 18, nilai, NULL) ) AS kriteria18, 
    SUM( IF (id_kriteria = 19, nilai, NULL) ) AS kriteria19, 
    SUM( IF (id_kriteria = 20, nilai, NULL) ) AS kriteria20, 
    SUM( IF (id_kriteria = 21, nilai, NULL) ) AS kriteria21, 
    SUM( IF (id_kriteria = 22, nilai, NULL) ) AS kriteria22, 
    SUM( IF (id_kriteria = 23, nilai, NULL) ) AS kriteria23, 
    SUM( IF (id_kriteria = 24, nilai, NULL) ) AS kriteria24, 
    SUM( IF (id_kriteria = 25, nilai, NULL) ) AS kriteria25, 
    SUM( IF (id_kriteria = 26, nilai, NULL) ) AS kriteria26, 
    SUM( IF (id_kriteria = 27, nilai, NULL) ) AS kriteria27, 
    SUM( IF (id_kriteria = 28, nilai, NULL) ) AS kriteria28, 
    SUM( IF (id_kriteria = 29, nilai, NULL) ) AS kriteria29, 
    SUM( IF (id_kriteria = 30, nilai, NULL) ) AS kriteria30, 
    SUM( IF (id_kriteria = 31, nilai, NULL) ) AS kriteria31, 
    SUM( IF (id_kriteria = 32, nilai, NULL) ) AS kriteria32, 
    SUM( IF (id_kriteria = 33, nilai, NULL) ) AS kriteria33, 
    SUM( IF (id_kriteria = 34, nilai, NULL) ) AS kriteria34, 
    SUM( IF (id_kriteria = 35, nilai, NULL) ) AS kriteria35, 
    SUM( IF (id_kriteria = 36, nilai, NULL) ) AS kriteria36, 
    SUM( IF (id_kriteria = 37, nilai, NULL) ) AS kriteria37, 
    SUM( IF (id_kriteria = 38, nilai, NULL) ) AS kriteria38,
    ' . $tabel_murid . '.nama

    FROM ' . $tabel_rating . ' 

    LEFT JOIN ' . $tabel_murid . ' USING (nisn)

    GROUP BY nisn

    ';

    return $this->db->query($query);
  }

  public function ambil_nilai_data_rating($tabel)
  {

    $query = 'SELECT nisn, 
    
    SUM( IF (id_kriteria = 1, nilai, NULL) ) AS kriteria1,
    SUM( IF (id_kriteria = 2, nilai, NULL) ) AS kriteria2, 
    SUM( IF (id_kriteria = 3, nilai, NULL) ) AS kriteria3, 
    SUM( IF (id_kriteria = 4, nilai, NULL) ) AS kriteria4, 
    SUM( IF (id_kriteria = 5, nilai, NULL) ) AS kriteria5, 
    SUM( IF (id_kriteria = 6, nilai, NULL) ) AS kriteria6, 
    SUM( IF (id_kriteria = 7, nilai, NULL) ) AS kriteria7, 
    SUM( IF (id_kriteria = 8, nilai, NULL) ) AS kriteria8,
    SUM( IF (id_kriteria = 9, nilai, NULL) ) AS kriteria9, 
    SUM( IF (id_kriteria = 10, nilai, NULL) ) AS kriteria10, 
    SUM( IF (id_kriteria = 11, nilai, NULL) ) AS kriteria11, 
    SUM( IF (id_kriteria = 12, nilai, NULL) ) AS kriteria12, 
    SUM( IF (id_kriteria = 13, nilai, NULL) ) AS kriteria13, 
    SUM( IF (id_kriteria = 14, nilai, NULL) ) AS kriteria14, 
    SUM( IF (id_kriteria = 15, nilai, NULL) ) AS kriteria15, 
    SUM( IF (id_kriteria = 16, nilai, NULL) ) AS kriteria16, 
    SUM( IF (id_kriteria = 17, nilai, NULL) ) AS kriteria17, 
    SUM( IF (id_kriteria = 18, nilai, NULL) ) AS kriteria18, 
    SUM( IF (id_kriteria = 19, nilai, NULL) ) AS kriteria19, 
    SUM( IF (id_kriteria = 20, nilai, NULL) ) AS kriteria20, 
    SUM( IF (id_kriteria = 21, nilai, NULL) ) AS kriteria21, 
    SUM( IF (id_kriteria = 22, nilai, NULL) ) AS kriteria22, 
    SUM( IF (id_kriteria = 23, nilai, NULL) ) AS kriteria23, 
    SUM( IF (id_kriteria = 24, nilai, NULL) ) AS kriteria24, 
    SUM( IF (id_kriteria = 25, nilai, NULL) ) AS kriteria25, 
    SUM( IF (id_kriteria = 26, nilai, NULL) ) AS kriteria26, 
    SUM( IF (id_kriteria = 27, nilai, NULL) ) AS kriteria27, 
    SUM( IF (id_kriteria = 28, nilai, NULL) ) AS kriteria28, 
    SUM( IF (id_kriteria = 29, nilai, NULL) ) AS kriteria29, 
    SUM( IF (id_kriteria = 30, nilai, NULL) ) AS kriteria30, 
    SUM( IF (id_kriteria = 31, nilai, NULL) ) AS kriteria31, 
    SUM( IF (id_kriteria = 32, nilai, NULL) ) AS kriteria32, 
    SUM( IF (id_kriteria = 33, nilai, NULL) ) AS kriteria33, 
    SUM( IF (id_kriteria = 34, nilai, NULL) ) AS kriteria34, 
    SUM( IF (id_kriteria = 35, nilai, NULL) ) AS kriteria35, 
    SUM( IF (id_kriteria = 36, nilai, NULL) ) AS kriteria36, 
    SUM( IF (id_kriteria = 37, nilai, NULL) ) AS kriteria37, 
    SUM( IF (id_kriteria = 38, nilai, NULL) ) AS kriteria38

    FROM ' . $tabel . ' 

    GROUP BY nisn

    ';

    return $this->db->query($query);
  }

  public function nilai_bobot($tabel)
  {

    $query = 'SELECT
    
    SUM( IF (id_kriteria = 1, bobot, NULL) ) AS bobot1,
    SUM( IF (id_kriteria = 2, bobot, NULL) ) AS bobot2, 
    SUM( IF (id_kriteria = 3, bobot, NULL) ) AS bobot3, 
    SUM( IF (id_kriteria = 4, bobot, NULL) ) AS bobot4, 
    SUM( IF (id_kriteria = 5, bobot, NULL) ) AS bobot5, 
    SUM( IF (id_kriteria = 6, bobot, NULL) ) AS bobot6, 
    SUM( IF (id_kriteria = 7, bobot, NULL) ) AS bobot7,
    SUM( IF (id_kriteria = 8, bobot, NULL) ) AS bobot8, 
    SUM( IF (id_kriteria = 9, bobot, NULL) ) AS bobot9, 
    SUM( IF (id_kriteria = 10, bobot, NULL) ) AS bobot10, 
    SUM( IF (id_kriteria = 11, bobot, NULL) ) AS bobot11, 
    SUM( IF (id_kriteria = 12, bobot, NULL) ) AS bobot12, 
    SUM( IF (id_kriteria = 13, bobot, NULL) ) AS bobot13, 
    SUM( IF (id_kriteria = 14, bobot, NULL) ) AS bobot14, 
    SUM( IF (id_kriteria = 15, bobot, NULL) ) AS bobot15, 
    SUM( IF (id_kriteria = 16, bobot, NULL) ) AS bobot16, 
    SUM( IF (id_kriteria = 17, bobot, NULL) ) AS bobot17, 
    SUM( IF (id_kriteria = 18, bobot, NULL) ) AS bobot18, 
    SUM( IF (id_kriteria = 19, bobot, NULL) ) AS bobot19, 
    SUM( IF (id_kriteria = 20, bobot, NULL) ) AS bobot20, 
    SUM( IF (id_kriteria = 21, bobot, NULL) ) AS bobot21, 
    SUM( IF (id_kriteria = 22, bobot, NULL) ) AS bobot22, 
    SUM( IF (id_kriteria = 23, bobot, NULL) ) AS bobot23, 
    SUM( IF (id_kriteria = 24, bobot, NULL) ) AS bobot24, 
    SUM( IF (id_kriteria = 25, bobot, NULL) ) AS bobot25, 
    SUM( IF (id_kriteria = 26, bobot, NULL) ) AS bobot26, 
    SUM( IF (id_kriteria = 27, bobot, NULL) ) AS bobot27, 
    SUM( IF (id_kriteria = 28, bobot, NULL) ) AS bobot28, 
    SUM( IF (id_kriteria = 29, bobot, NULL) ) AS bobot29, 
    SUM( IF (id_kriteria = 30, bobot, NULL) ) AS bobot30, 
    SUM( IF (id_kriteria = 31, bobot, NULL) ) AS bobot31, 
    SUM( IF (id_kriteria = 32, bobot, NULL) ) AS bobot32, 
    SUM( IF (id_kriteria = 33, bobot, NULL) ) AS bobot33, 
    SUM( IF (id_kriteria = 34, bobot, NULL) ) AS bobot34, 
    SUM( IF (id_kriteria = 35, bobot, NULL) ) AS bobot35,
    SUM( IF (id_kriteria = 36, bobot, NULL) ) AS bobot36,
    SUM( IF (id_kriteria = 37, bobot, NULL) ) AS bobot37,
    SUM( IF (id_kriteria = 38, bobot, NULL) ) AS bobot38

    FROM ' . $tabel . '
    
    ';

    return $this->db->query($query);
  }

  public function jenis_kriteria_1($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_2($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_3($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_4($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_5($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_6($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_7($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_8($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_9($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_10($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_11($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_12($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_13($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_14($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_15($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_16($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_17($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_18($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_19($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_20($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_21($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_22($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_23($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_24($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_25($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_26($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_27($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_28($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_29($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_30($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_31($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_32($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_33($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_34($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_35($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_36($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_37($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }

  public function jenis_kriteria_38($tabel, $id)
  {

    return $this->db->get_where($tabel, ['id_kriteria' => $id]);
  }
}
