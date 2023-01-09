<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
  <table style="width:100%;">
    <tr>
      <td>
        <img src="<?= base_url() ?>assets/image/logo_provinsi.png" alt="Logo Sekolah" style="posisition: absolute; width: 50px; height:auto; margin-top:-25;">
      </td>
      <td class=" text-center">
        <div style="margin: left 5px;  margin: right 5px;">
          <h5 style="margin-left:5px; font-size: 16px;"> PEMERINTAH PROVINSI KALIMANTAN SELATAN DINAS PENDIDIKAN DAN KEBUDAYAAN </h5>
          <h4 style="font-size: 16px;">SMA NEGERI 1 HALONG</h4>
          <p style="margin-top:-10px; font-weight:100; font-size: 12px;"><i>Alamat: Jln. Pembangunan RT. V No 87 Kec.Halong Kab. Balangan Kode Pos 71666</i></p>
          <p style="margin-top:-15px; font-weight:100; font-size: 12px;"><i>NPSN:30304976, Email:sman1halong@yahoo.co.id</i></p>
        </div>
      </td>
      <td>
        <img src="<?= base_url() ?>assets/image/logo_sma.png" alt="Logo Sekolah" style="posisition: absolute; width: 50px; height:auto; margin-top:-28;">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr style="width:100%; border-bottom:1px solid black; margin-top:-18px;">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr style="width:100%; border-bottom:4px solid black; margin-top:-16px;">
      </td>
    </tr>
  </table>
  <h5 style="font-size: 14px;" class="text-center pt-3">LAPORAN HASIL PENYELEKSIAN JURUSAN MURID</h5>
  <table style="font-size: 12px;" class="table table-bordered pt-2">
    <thead class="thead-dark">
      <tr>
        <th>NO</th>
        <th>NISN</th>
        <th>NAMA</th>
        <th>NILAI IPA</th>
        <th>NILAI IPS</th>
        <th>REKOMENDASI JURUSAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($nilai_rating as $nilai_kriteria) :

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
        $c25 = round($nilai_c25, 3);

        // Pengambilan nilai c26
        $nilai_c26 = sqrt($nilai_k28 + $nilai_k34);
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

        // Pencarian Jenis Benefit / Cost Kriteria Ipa
        // C1
        foreach ($jenis_kriteria_1 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c1_ipa = $nilai_kriteria->kriteria1 / $c1 * $bk1;
          } else {
            @$cost_c1_ipa = $nilai_kriteria->kriteria1 / $c1 * $bk1;
          }
        }

        // C2
        foreach ($jenis_kriteria_3 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c2_ipa = $nilai_kriteria->kriteria3 / $c2 * $bk3;
          } else {
            @$cost_c2_ipa = $nilai_kriteria->kriteria3 / $c2 * $bk3;
          }
        }

        // C3
        foreach ($jenis_kriteria_4 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c3_ipa = $nilai_kriteria->kriteria4 / $c3 * $bk4;
          } else {
            @$cost_c3_ipa = $nilai_kriteria->kriteria4 / $c3 * $bk4;
          }
        }

        // C4
        foreach ($jenis_kriteria_6 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c4_ipa = $nilai_kriteria->kriteria6 / $c4 * $bk6;
          } else {
            @$cost_c4_ipa = $nilai_kriteria->kriteria6 / $c4 * $bk6;
          }
        }

        // C5
        foreach ($jenis_kriteria_7 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c5_ipa = $nilai_kriteria->kriteria7 / $c5 * $bk7;
          } else {
            @$cost_c5_ipa = $nilai_kriteria->kriteria7 / $c5 * $bk7;
          }
        }

        // C6
        foreach ($jenis_kriteria_8 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c6_ipa = $nilai_kriteria->kriteria8 / $c6 * $bk8;
          } else {
            @$cost_c6_ipa = $nilai_kriteria->kriteria8 / $c6 * $bk8;
          }
        }

        // C7
        foreach ($jenis_kriteria_9 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c7_ipa = $nilai_kriteria->kriteria9 / $c7 * $bk9;
          } else {
            @$cost_c7_ipa = $nilai_kriteria->kriteria9 / $c7 * $bk9;
          }
        }

        // C8
        foreach ($jenis_kriteria_10 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c8_ipa = $nilai_kriteria->kriteria10 / $c8 * $bk10;
          } else {
            @$cost_c8_ipa = $nilai_kriteria->kriteria10 / $c8 * $bk10;
          }
        }

        // C9
        foreach ($jenis_kriteria_11 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c9_ipa = $nilai_kriteria->kriteria11 / $c9 * $bk11;
          } else {
            @$cost_c9_ipa = $nilai_kriteria->kriteria11 / $c9 * $bk11;
          }
        }

        // C10
        foreach ($jenis_kriteria_12 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c10_ipa = $nilai_kriteria->kriteria12 / $c10 * $bk12;
          } else {
            @$cost_c10_ipa = $nilai_kriteria->kriteria12 / $c210 * $bk12;
          }
        }

        // C11
        foreach ($jenis_kriteria_13 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c11_ipa = $nilai_kriteria->kriteria13 / $c11 * $bk13;
          } else {
            @$cost_c11_ipa = $nilai_kriteria->kriteria13 / $c11 * $bk13;
          }
        }

        // C12
        foreach ($jenis_kriteria_14 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c12_ipa = $nilai_kriteria->kriteria14 / $c12 * $bk14;
          } else {
            @$cost_c12_ipa = $nilai_kriteria->kriteria14 / $c12 * $bk14;
          }
        }

        // C13
        foreach ($jenis_kriteria_15 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c13_ipa = $nilai_kriteria->kriteria15 / $c13 * $bk15;
          } else {
            @$cost_c13_ipa = $nilai_kriteria->kriteria15 / $c13 * $bk15;
          }
        }

        // C14
        foreach ($jenis_kriteria_16 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c14_ipa = $nilai_kriteria->kriteria16 / $c14 * $bk16;
          } else {
            @$cost_c14_ipa = $nilai_kriteria->kriteria16 / $c14 * $bk16;
          }
        }

        // C15
        foreach ($jenis_kriteria_17 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c15_ipa = $nilai_kriteria->kriteria17 / $c15 * $bk17;
          } else {
            @$cost_c15_ipa = $nilai_kriteria->kriteria17 / $c15 * $bk17;
          }
        }

        // C16
        foreach ($jenis_kriteria_18 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c16_ipa = $nilai_kriteria->kriteria18 / $c16 * $bk18;
          } else {
            @$cost_c16_ipa = $nilai_kriteria->kriteria18 / $c16 * $bk18;
          }
        }

        // C17
        foreach ($jenis_kriteria_19 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c17_ipa = $nilai_kriteria->kriteria19 / $c17 * $bk19;
          } else {
            @$cost_c17_ipa = $nilai_kriteria->kriteria19 / $c17 * $bk19;
          }
        }

        // C18
        foreach ($jenis_kriteria_20 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c18_ipa = $nilai_kriteria->kriteria20 / $c18 * $bk20;
          } else {
            @$cost_c18_ipa = $nilai_kriteria->kriteria20 / $c18 * $bk20;
          }
        }

        // C19
        foreach ($jenis_kriteria_21 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c19_ipa = $nilai_kriteria->kriteria21 / $c19 * $bk21;
          } else {
            @$cost_c19_ipa = $nilai_kriteria->kriteria21 / $c19 * $bk21;
          }
        }

        // C20
        foreach ($jenis_kriteria_22 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c20_ipa = $nilai_kriteria->kriteria22 / $c20 * $bk22;
          } else {
            @$cost_c20_ipa = $nilai_kriteria->kriteria22 / $c20 * $bk22;
          }
        }

        // C21
        foreach ($jenis_kriteria_23 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c21_ipa = $nilai_kriteria->kriteria23 / $c21 * $bk23;
          } else {
            @$cost_c21_ipa = $nilai_kriteria->kriteria23 / $c21 * $bk23;
          }
        }

        // C22
        foreach ($jenis_kriteria_24 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c22_ipa = $nilai_kriteria->kriteria24 / $c22 * $bk24;
          } else {
            @$cost_c22_ipa = $nilai_kriteria->kriteria24 / $c22 * $bk24;
          }
        }

        // C23
        foreach ($jenis_kriteria_25 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c23_ipa = $nilai_kriteria->kriteria25 / $c23 * $bk25;
          } else {
            @$cost_c23_ipa = $nilai_kriteria->kriteria25 / $c23 * $bk25;
          }
        }

        // C24
        foreach ($jenis_kriteria_26 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c24_ipa = $nilai_kriteria->kriteria26 / $c24 * $bk26;
          } else {
            @$cost_c24_ipa = $nilai_kriteria->kriteria26 / $c24 * $bk26;
          }
        }

        // C25
        foreach ($jenis_kriteria_27 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c25_ipa = $nilai_kriteria->kriteria27 / $c25 * $bk27;
          } else {
            @$cost_c25_ipa = $nilai_kriteria->kriteria27 / $c25 * $bk27;
          }
        }

        // C26
        foreach ($jenis_kriteria_28 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c26_ipa = $nilai_kriteria->kriteria28 / $c26 * $bk28;
          } else {
            @$cost_c26_ipa = $nilai_kriteria->kriteria28 / $c26 * $bk28;
          }
        }

        // C27
        foreach ($jenis_kriteria_29 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c27_ipa = $nilai_kriteria->kriteria29 / $c27 * $bk29;
          } else {
            @$cost_c27_ipa = $nilai_kriteria->kriteria29 / $c27 * $bk29;
          }
        }

        // C28
        foreach ($jenis_kriteria_36 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria36 = $nilai_kriteria->kriteria36 == 4 ? $nilai_kriteria->kriteria36 / $c28 * $bk36 : 0;
            @$benefit_c28_ipa = $kriteria36;
          } else {
            @$kriteria36 = $nilai_kriteria->kriteria36 == 4 ? $nilai_kriteria->kriteria36 / $c28 * $bk36 : 0;
            @$cost_c28_ipa = $kriteria36;
          }
        }

        // C29
        foreach ($jenis_kriteria_37 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria37 = $nilai_kriteria->kriteria37 == 4 ? $nilai_kriteria->kriteria37 / $c29 * $bk37 : 0;
            @$benefit_c29_ipa = $kriteria37;
          } else {
            @$kriteria37 = $nilai_kriteria->kriteria37 == 4 ? $nilai_kriteria->kriteria37 / $c29 * $bk37 : 0;
            @$cost_c29_ipa = $kriteria37;
          }
        }

        // C30
        foreach ($jenis_kriteria_38 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria38 = $nilai_kriteria->kriteria38 == 4 ? $nilai_kriteria->kriteria38 / $c30 * $bk38 : 0;
            @$benefit_c30_ipa = $kriteria38;
          } else {
            @$kriteria38 = $nilai_kriteria->kriteria38 == 4 ? $nilai_kriteria->kriteria38 / $c30 * $bk38 : 0;
            @$cost_c30_ipa = $kriteria38;
          }
        }

        // Pencarian Jenis Benefit / Cost Kriteria Ips
        // C1
        foreach ($jenis_kriteria_2 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c1_ips = $nilai_kriteria->kriteria2 / $c1 * $bk2;
          } else {
            @$cost_c1_ips = $nilai_kriteria->kriteria2 / $c1 * $bk2;
          }
        }

        // C2
        foreach ($jenis_kriteria_3 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c2_ips = $nilai_kriteria->kriteria3 / $c2 * $bk3;
          } else {
            @$cost_c2_ips = $nilai_kriteria->kriteria3 / $c2 * $bk3;
          }
        }

        // C3
        foreach ($jenis_kriteria_5 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c3_ips = $nilai_kriteria->kriteria5 / $c3 * $bk5;
          } else {
            @$cost_c3_ips = $nilai_kriteria->kriteria5 / $c3 * $bk5;
          }
        }

        // C4
        foreach ($jenis_kriteria_6 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c4_ips = $nilai_kriteria->kriteria6 / $c4 * $bk6;
          } else {
            @$cost_c4_ips = $nilai_kriteria->kriteria6 / $c4 * $bk6;
          }
        }

        // C5
        foreach ($jenis_kriteria_7 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c5_ips = $nilai_kriteria->kriteria7 / $c5 * $bk7;
          } else {
            @$cost_c5_ips = $nilai_kriteria->kriteria7 / $c5 * $bk7;
          }
        }

        // C6
        foreach ($jenis_kriteria_8 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c6_ips = $nilai_kriteria->kriteria8 / $c6 * $bk8;
          } else {
            @$cost_c6_ips = $nilai_kriteria->kriteria8 / $c6 * $bk8;
          }
        }

        // C7
        foreach ($jenis_kriteria_9 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c7_ips = $nilai_kriteria->kriteria9 / $c7 * $bk9;
          } else {
            @$cost_c7_ips = $nilai_kriteria->kriteria9 / $c7 * $bk9;
          }
        }

        // C8
        foreach ($jenis_kriteria_10 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c8_ips = $nilai_kriteria->kriteria10 / $c8 * $bk10;
          } else {
            @$cost_c8_ips = $nilai_kriteria->kriteria10 / $c8 * $bk10;
          }
        }

        // C9
        foreach ($jenis_kriteria_11 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c9_ips = $nilai_kriteria->kriteria11 / $c9 * $bk11;
          } else {
            @$cost_c9_ips = $nilai_kriteria->kriteria11 / $c9 * $bk11;
          }
        }

        // C10
        foreach ($jenis_kriteria_12 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c10_ips = $nilai_kriteria->kriteria12 / $c10 * $bk12;
          } else {
            @$cost_c10_ips = $nilai_kriteria->kriteria12 / $c210 * $bk12;
          }
        }

        // C11
        foreach ($jenis_kriteria_13 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c11_ips = $nilai_kriteria->kriteria13 / $c11 * $bk13;
          } else {
            @$cost_c11_ips = $nilai_kriteria->kriteria13 / $c11 * $bk13;
          }
        }

        // C12
        foreach ($jenis_kriteria_14 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c12_ips = $nilai_kriteria->kriteria14 / $c12 * $bk14;
          } else {
            @$cost_c12_ips = $nilai_kriteria->kriteria14 / $c12 * $bk14;
          }
        }

        // C13
        foreach ($jenis_kriteria_15 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c13_ips = $nilai_kriteria->kriteria15 / $c13 * $bk15;
          } else {
            @$cost_c13_ips = $nilai_kriteria->kriteria15 / $c13 * $bk15;
          }
        }

        // C14
        foreach ($jenis_kriteria_16 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c14_ips = $nilai_kriteria->kriteria16 / $c14 * $bk16;
          } else {
            @$cost_c14_ips = $nilai_kriteria->kriteria16 / $c14 * $bk16;
          }
        }

        // C15
        foreach ($jenis_kriteria_17 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c15_ips = $nilai_kriteria->kriteria17 / $c15 * $bk17;
          } else {
            @$cost_c15_ips = $nilai_kriteria->kriteria17 / $c15 * $bk17;
          }
        }

        // C16
        foreach ($jenis_kriteria_18 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c16_ips = $nilai_kriteria->kriteria18 / $c16 * $bk18;
          } else {
            @$cost_c16_ips = $nilai_kriteria->kriteria18 / $c16 * $bk18;
          }
        }

        // C17
        foreach ($jenis_kriteria_19 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c17_ips = $nilai_kriteria->kriteria19 / $c17 * $bk19;
          } else {
            @$cost_c17_ips = $nilai_kriteria->kriteria19 / $c17 * $bk19;
          }
        }

        // C18
        foreach ($jenis_kriteria_20 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c18_ips = $nilai_kriteria->kriteria20 / $c18 * $bk20;
          } else {
            @$cost_c18_ips = $nilai_kriteria->kriteria20 / $c18 * $bk20;
          }
        }

        // C19
        foreach ($jenis_kriteria_21 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c19_ips = $nilai_kriteria->kriteria21 / $c19 * $bk21;
          } else {
            @$cost_c19_ips = $nilai_kriteria->kriteria21 / $c19 * $bk21;
          }
        }

        // C20
        foreach ($jenis_kriteria_22 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c20_ips = $nilai_kriteria->kriteria22 / $c20 * $bk22;
          } else {
            @$cost_c20_ips = $nilai_kriteria->kriteria22 / $c20 * $bk22;
          }
        }

        // C21
        foreach ($jenis_kriteria_23 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c21_ips = $nilai_kriteria->kriteria23 / $c21 * $bk23;
          } else {
            @$cost_c21_ips = $nilai_kriteria->kriteria23 / $c21 * $bk23;
          }
        }

        // C22
        foreach ($jenis_kriteria_30 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c22_ips = $nilai_kriteria->kriteria30 / $c22 * $bk30;
          } else {
            @$cost_c22_ips = $nilai_kriteria->kriteria30 / $c22 * $bk30;
          }
        }

        // C23
        foreach ($jenis_kriteria_31 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c23_ips = $nilai_kriteria->kriteria31 / $c23 * $bk31;
          } else {
            @$cost_c23_ips = $nilai_kriteria->kriteria31 / $c23 * $bk31;
          }
        }

        // C24
        foreach ($jenis_kriteria_32 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c24_ips = $nilai_kriteria->kriteria32 / $c24 * $bk32;
          } else {
            @$cost_c24_ips = $nilai_kriteria->kriteria32 / $c24 * $bk32;
          }
        }

        // C25
        foreach ($jenis_kriteria_33 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c25_ips = $nilai_kriteria->kriteria33 / $c25 * $bk33;
          } else {
            @$cost_c25_ips = $nilai_kriteria->kriteria33 / $c25 * $bk33;
          }
        }

        // C26
        foreach ($jenis_kriteria_34 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c26_ips = $nilai_kriteria->kriteria34 / $c26 * $bk34;
          } else {
            @$cost_c26_ips = $nilai_kriteria->kriteria34 / $c26 * $bk34;
          }
        }

        // C27
        foreach ($jenis_kriteria_35 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$benefit_c27_ips = $nilai_kriteria->kriteria35 / $c27 * $bk35;
          } else {
            @$cost_c27_ips = $nilai_kriteria->kriteria35 / $c27 * $bk35;
          }
        }

        // C28
        foreach ($jenis_kriteria_36 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria36 = $nilai_kriteria->kriteria36 == 3 ? $nilai_kriteria->kriteria36 / $c28 * $bk36 : 0;
            @$benefit_c28_ips = $kriteria36;
          } else {
            @$kriteria36 = $nilai_kriteria->kriteria36 == 3 ? $nilai_kriteria->kriteria36 / $c28 * $bk36 : 0;
            @$cost_c28_ips = $kriteria36;
          }
        }

        // C29
        foreach ($jenis_kriteria_37 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria37 = $nilai_kriteria->kriteria37 == 3 ? $nilai_kriteria->kriteria37 / $c29 * $bk37 : 0;
            @$benefit_c29_ips = $kriteria37;
          } else {
            @$kriteria37 = $nilai_kriteria->kriteria37 == 3 ? $nilai_kriteria->kriteria37 / $c29 * $bk37 : 0;
            @$cost_c29_ips = $kriteria37;
          }
        }

        // C30
        foreach ($jenis_kriteria_38 as $jenis) {
          if ($jenis->jenis == 'benefit') {
            @$kriteria38 = $nilai_kriteria->kriteria38 == 3 ? $nilai_kriteria->kriteria38 / $c30 * $bk38 : 0;
            @$benefit_c30_ips = $kriteria38;
          } else {
            @$kriteria38 = $nilai_kriteria->kriteria38 == 3 ? $nilai_kriteria->kriteria38 / $c30 * $bk38 : 0;
            @$cost_c30_ips = $kriteria38;
          }
        }

        // Pencarian Nilai Max Ipa
        @$max_ipa = $benefit_c1_ipa + $benefit_c2_ipa + $benefit_c3_ipa + $benefit_c4_ipa + $benefit_c5_ipa + $benefit_c6_ipa + $benefit_c7_ipa + $benefit_c8_ipa + $benefit_c9_ipa + $benefit_c10_ipa + $benefit_c11_ipa + $benefit_c12_ipa + $benefit_c13_ipa + $benefit_c14_ipa + $benefit_c15_ipa + $benefit_c16_ipa + $benefit_c17_ipa + $benefit_c18_ipa + $benefit_c19_ipa + $benefit_c20_ipa + $benefit_c21_ipa + $benefit_c22_ipa + $benefit_c23_ipa + $benefit_c24_ipa + $benefit_c25_ipa + $benefit_c26_ipa + $benefit_c27_ipa + $benefit_c28_ipa + $benefit_c29_ipa + $benefit_c30_ipa;
        // Pencarian Nilai Min Ipa
        @$min_ipa = $cost_c1_ipa + $cost_c2_ipa + $cost_c3_ipa + $cost_c4_ipa + $cost_c5_ipa + $cost_c6_ipa + $cost_c7_ipa + $cost_c8_ipa + $cost_c9_ipa + $cost_c10_ipa + $cost_c11_ipa + $cost_c12_ipa + $cost_c13_ipa + $cost_c14_ipa + $cost_c15_ipa + $cost_c16_ipa + $cost_c17_ipa + $cost_c18_ipa + $cost_c19_ipa + $cost_c20_ipa + $cost_c21_ipa + $cost_c22_ipa + $cost_c23_ipa + $cost_c24_ipa + $cost_c25_ipa + $cost_c26_ipa + $cost_c27_ipa + $cost_c28_ipa + $cost_c29_ipa + $cost_c30_ipa;
        // Pencarian Nilai Yi Ipa
        $yi_ipa = $max_ipa - $min_ipa;

        // Pencarian Nilai Max Ips
        @$max_ips = $benefit_c1_ips + $benefit_c2_ips + $benefit_c3_ips + $benefit_c4_ips + $benefit_c5_ips + $benefit_c6_ips + $benefit_c7_ips + $benefit_c8_ips + $benefit_c9_ips + $benefit_c10_ips + $benefit_c11_ips + $benefit_c12_ips + $benefit_c13_ips + $benefit_c14_ips + $benefit_c15_ips + $benefit_c16_ips + $benefit_c17_ips + $benefit_c18_ips + $benefit_c19_ips + $benefit_c20_ips + $benefit_c21_ips + $benefit_c22_ips + $benefit_c23_ips + $benefit_c24_ips + $benefit_c25_ips + $benefit_c26_ips + $benefit_c27_ips + $benefit_c28_ips + $benefit_c29_ips + $benefit_c30_ips;
        // Pencarian Nilai Min Ips
        @$min_ips = $cost_c1_ips + $cost_c2_ips + $cost_c3_ips + $cost_c4_ips + $cost_c5_ips + $cost_c6_ips + $cost_c7_ips + $cost_c8_ips + $cost_c9_ips + $cost_c10_ips + $cost_c11_ips + $cost_c12_ips + $cost_c13_ips + $cost_c14_ips + $cost_c15_ips + $cost_c16_ips + $cost_c17_ips + $cost_c18_ips + $cost_c19_ips + $cost_c20_ips + $cost_c21_ips + $cost_c22_ips + $cost_c23_ips + $cost_c24_ips + $cost_c25_ips + $cost_c26_ips + $cost_c27_ips + $cost_c28_ips + $cost_c29_ips + $cost_c30_ips;
        // Pencarian Nilai Yi Ips
        $yi_ips = $max_ips - $min_ips;

      ?>
        <tr class="text-center">
          <td><?= $no++ ?></td>
          <td><?= $nilai_kriteria->nisn ?></td>
          <td><?= $nilai_kriteria->nama ?></td>
          <td><?= round($yi_ipa, 3) ?></td>
          <td><?= round($yi_ips, 3) ?></td>
          <td><?= $yi_ipa > $yi_ips ? "REKOMENDASI IPA" : "REKOMENDASI IPS" ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <table style="font-size: 12px;" class="float-right mr-5 mt-4">
    <tr>
      <td>Halong,</td>
    </tr>
    <tr>
      <td>a.n, Kepala Sekolah</td>
    </tr>
    <tr>
      <td>KTAS SMAN 1 HALONG,</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><b>Kasri, S.pd</b></td>
    </tr>
    <tr>
      <td>Penata, (III/d)</td>
    </tr>
    <tr>
      <td>NIP 197009142007012015</td>
    </tr>
  </table>
</body>

</html>