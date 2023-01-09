<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Rating_model');
  }

  public function index()
  {
    $data = [
      "judul_halaman" => "Halaman Rating Kecocokan",
      "judul_tabel" => "Tabel Rating Kecocokan",
      "nisn" => $this->Rating_model->ambildata('tabel_nilai_rating_kecocokan')->result()
    ];

    $this->load->view('template/header', $data);
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    $this->load->view('rating/index', $data);
    $this->load->view('template/footer');
  }

  public function detail($nisn)
  {

    // Pengambilan nilai bobot
    $bobot = $this->Rating_model->nilai_bobot('tabel_kriteria')->result();

    foreach ($bobot as $bobot) {

      $nb_1 = $bobot->bobot1;
      $nb_2 = $bobot->bobot2;
      $nb_3 = $bobot->bobot3;
      $nb_4 = $bobot->bobot4;
      $nb_5 = $bobot->bobot5;
      $nb_6 = $bobot->bobot6;
      $nb_7 = $bobot->bobot7;
      $nb_8 = $bobot->bobot8;
      $nb_9 = $bobot->bobot9;
      $nb_10 = $bobot->bobot10;
      $nb_11 = $bobot->bobot11;
      $nb_12 = $bobot->bobot12;
      $nb_13 = $bobot->bobot13;
      $nb_14 = $bobot->bobot14;
      $nb_15 = $bobot->bobot15;
      $nb_16 = $bobot->bobot16;
      $nb_17 = $bobot->bobot17;
      $nb_18 = $bobot->bobot18;
      $nb_19 = $bobot->bobot19;
      $nb_20 = $bobot->bobot20;
      $nb_21 = $bobot->bobot21;
      $nb_22 = $bobot->bobot22;
      $nb_23 = $bobot->bobot23;
      $nb_24 = $bobot->bobot24;
      $nb_25 = $bobot->bobot25;
      $nb_26 = $bobot->bobot26;
      $nb_27 = $bobot->bobot27;
      $nb_28 = $bobot->bobot28;
      $nb_29 = $bobot->bobot29;
      $nb_30 = $bobot->bobot30;
      $nb_31 = $bobot->bobot31;
      $nb_32 = $bobot->bobot32;
      $nb_33 = $bobot->bobot33;
      $nb_34 = $bobot->bobot34;
      $nb_35 = $bobot->bobot35;
      $nb_36 = $bobot->bobot36;
      $nb_37 = $bobot->bobot37;
      $nb_38 = $bobot->bobot38;
    }

    // Bobot kriteria 1
    $bk1 = round($nb_1, 3);

    // Bobot kriteria 2
    $bk2 = round($nb_2, 3);

    // Bobot kriteria 3
    $bk3 = round($nb_3, 3);

    // Bobot kriteria 4
    $bk4 = round($nb_4, 3);

    // Bobot kriteria 5
    $bk5 = round($nb_5, 3);

    // Bobot kriteria 6
    $bk6 = round($nb_6, 3);

    // Bobot kriteria 7
    $bk7 = round($nb_7, 3);

    // Bobot kriteria 8
    $bk8 = round($nb_8, 3);

    // Bobot kriteria 9
    $bk9 = round($nb_9, 3);

    // Bobot kriteria 10
    $bk10 = round($nb_10, 3);

    // Bobot kriteria 11
    $bk11 = round($nb_11, 3);

    // Bobot kriteria 12
    $bk12 = round($nb_12, 3);

    // Bobot kriteria 13
    $bk13 = round($nb_13, 3);

    // Bobot kriteria 14
    $bk14 = round($nb_14, 3);

    // Bobot kriteria 15
    $bk15 = round($nb_15, 3);

    // Bobot kriteria 16
    $bk16 = round($nb_16, 3);

    // Bobot kriteria 17
    $bk17 = round($nb_17, 3);

    // Bobot kriteria 18
    $bk18 = round($nb_18, 3);

    // Bobot kriteria 19
    $bk19 = round($nb_19, 3);

    // Bobot kriteria 20
    $bk20 = round($nb_20, 3);

    // Bobot kriteria 21
    $bk21 = round($nb_21, 3);

    // Bobot kriteria 22
    $bk22 = round($nb_22, 3);

    // Bobot kriteria 23
    $bk23 = round($nb_23, 3);

    // Bobot kriteria 24
    $bk24 = round($nb_24, 3);

    // Bobot kriteria 25
    $bk25 = round($nb_25, 3);

    // Bobot kriteria 26
    $bk26 = round($nb_26, 3);

    // Bobot kriteria 27
    $bk27 = round($nb_27, 3);

    // Bobot kriteria 28
    $bk28 = round($nb_28, 3);

    // Bobot kriteria 29
    $bk29 = round($nb_29, 3);

    // Bobot kriteria 30
    $bk30 = round($nb_30, 3);

    // Bobot kriteria 31
    $bk31 = round($nb_31, 3);

    // Bobot kriteria 32
    $bk32 = round($nb_32, 3);

    // Bobot kriteria 33
    $bk33 = round($nb_33, 3);

    // Bobot kriteria 34
    $bk34 = round($nb_34, 3);

    // Bobot kriteria 35
    $bk35 = round($nb_35, 3);

    // Bobot kriteria 36
    $bk36 = round($nb_36, 3);

    // Bobot kriteria 37
    $bk37 = round($nb_37, 3);

    // Bobot kriteria 38
    $bk38 = round($nb_38, 3);

    // Pengambilan nilai kriteria
    $nilai_kriteria = $this->Rating_model->ambildatarating('tabel_nilai_rating_kecocokan', $nisn)->result();

    foreach ($nilai_kriteria as $nilai_kriteria) {
      $nilai_k1 = pow($nilai_kriteria->kriteria1, 2);
      $nilai_k2 = pow($nilai_kriteria->kriteria2, 2);
      $nilai_k3 = pow($nilai_kriteria->kriteria3, 2);
      $nilai_k4 = pow($nilai_kriteria->kriteria4, 2);
      $nilai_k5 = pow($nilai_kriteria->kriteria5, 2);
      $nilai_k6 = pow($nilai_kriteria->kriteria6, 2);
      $nilai_k7 = pow($nilai_kriteria->kriteria7, 2);
      $nilai_k8 = pow($nilai_kriteria->kriteria8, 2);
      $nilai_k9 = pow($nilai_kriteria->kriteria9, 2);
      $nilai_k10 = pow($nilai_kriteria->kriteria10, 2);
      $nilai_k11 = pow($nilai_kriteria->kriteria11, 2);
      $nilai_k12 = pow($nilai_kriteria->kriteria12, 2);
      $nilai_k13 = pow($nilai_kriteria->kriteria13, 2);
      $nilai_k14 = pow($nilai_kriteria->kriteria14, 2);
      $nilai_k15 = pow($nilai_kriteria->kriteria15, 2);
      $nilai_k16 = pow($nilai_kriteria->kriteria16, 2);
      $nilai_k17 = pow($nilai_kriteria->kriteria17, 2);
      $nilai_k18 = pow($nilai_kriteria->kriteria18, 2);
      $nilai_k19 = pow($nilai_kriteria->kriteria19, 2);
      $nilai_k20 = pow($nilai_kriteria->kriteria20, 2);
      $nilai_k21 = pow($nilai_kriteria->kriteria21, 2);
      $nilai_k22 = pow($nilai_kriteria->kriteria22, 2);
      $nilai_k23 = pow($nilai_kriteria->kriteria23, 2);
      $nilai_k24 = pow($nilai_kriteria->kriteria24, 2);
      $nilai_k25 = pow($nilai_kriteria->kriteria25, 2);
      $nilai_k26 = pow($nilai_kriteria->kriteria26, 2);
      $nilai_k27 = pow($nilai_kriteria->kriteria27, 2);
      $nilai_k28 = pow($nilai_kriteria->kriteria28, 2);
      $nilai_k29 = pow($nilai_kriteria->kriteria29, 2);
      $nilai_k30 = pow($nilai_kriteria->kriteria30, 2);
      $nilai_k31 = pow($nilai_kriteria->kriteria31, 2);
      $nilai_k32 = pow($nilai_kriteria->kriteria32, 2);
      $nilai_k33 = pow($nilai_kriteria->kriteria33, 2);
      $nilai_k34 = pow($nilai_kriteria->kriteria34, 2);
      $nilai_k35 = pow($nilai_kriteria->kriteria35, 2);
      $nilai_k36 = pow($nilai_kriteria->kriteria36, 2);
      $nilai_k37 = pow($nilai_kriteria->kriteria37, 2);
      $nilai_k38 = pow($nilai_kriteria->kriteria38, 2);
    }


    // Pengambilan nilai c1
    $nilai_c1 = sqrt($nilai_k1 + $nilai_k2);
    $c1 = round($nilai_c1, 3);

    // Pengambilan nilai c2
    $nilai_c2 = sqrt($nilai_k3 + $nilai_k3);
    $c2 = round($nilai_c2, 3);

    // Pengambilan nilai c3
    $nilai_c3 = sqrt($nilai_k4 + $nilai_k5);
    $c3 = round($nilai_c3, 3);

    // Pengambilan nilai c4
    $nilai_c4 = sqrt($nilai_k6 + $nilai_k6);
    $c4 = round($nilai_c4, 3);

    // Pengambilan nilai c5
    $nilai_c5 = sqrt($nilai_k7 + $nilai_k7);
    $c5 = round($nilai_c5, 3);

    // Pengambilan nilai c6
    $nilai_c6 = sqrt($nilai_k8 + $nilai_k8);
    $c6 = round($nilai_c6, 3);

    // Pengambilan nilai c7
    $nilai_c7 = sqrt($nilai_k9 + $nilai_k9);
    $c7 = round($nilai_c7, 3);

    // Pengambilan nilai c8
    $nilai_c8 = sqrt($nilai_k10 + $nilai_k10);
    $c8 = round($nilai_c8, 3);

    // Pengambilan nilai c9
    $nilai_c9 = sqrt($nilai_k11 + $nilai_k11);
    $c9 = round($nilai_c9, 3);

    // Pengambilan nilai c10
    $nilai_c10 = sqrt($nilai_k12 + $nilai_k12);
    $c10 = round($nilai_c10, 3);

    // Pengambilan nilai c11
    $nilai_c11 = sqrt($nilai_k13 + $nilai_k13);
    $c11 = round($nilai_c11, 3);

    // Pengambilan nilai c12
    $nilai_c12 = sqrt($nilai_k14 + $nilai_k14);
    $c12 = round($nilai_c12, 3);

    // Pengambilan nilai c13
    $nilai_c13 = sqrt($nilai_k15 + $nilai_k15);
    $c13 = round($nilai_c13, 3);

    // Pengambilan nilai c14
    $nilai_c14 = sqrt($nilai_k16 + $nilai_k16);
    $c14 = round($nilai_c14, 3);

    // Pengambilan nilai c15
    $nilai_c15 = sqrt($nilai_k17 + $nilai_k17);
    $c15 = round($nilai_c15, 3);

    // Pengambilan nilai c16
    $nilai_c16 = sqrt($nilai_k18 + $nilai_k18);
    $c16 = round($nilai_c16, 3);

    // Pengambilan nilai c17
    $nilai_c17 = sqrt($nilai_k19 + $nilai_k19);
    $c17 = round($nilai_c17, 3);

    // Pengambilan nilai c18
    $nilai_c18 = sqrt($nilai_k20 + $nilai_k20);
    $c18 = round($nilai_c18, 3);

    // Pengambilan nilai c19
    $nilai_c19 = sqrt($nilai_k21 + $nilai_k21);
    $c19 = round($nilai_c19, 3);

    // Pengambilan nilai c20
    $nilai_c20 = sqrt($nilai_k22 + $nilai_k22);
    $c20 = round($nilai_c20, 3);

    // Pengambilan nilai c21
    $nilai_c21 = sqrt($nilai_k23 + $nilai_k23);
    $c21 = round($nilai_c21, 3);

    // Pengambilan nilai c22
    $nilai_c22 = sqrt($nilai_k24 + $nilai_k30);
    $c22 = round($nilai_c22, 3);

    // Pengambilan nilai c23
    $nilai_c23 = sqrt($nilai_k25 + $nilai_k31);
    $c23 = round($nilai_c23, 3);

    // Pengambilan nilai c24
    $nilai_c24 = sqrt($nilai_k26 + $nilai_k32);
    $c24 = round($nilai_c24, 3);

    // Pengambilan nilai c25
    $nilai_c25 = sqrt($nilai_k27 + $nilai_k33);
    $nilai_c26 = sqrt($nilai_k28 + $nilai_k34);
    $c25 = round($nilai_c25, 3);

    // Pengambilan nilai c26
    $c26 = round($nilai_c26, 3);

    // Pengambilan nilai c27
    $nilai_c27 = sqrt($nilai_k29 + $nilai_k35);
    $c27 = round($nilai_c27, 3);

    // Pengambilan nilai 28
    $nilai_c28 = sqrt($nilai_k36);
    $c28 = round($nilai_c28, 3);

    // Pengambilan nilai 29
    $nilai_c29 = sqrt($nilai_k37);
    $c29 = round($nilai_c29, 3);

    // Pengambilan nilai 30
    $nilai_c30 = sqrt($nilai_k38);
    $c30 = round($nilai_c30, 3);

    // Pengambilan Jenis Kriteria 1
    $jenis_kriteria_1 = $this->Rating_model->jenis_kriteria_1('tabel_kriteria', 1)->result();

    // Pengambilan Jenis Kriteria 2
    $jenis_kriteria_2 = $this->Rating_model->jenis_kriteria_2('tabel_kriteria', 2)->result();

    // Pengambilan Jenis Kriteria 3
    $jenis_kriteria_3 = $this->Rating_model->jenis_kriteria_3('tabel_kriteria', 3)->result();

    // Pengambilan Jenis Kriteria 4
    $jenis_kriteria_4 = $this->Rating_model->jenis_kriteria_4('tabel_kriteria', 4)->result();

    // Pengambilan Jenis Kriteria 5
    $jenis_kriteria_5 = $this->Rating_model->jenis_kriteria_5('tabel_kriteria', 5)->result();

    // Pengambilan Jenis Kriteria 6
    $jenis_kriteria_6 = $this->Rating_model->jenis_kriteria_6('tabel_kriteria', 6)->result();

    // Pengambilan Jenis Kriteria 7
    $jenis_kriteria_7 = $this->Rating_model->jenis_kriteria_7('tabel_kriteria', 7)->result();

    // Pengambilan Jenis Kriteria 8
    $jenis_kriteria_8 = $this->Rating_model->jenis_kriteria_8('tabel_kriteria', 8)->result();

    // Pengambilan Jenis Kriteria 9
    $jenis_kriteria_9 = $this->Rating_model->jenis_kriteria_9('tabel_kriteria', 9)->result();

    // Pengambilan Jenis Kriteria 10
    $jenis_kriteria_10 = $this->Rating_model->jenis_kriteria_10('tabel_kriteria', 10)->result();

    // Pengambilan Jenis Kriteria 11
    $jenis_kriteria_11 = $this->Rating_model->jenis_kriteria_11('tabel_kriteria', 11)->result();

    // Pengambilan Jenis Kriteria 12
    $jenis_kriteria_12 = $this->Rating_model->jenis_kriteria_12('tabel_kriteria', 12)->result();

    // Pengambilan Jenis Kriteria 13
    $jenis_kriteria_13 = $this->Rating_model->jenis_kriteria_13('tabel_kriteria', 13)->result();

    // Pengambilan Jenis Kriteria 14
    $jenis_kriteria_14 = $this->Rating_model->jenis_kriteria_14('tabel_kriteria', 14)->result();

    // Pengambilan Jenis Kriteria 15
    $jenis_kriteria_15 = $this->Rating_model->jenis_kriteria_15('tabel_kriteria', 15)->result();

    // Pengambilan Jenis Kriteria 16
    $jenis_kriteria_16 = $this->Rating_model->jenis_kriteria_16('tabel_kriteria', 16)->result();

    // Pengambilan Jenis Kriteria 17
    $jenis_kriteria_17 = $this->Rating_model->jenis_kriteria_17('tabel_kriteria', 17)->result();

    // Pengambilan Jenis Kriteria 18
    $jenis_kriteria_18 = $this->Rating_model->jenis_kriteria_18('tabel_kriteria', 18)->result();

    // Pengambilan Jenis Kriteria 19
    $jenis_kriteria_19 = $this->Rating_model->jenis_kriteria_19('tabel_kriteria', 19)->result();

    // Pengambilan Jenis Kriteria 20
    $jenis_kriteria_20 = $this->Rating_model->jenis_kriteria_20('tabel_kriteria', 20)->result();

    // Pengambilan Jenis Kriteria 21
    $jenis_kriteria_21 = $this->Rating_model->jenis_kriteria_21('tabel_kriteria', 21)->result();

    // Pengambilan Jenis Kriteria 22
    $jenis_kriteria_22 = $this->Rating_model->jenis_kriteria_22('tabel_kriteria', 22)->result();

    // Pengambilan Jenis Kriteria 23
    $jenis_kriteria_23 = $this->Rating_model->jenis_kriteria_23('tabel_kriteria', 23)->result();

    // Pengambilan Jenis Kriteria 24
    $jenis_kriteria_24 = $this->Rating_model->jenis_kriteria_24('tabel_kriteria', 24)->result();

    // Pengambilan Jenis Kriteria 25
    $jenis_kriteria_25 = $this->Rating_model->jenis_kriteria_25('tabel_kriteria', 25)->result();

    // Pengambilan Jenis Kriteria 26
    $jenis_kriteria_26 = $this->Rating_model->jenis_kriteria_26('tabel_kriteria', 26)->result();

    // Pengambilan Jenis Kriteria 27
    $jenis_kriteria_27 = $this->Rating_model->jenis_kriteria_27('tabel_kriteria', 27)->result();

    // Pengambilan Jenis Kriteria 28
    $jenis_kriteria_28 = $this->Rating_model->jenis_kriteria_28('tabel_kriteria', 28)->result();

    // Pengambilan Jenis Kriteria 29
    $jenis_kriteria_29 = $this->Rating_model->jenis_kriteria_29('tabel_kriteria', 29)->result();

    // Pengambilan Jenis Kriteria 30
    $jenis_kriteria_30 = $this->Rating_model->jenis_kriteria_30('tabel_kriteria', 30)->result();

    // Pengambilan Jenis Kriteria 31
    $jenis_kriteria_31 = $this->Rating_model->jenis_kriteria_31('tabel_kriteria', 31)->result();

    // Pengambilan Jenis Kriteria 32
    $jenis_kriteria_32 = $this->Rating_model->jenis_kriteria_32('tabel_kriteria', 32)->result();

    // Pengambilan Jenis Kriteria 33
    $jenis_kriteria_33 = $this->Rating_model->jenis_kriteria_33('tabel_kriteria', 33)->result();

    // Pengambilan Jenis Kriteria 34
    $jenis_kriteria_34 = $this->Rating_model->jenis_kriteria_34('tabel_kriteria', 34)->result();

    // Pengambilan Jenis Kriteria 35
    $jenis_kriteria_35 = $this->Rating_model->jenis_kriteria_35('tabel_kriteria', 35)->result();

    // Pengambilan Jenis Kriteria 36
    $jenis_kriteria_36 = $this->Rating_model->jenis_kriteria_36('tabel_kriteria', 36)->result();

    // Pengambilan Jenis Kriteria 37
    $jenis_kriteria_37 = $this->Rating_model->jenis_kriteria_37('tabel_kriteria', 37)->result();

    // Pengambilan Jenis Kriteria 38
    $jenis_kriteria_38 = $this->Rating_model->jenis_kriteria_38('tabel_kriteria', 38)->result();

    $data = [
      "judul_halaman" => "Detail Halaman Rating Kecocokan $nisn",
      "judul_tabel" => "Tabel Rating Kecocokan",
      "tabel_rating" => "Tabel Nilai Rating Kecocokan",
      "tabel_normalisasi" => "Tabel Nilai Normalisasi",
      "tabel_normalisasi_terbobot" => "Tabel Nilai Normalisasi Terbobot",
      "tabel_pencarian_yi" => "Tabel Pencarian Nilai Yi",
      "tabel_perangkingan_yi" => "Tabel Perangkingan Nilai Yi",
      "nilai_rating" => $this->Rating_model->ambildatarating('tabel_nilai_rating_kecocokan', $nisn)->result(),
      "c1" => $c1,
      "c2" => $c2,
      "c3" => $c3,
      "c4" => $c4,
      "c5" => $c5,
      "c6" => $c6,
      "c7" => $c7,
      "c8" => $c8,
      "c9" => $c9,
      "c10" => $c10,
      "c11" => $c11,
      "c12" => $c12,
      "c13" => $c13,
      "c14" => $c14,
      "c15" => $c15,
      "c16" => $c16,
      "c17" => $c17,
      "c18" => $c18,
      "c19" => $c19,
      "c20" => $c20,
      "c21" => $c21,
      "c22" => $c22,
      "c23" => $c23,
      "c24" => $c24,
      "c25" => $c25,
      "c26" => $c26,
      "c27" => $c27,
      "c28" => $c28,
      "c29" => $c29,
      "c30" => $c30,
      "bk1" => $bk1,
      "bk2" => $bk2,
      "bk3" => $bk3,
      "bk4" => $bk4,
      "bk5" => $bk5,
      "bk6" => $bk6,
      "bk7" => $bk7,
      "bk8" => $bk8,
      "bk9" => $bk9,
      "bk10" => $bk10,
      "bk11" => $bk11,
      "bk12" => $bk12,
      "bk13" => $bk13,
      "bk14" => $bk14,
      "bk15" => $bk15,
      "bk16" => $bk16,
      "bk17" => $bk17,
      "bk18" => $bk18,
      "bk19" => $bk19,
      "bk20" => $bk20,
      "bk21" => $bk21,
      "bk22" => $bk22,
      "bk23" => $bk23,
      "bk24" => $bk24,
      "bk25" => $bk25,
      "bk26" => $bk26,
      "bk27" => $bk27,
      "bk28" => $bk28,
      "bk29" => $bk29,
      "bk30" => $bk30,
      "bk31" => $bk31,
      "bk32" => $bk32,
      "bk33" => $bk33,
      "bk34" => $bk34,
      "bk38" => $bk38,
      "bk35" => $bk35,
      "bk36" => $bk36,
      "bk37" => $bk37,
      "jenis_kriteria_1" => $jenis_kriteria_1,
      "jenis_kriteria_2" => $jenis_kriteria_2,
      "jenis_kriteria_3" => $jenis_kriteria_3,
      "jenis_kriteria_4" => $jenis_kriteria_4,
      "jenis_kriteria_5" => $jenis_kriteria_5,
      "jenis_kriteria_6" => $jenis_kriteria_6,
      "jenis_kriteria_7" => $jenis_kriteria_7,
      "jenis_kriteria_8" => $jenis_kriteria_8,
      "jenis_kriteria_9" => $jenis_kriteria_9,
      "jenis_kriteria_10" => $jenis_kriteria_10,
      "jenis_kriteria_11" => $jenis_kriteria_11,
      "jenis_kriteria_12" => $jenis_kriteria_12,
      "jenis_kriteria_13" => $jenis_kriteria_13,
      "jenis_kriteria_14" => $jenis_kriteria_14,
      "jenis_kriteria_15" => $jenis_kriteria_15,
      "jenis_kriteria_16" => $jenis_kriteria_16,
      "jenis_kriteria_17" => $jenis_kriteria_17,
      "jenis_kriteria_18" => $jenis_kriteria_18,
      "jenis_kriteria_19" => $jenis_kriteria_19,
      "jenis_kriteria_20" => $jenis_kriteria_20,
      "jenis_kriteria_21" => $jenis_kriteria_21,
      "jenis_kriteria_22" => $jenis_kriteria_22,
      "jenis_kriteria_23" => $jenis_kriteria_23,
      "jenis_kriteria_24" => $jenis_kriteria_24,
      "jenis_kriteria_25" => $jenis_kriteria_25,
      "jenis_kriteria_26" => $jenis_kriteria_26,
      "jenis_kriteria_27" => $jenis_kriteria_27,
      "jenis_kriteria_28" => $jenis_kriteria_28,
      "jenis_kriteria_29" => $jenis_kriteria_29,
      "jenis_kriteria_30" => $jenis_kriteria_30,
      "jenis_kriteria_31" => $jenis_kriteria_31,
      "jenis_kriteria_32" => $jenis_kriteria_32,
      "jenis_kriteria_33" => $jenis_kriteria_33,
      "jenis_kriteria_34" => $jenis_kriteria_34,
      "jenis_kriteria_35" => $jenis_kriteria_35,
      "jenis_kriteria_36" => $jenis_kriteria_36,
      "jenis_kriteria_37" => $jenis_kriteria_37,
      "jenis_kriteria_38" => $jenis_kriteria_38
    ];

    $this->load->view('template/header', $data);
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    $this->load->view('rating/detail', $data);
    $this->load->view('template/footer');
  }

  public function tes()
  {
    // Pengambilan nilai bobot
    $bobot = $this->Rating_model->nilai_bobot('tabel_kriteria')->result();

    foreach ($bobot as $bobot) {

      $nb_1 = $bobot->bobot1;
      $nb_2 = $bobot->bobot2;
      $nb_3 = $bobot->bobot3;
      $nb_4 = $bobot->bobot4;
      $nb_5 = $bobot->bobot5;
      $nb_6 = $bobot->bobot6;
      $nb_7 = $bobot->bobot7;
    }

    // Bobot kriteria 1
    $bk1 = round($nb_1, 3);

    // Bobot kriteria 2
    $bk2 = round($nb_2, 3);

    // Bobot kriteria 3
    $bk3 = round($nb_3, 3);

    // Bobot kriteria 4
    $bk4 = round($nb_4, 3);

    // Bobot kriteria 5
    $bk5 = round($nb_5, 3);

    // Bobot kriteria 6
    $bk6 = round($nb_6, 3);

    // Bobot kriteria 7
    $bk7 = round($nb_7, 3);

    // Pengambilai nilai kriteria
    $c1 = $this->Rating_model->nilai_kriteria('tabel_nilai_rating_kecocokan')->result();

    $sum_c1 = 0;
    $sum_c2 = 0;
    $sum_c3 = 0;
    $sum_c4 = 0;
    $sum_c5 = 0;
    $sum_c6 = 0;
    $sum_c7 = 0;
    foreach ($c1 as $c) {

      $sum_c1 += $c->c1;
      $sum_c2 += $c->c2;
      $sum_c3 += $c->c3;
      $sum_c4 += $c->c4;
      $sum_c5 += $c->c5;
      $sum_c6 += $c->c6;
      $sum_c7 += $c->c7;
    }

    // Pengambilan nilai c1
    $nilai_c1 = sqrt($sum_c1);
    $c1 = round($nilai_c1, 3);

    // Pengambilan nilai c2
    $nilai_c2 = sqrt($sum_c2);
    $c2 = round($nilai_c2, 3);

    // Pengambilan nilai c3
    $nilai_c3 = sqrt($sum_c3);
    $c3 = round($nilai_c3, 3);

    // Pengambilan nilai c4
    $nilai_c4 = sqrt($sum_c4);
    $c4 = round($nilai_c4, 3);

    // Pengambilan nilai c5
    $nilai_c5 = sqrt($sum_c5);
    $c5 = round($nilai_c5, 3);

    // Pengambilan nilai c6
    $nilai_c6 = sqrt($sum_c6);
    $c6 = round($nilai_c6, 3);

    // Pengambilan nilai c7
    $nilai_c7 = sqrt($sum_c7);
    $c7 = round($nilai_c7, 3);

    // Pengambilan Jenis Kriteria 1
    $jenis_kriteria_1 = $this->Rating_model->jenis_kriteria_1('tabel_kriteria', 1)->result();

    // Pengambilan Jenis Kriteria 2
    $jenis_kriteria_2 = $this->Rating_model->jenis_kriteria_2('tabel_kriteria', 2)->result();

    // Pengambilan Jenis Kriteria 3
    $jenis_kriteria_3 = $this->Rating_model->jenis_kriteria_3('tabel_kriteria', 3)->result();

    // Pengambilan Jenis Kriteria 4
    $jenis_kriteria_4 = $this->Rating_model->jenis_kriteria_4('tabel_kriteria', 4)->result();

    // Pengambilan Jenis Kriteria 5
    $jenis_kriteria_5 = $this->Rating_model->jenis_kriteria_5('tabel_kriteria', 5)->result();

    // Pengambilan Jenis Kriteria 6
    $jenis_kriteria_6 = $this->Rating_model->jenis_kriteria_6('tabel_kriteria', 6)->result();

    // Pengambilan Jenis Kriteria 7
    $jenis_kriteria_7 = $this->Rating_model->jenis_kriteria_7('tabel_kriteria', 7)->result();

    $data = [

      "judul_halaman" => "Halaman Rating Kecocokan",
      "judul_tabel" => "Tabel Rating Kecocokan",
      "tabel_rating" => "Tabel Nilai Rating Kecocokan",
      "tabel_normalisasi" => "Tabel Nilai Normalisasi",
      "tabel_normalisasi_terbobot" => "Tabel Nilai Normalisasi Terbobot",
      "tabel_pencarian_yi" => "Tabel Pencarian Nilai Yi",
      "tabel_perangkingan_yi" => "Tabel Perangkingan Nilai Yi",
      "nilai_rating" => $this->Rating_model->ambildatarating('tabel_nilai_rating_kecocokan')->result(),
      "nilai_rating_rangking" => $this->Rating_model->ambildataratingrangking('tabel_nilai_rating_kecocokan')->result(),
      "c1" => $c1,
      "c2" => $c2,
      "c3" => $c3,
      "c4" => $c4,
      "c5" => $c5,
      "c6" => $c6,
      "c7" => $c7,
      "bk1" => $bk1,
      "bk2" => $bk2,
      "bk3" => $bk3,
      "bk4" => $bk4,
      "bk5" => $bk5,
      "bk6" => $bk6,
      "bk7" => $bk7,
      "jenis_kriteria_1" => $jenis_kriteria_1,
      "jenis_kriteria_2" => $jenis_kriteria_2,
      "jenis_kriteria_3" => $jenis_kriteria_3,
      "jenis_kriteria_4" => $jenis_kriteria_4,
      "jenis_kriteria_5" => $jenis_kriteria_5,
      "jenis_kriteria_6" => $jenis_kriteria_6,
      "jenis_kriteria_7" => $jenis_kriteria_7

    ];

    $this->load->view('template/header', $data);
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    $this->load->view('rating/detail', $data);
    $this->load->view('template/footer');
  }
}
