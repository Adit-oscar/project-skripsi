<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-gradient-cyan pb-2">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h1><?= $judul_halaman; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <strong>
                <a href="<?= base_url() ?>rating">Home</a>
              </strong>
            </li>
            <li class="breadcrumb-item active">
              <?= $judul_halaman; ?>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Conten Nilai Rating Kecocokan -->
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $tabel_rating; ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-responsive table-bordered table-hover mt-2">
          <thead>
            <tr class="text-center">
              <th>NISN</th>
              <th>A\C</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
              <th>C7</th>
              <th>C8</th>
              <th>C9</th>
              <th>C10</th>
              <th>C11</th>
              <th>C12</th>
              <th>C13</th>
              <th>C14</th>
              <th>C15</th>
              <th>C16</th>
              <th>C17</th>
              <th>C18</th>
              <th>C19</th>
              <th>C20</th>
              <th>C21</th>
              <th>C22</th>
              <th>C23</th>
              <th>C24</th>
              <th>C25</th>
              <th>C26</th>
              <th>C27</th>
              <th>C28</th>
              <th>C29</th>
              <th>C30</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai_rating as $rating) :
            ?>
              <tr class="text-center">
                <td rowspan="2" style="vertical-align: middle;"><?= $rating->nisn ?></td>
                <td>IPA</td>
                <td><?= $rating->kriteria1 ?></td>
                <td><?= $rating->kriteria3 ?></td>
                <td><?= $rating->kriteria4 ?></td>
                <td><?= $rating->kriteria6 ?></td>
                <td><?= $rating->kriteria7 ?></td>
                <td><?= $rating->kriteria8 ?></td>
                <td><?= $rating->kriteria9 ?></td>
                <td><?= $rating->kriteria10 ?></td>
                <td><?= $rating->kriteria11 ?></td>
                <td><?= $rating->kriteria12 ?></td>
                <td><?= $rating->kriteria13 ?></td>
                <td><?= $rating->kriteria14 ?></td>
                <td><?= $rating->kriteria15 ?></td>
                <td><?= $rating->kriteria16 ?></td>
                <td><?= $rating->kriteria17 ?></td>
                <td><?= $rating->kriteria18 ?></td>
                <td><?= $rating->kriteria19 ?></td>
                <td><?= $rating->kriteria20 ?></td>
                <td><?= $rating->kriteria21 ?></td>
                <td><?= $rating->kriteria22 ?></td>
                <td><?= $rating->kriteria23 ?></td>
                <td><?= $rating->kriteria24 ?></td>
                <td><?= $rating->kriteria25 ?></td>
                <td><?= $rating->kriteria26 ?></td>
                <td><?= $rating->kriteria27 ?></td>
                <td><?= $rating->kriteria28 ?></td>
                <td><?= $rating->kriteria29 ?></td>
                <td><?= $rating->kriteria36 == 4 ? $rating->kriteria36 : 0 ?></td>
                <td><?= $rating->kriteria37 == 4 ? $rating->kriteria37 : 0 ?></td>
                <td><?= $rating->kriteria38 == 4 ? $rating->kriteria38 : 0 ?></td>
              </tr>
              <tr class="text-center">
                <td>IPS</td>
                <td><?= $rating->kriteria2 ?></td>
                <td><?= $rating->kriteria3 ?></td>
                <td><?= $rating->kriteria5 ?></td>
                <td><?= $rating->kriteria6 ?></td>
                <td><?= $rating->kriteria7 ?></td>
                <td><?= $rating->kriteria8 ?></td>
                <td><?= $rating->kriteria9 ?></td>
                <td><?= $rating->kriteria10 ?></td>
                <td><?= $rating->kriteria11 ?></td>
                <td><?= $rating->kriteria12 ?></td>
                <td><?= $rating->kriteria13 ?></td>
                <td><?= $rating->kriteria14 ?></td>
                <td><?= $rating->kriteria15 ?></td>
                <td><?= $rating->kriteria16 ?></td>
                <td><?= $rating->kriteria17 ?></td>
                <td><?= $rating->kriteria18 ?></td>
                <td><?= $rating->kriteria19 ?></td>
                <td><?= $rating->kriteria20 ?></td>
                <td><?= $rating->kriteria21 ?></td>
                <td><?= $rating->kriteria22 ?></td>
                <td><?= $rating->kriteria23 ?></td>
                <td><?= $rating->kriteria30 ?></td>
                <td><?= $rating->kriteria31 ?></td>
                <td><?= $rating->kriteria32 ?></td>
                <td><?= $rating->kriteria33 ?></td>
                <td><?= $rating->kriteria34 ?></td>
                <td><?= $rating->kriteria35 ?></td>
                <td><?= $rating->kriteria36 == 3 ? $rating->kriteria36 : 0 ?></td>
                <td><?= $rating->kriteria37 == 3 ? $rating->kriteria37 : 0 ?></td>
                <td><?= $rating->kriteria38 == 3 ? $rating->kriteria38 : 0 ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- /.content -->

  <!-- Conten Nilai Normalisasi -->
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $tabel_normalisasi; ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-responsive table-bordered table-hover mt-2">
          <thead>
            <tr class="text-center">
              <th>NISN</th>
              <th>A\C</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
              <th>C7</th>
              <th>C8</th>
              <th>C9</th>
              <th>C10</th>
              <th>C11</th>
              <th>C12</th>
              <th>C13</th>
              <th>C14</th>
              <th>C15</th>
              <th>C16</th>
              <th>C17</th>
              <th>C18</th>
              <th>C19</th>
              <th>C20</th>
              <th>C21</th>
              <th>C22</th>
              <th>C23</th>
              <th>C24</th>
              <th>C25</th>
              <th>C26</th>
              <th>C27</th>
              <th>C28</th>
              <th>C29</th>
              <th>C30</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai_rating as $rating) :
            ?>
              <tr class="text-center">
                <td rowspan="2" style="vertical-align: middle;"><?= $rating->nisn ?></td>
                <td>IPA</td>
                <td><?= @round($rating->kriteria1 / $c1, 3) ?></td>
                <td><?= @round($rating->kriteria3 / $c2, 3) ?></td>
                <td><?= @round($rating->kriteria4 / $c3, 3) ?></td>
                <td><?= @round($rating->kriteria6 / $c4, 3) ?></td>
                <td><?= @round($rating->kriteria7 / $c5, 3) ?></td>
                <td><?= @round($rating->kriteria8 / $c6, 3) ?></td>
                <td><?= @round($rating->kriteria9 / $c7, 3) ?></td>
                <td><?= @round($rating->kriteria10 / $c8, 3) ?></td>
                <td><?= @round($rating->kriteria11 / $c9, 3) ?></td>
                <td><?= @round($rating->kriteria12 / $c10, 3) ?></td>
                <td><?= @round($rating->kriteria13 / $c11, 3) ?></td>
                <td><?= @round($rating->kriteria14 / $c12, 3) ?></td>
                <td><?= @round($rating->kriteria15 / $c13, 3) ?></td>
                <td><?= @round($rating->kriteria16 / $c14, 3) ?></td>
                <td><?= @round($rating->kriteria17 / $c15, 3) ?></td>
                <td><?= @round($rating->kriteria18 / $c16, 3) ?></td>
                <td><?= @round($rating->kriteria19 / $c17, 3) ?></td>
                <td><?= @round($rating->kriteria20 / $c18, 3) ?></td>
                <td><?= @round($rating->kriteria21 / $c19, 3) ?></td>
                <td><?= @round($rating->kriteria22 / $c20, 3) ?></td>
                <td><?= @round($rating->kriteria23 / $c21, 3) ?></td>
                <td><?= @round($rating->kriteria24 / $c22, 3) ?></td>
                <td><?= @round($rating->kriteria25 / $c23, 3) ?></td>
                <td><?= @round($rating->kriteria26 / $c24, 3) ?></td>
                <td><?= @round($rating->kriteria27 / $c25, 3) ?></td>
                <td><?= @round($rating->kriteria28 / $c26, 3) ?></td>
                <td><?= @round($rating->kriteria29 / $c27, 3) ?></td>
                <td><?= $rating->kriteria36 == 4 ? @round($rating->kriteria36 / $c28, 3) : 0 ?></td>
                <td><?= $rating->kriteria37 == 4 ? @round($rating->kriteria37 / $c29, 3) : 0 ?></td>
                <td><?= $rating->kriteria38 == 4 ? @round($rating->kriteria38 / $c30, 3) : 0 ?></td>
              </tr>
              <tr class="text-center">
                <td>IPS</td>
                <td><?= @round($rating->kriteria2 / $c1, 3) ?></td>
                <td><?= @round($rating->kriteria3 / $c2, 3) ?></td>
                <td><?= @round($rating->kriteria5 / $c3, 3) ?></td>
                <td><?= @round($rating->kriteria6 / $c4, 3) ?></td>
                <td><?= @round($rating->kriteria7 / $c5, 3) ?></td>
                <td><?= @round($rating->kriteria8 / $c6, 3) ?></td>
                <td><?= @round($rating->kriteria9 / $c7, 3) ?></td>
                <td><?= @round($rating->kriteria10 / $c8, 3) ?></td>
                <td><?= @round($rating->kriteria11 / $c9, 3) ?></td>
                <td><?= @round($rating->kriteria12 / $c10, 3) ?></td>
                <td><?= @round($rating->kriteria13 / $c11, 3) ?></td>
                <td><?= @round($rating->kriteria14 / $c12, 3) ?></td>
                <td><?= @round($rating->kriteria15 / $c13, 3) ?></td>
                <td><?= @round($rating->kriteria16 / $c14, 3) ?></td>
                <td><?= @round($rating->kriteria17 / $c15, 3) ?></td>
                <td><?= @round($rating->kriteria18 / $c16, 3) ?></td>
                <td><?= @round($rating->kriteria19 / $c17, 3) ?></td>
                <td><?= @round($rating->kriteria20 / $c18, 3) ?></td>
                <td><?= @round($rating->kriteria21 / $c19, 3) ?></td>
                <td><?= @round($rating->kriteria22 / $c20, 3) ?></td>
                <td><?= @round($rating->kriteria23 / $c21, 3) ?></td>
                <td><?= @round($rating->kriteria30 / $c22, 3) ?></td>
                <td><?= @round($rating->kriteria31 / $c23, 3) ?></td>
                <td><?= @round($rating->kriteria32 / $c24, 3) ?></td>
                <td><?= @round($rating->kriteria33 / $c25, 3) ?></td>
                <td><?= @round($rating->kriteria34 / $c26, 3) ?></td>
                <td><?= @round($rating->kriteria35 / $c27, 3) ?></td>
                <td><?= $rating->kriteria36 == 3 ? @round($rating->kriteria36 / $c28, 3) : 0 ?></td>
                <td><?= $rating->kriteria37 == 3 ? @round($rating->kriteria37 / $c29, 3) : 0 ?></td>
                <td><?= $rating->kriteria38 == 3 ? @round($rating->kriteria38 / $c30, 3) : 0 ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- /.content -->
  <!-- /.content -->

  <!-- Conten Nilai Normalisasi Terbobot -->
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $tabel_normalisasi_terbobot ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-responsive table-bordered table-hover mt-2">
          <thead>
            <tr class="text-center">
              <th>NISN</th>
              <th>A\C</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
              <th>C7</th>
              <th>C8</th>
              <th>C9</th>
              <th>C10</th>
              <th>C11</th>
              <th>C12</th>
              <th>C13</th>
              <th>C14</th>
              <th>C15</th>
              <th>C16</th>
              <th>C17</th>
              <th>C18</th>
              <th>C19</th>
              <th>C20</th>
              <th>C21</th>
              <th>C22</th>
              <th>C23</th>
              <th>C24</th>
              <th>C25</th>
              <th>C26</th>
              <th>C27</th>
              <th>C28</th>
              <th>C29</th>
              <th>C30</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai_rating as $rating) :
            ?>
              <tr class="text-center">
                <td rowspan="2" style="vertical-align: middle;"><?= $rating->nisn ?></td>
                <td>IPA</td>
                <td><?= @round($rating->kriteria1 / $c1 * $bk1, 3) ?></td>
                <td><?= @round($rating->kriteria3 / $c2 * $bk3, 3) ?></td>
                <td><?= @round($rating->kriteria4 / $c3 * $bk4, 3) ?></td>
                <td><?= @round($rating->kriteria6 / $c4 * $bk6, 3) ?></td>
                <td><?= @round($rating->kriteria7 / $c5 * $bk7, 3) ?></td>
                <td><?= @round($rating->kriteria8 / $c6 * $bk8, 3) ?></td>
                <td><?= @round($rating->kriteria9 / $c7 * $bk9, 3) ?></td>
                <td><?= @round($rating->kriteria10 / $c8 * $bk10, 3) ?></td>
                <td><?= @round($rating->kriteria11 / $c9 * $bk11, 3) ?></td>
                <td><?= @round($rating->kriteria12 / $c10 * $bk12, 3) ?></td>
                <td><?= @round($rating->kriteria13 / $c11 * $bk13, 3) ?></td>
                <td><?= @round($rating->kriteria14 / $c12 * $bk14, 3) ?></td>
                <td><?= @round($rating->kriteria15 / $c13 * $bk15, 3) ?></td>
                <td><?= @round($rating->kriteria16 / $c14 * $bk16, 3) ?></td>
                <td><?= @round($rating->kriteria17 / $c15 * $bk17, 3) ?></td>
                <td><?= @round($rating->kriteria18 / $c16 * $bk18, 3) ?></td>
                <td><?= @round($rating->kriteria19 / $c17 * $bk19, 3) ?></td>
                <td><?= @round($rating->kriteria20 / $c18 * $bk20, 3) ?></td>
                <td><?= @round($rating->kriteria21 / $c19 * $bk21, 3) ?></td>
                <td><?= @round($rating->kriteria22 / $c20 * $bk22, 3) ?></td>
                <td><?= @round($rating->kriteria23 / $c21 * $bk23, 3) ?></td>
                <td><?= @round($rating->kriteria24 / $c22 * $bk24, 3) ?></td>
                <td><?= @round($rating->kriteria25 / $c23 * $bk25, 3) ?></td>
                <td><?= @round($rating->kriteria26 / $c24 * $bk26, 3) ?></td>
                <td><?= @round($rating->kriteria27 / $c25 * $bk27, 3) ?></td>
                <td><?= @round($rating->kriteria28 / $c26 * $bk28, 3) ?></td>
                <td><?= @round($rating->kriteria29 / $c27 * $bk29, 3) ?></td>
                <td><?= $rating->kriteria36 == 4 ? @round($rating->kriteria36 / $c28 * $bk36, 3) : 0 ?></td>
                <td><?= $rating->kriteria37 == 4 ? @round($rating->kriteria37 / $c29 * $bk37, 3) : 0 ?></td>
                <td><?= $rating->kriteria38 == 4 ? @round($rating->kriteria38 / $c30 * $bk38, 3) : 0 ?></td>
              </tr>
              <tr class="text-center">
                <td>IPS</td>
                <td><?= @round($rating->kriteria2 / $c1 * $bk2, 3) ?></td>
                <td><?= @round($rating->kriteria3 / $c2 * $bk3, 3) ?></td>
                <td><?= @round($rating->kriteria5 / $c3 * $bk5, 3) ?></td>
                <td><?= @round($rating->kriteria6 / $c4 * $bk6, 3) ?></td>
                <td><?= @round($rating->kriteria7 / $c5 * $bk7, 3) ?></td>
                <td><?= @round($rating->kriteria8 / $c6 * $bk8, 3) ?></td>
                <td><?= @round($rating->kriteria9 / $c7 * $bk9, 3) ?></td>
                <td><?= @round($rating->kriteria10 / $c8 * $bk10, 3) ?></td>
                <td><?= @round($rating->kriteria11 / $c9 * $bk11, 3) ?></td>
                <td><?= @round($rating->kriteria12 / $c10 * $bk12, 3) ?></td>
                <td><?= @round($rating->kriteria13 / $c11 * $bk13, 3) ?></td>
                <td><?= @round($rating->kriteria14 / $c12 * $bk14, 3) ?></td>
                <td><?= @round($rating->kriteria15 / $c13 * $bk15, 3) ?></td>
                <td><?= @round($rating->kriteria16 / $c14 * $bk16, 3) ?></td>
                <td><?= @round($rating->kriteria17 / $c15 * $bk17, 3) ?></td>
                <td><?= @round($rating->kriteria18 / $c16 * $bk18, 3) ?></td>
                <td><?= @round($rating->kriteria19 / $c17 * $bk19, 3) ?></td>
                <td><?= @round($rating->kriteria20 / $c18 * $bk20, 3) ?></td>
                <td><?= @round($rating->kriteria21 / $c19 * $bk21, 3) ?></td>
                <td><?= @round($rating->kriteria22 / $c20 * $bk22, 3) ?></td>
                <td><?= @round($rating->kriteria23 / $c21 * $bk23, 3) ?></td>
                <td><?= @round($rating->kriteria30 / $c22 * $bk30, 3) ?></td>
                <td><?= @round($rating->kriteria31 / $c23 * $bk31, 3) ?></td>
                <td><?= @round($rating->kriteria32 / $c24 * $bk32, 3) ?></td>
                <td><?= @round($rating->kriteria33 / $c25 * $bk33, 3) ?></td>
                <td><?= @round($rating->kriteria34 / $c26 * $bk34, 3) ?></td>
                <td><?= @round($rating->kriteria35 / $c27 * $bk35, 3) ?></td>
                <td><?= $rating->kriteria36 == 3 ? @round($rating->kriteria36 / $c28 * $bk36, 3) : 0 ?></td>
                <td><?= $rating->kriteria37 == 3 ? @round($rating->kriteria37 / $c29 * $bk37, 3) : 0 ?></td>
                <td><?= $rating->kriteria38 == 3 ? @round($rating->kriteria38 / $c30 * $bk38, 3) : 0 ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- /.content -->

  <!-- Conten Nilai Pencarian Nilai Yi -->
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $tabel_pencarian_yi ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-hover mt-2">
          <thead>
            <tr class="text-center">
              <th>NISN</th>
              <th>A\C</th>
              <th>MAXIMUM</th>
              <th>MINIMUM</th>
              <th>Yi = MAX - MIN</th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($nilai_rating as $rating) :

              // Pencarian Jenis Benefit / Cost Kriteria Ipa
              // C1
              foreach ($jenis_kriteria_1 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c1_ipa = $rating->kriteria1 / $c1 * $bk1;
                } else {
                  @$cost_c1_ipa = $rating->kriteria1 / $c1 * $bk1;
                }
              }

              // C2
              foreach ($jenis_kriteria_3 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c2_ipa = $rating->kriteria3 / $c2 * $bk3;
                } else {
                  @$cost_c2_ipa = $rating->kriteria3 / $c2 * $bk3;
                }
              }

              // C3
              foreach ($jenis_kriteria_4 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c3_ipa = $rating->kriteria4 / $c3 * $bk4;
                } else {
                  @$cost_c3_ipa = $rating->kriteria4 / $c3 * $bk4;
                }
              }

              // C4
              foreach ($jenis_kriteria_6 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c4_ipa = $rating->kriteria6 / $c4 * $bk6;
                } else {
                  @$cost_c4_ipa = $rating->kriteria6 / $c4 * $bk6;
                }
              }

              // C5
              foreach ($jenis_kriteria_7 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c5_ipa = $rating->kriteria7 / $c5 * $bk7;
                } else {
                  @$cost_c5_ipa = $rating->kriteria7 / $c5 * $bk7;
                }
              }

              // C6
              foreach ($jenis_kriteria_8 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c6_ipa = $rating->kriteria8 / $c6 * $bk8;
                } else {
                  @$cost_c6_ipa = $rating->kriteria8 / $c6 * $bk8;
                }
              }

              // C7
              foreach ($jenis_kriteria_9 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c7_ipa = $rating->kriteria9 / $c7 * $bk9;
                } else {
                  @$cost_c7_ipa = $rating->kriteria9 / $c7 * $bk9;
                }
              }

              // C8
              foreach ($jenis_kriteria_10 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c8_ipa = $rating->kriteria10 / $c8 * $bk10;
                } else {
                  @$cost_c8_ipa = $rating->kriteria10 / $c8 * $bk10;
                }
              }

              // C9
              foreach ($jenis_kriteria_11 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c9_ipa = $rating->kriteria11 / $c9 * $bk11;
                } else {
                  @$cost_c9_ipa = $rating->kriteria11 / $c9 * $bk11;
                }
              }

              // C10
              foreach ($jenis_kriteria_12 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c10_ipa = $rating->kriteria12 / $c10 * $bk12;
                } else {
                  @$cost_c10_ipa = $rating->kriteria12 / $c210 * $bk12;
                }
              }

              // C11
              foreach ($jenis_kriteria_13 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c11_ipa = $rating->kriteria13 / $c11 * $bk13;
                } else {
                  @$cost_c11_ipa = $rating->kriteria13 / $c11 * $bk13;
                }
              }

              // C12
              foreach ($jenis_kriteria_14 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c12_ipa = $rating->kriteria14 / $c12 * $bk14;
                } else {
                  @$cost_c12_ipa = $rating->kriteria14 / $c12 * $bk14;
                }
              }

              // C13
              foreach ($jenis_kriteria_15 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c13_ipa = $rating->kriteria15 / $c13 * $bk15;
                } else {
                  @$cost_c13_ipa = $rating->kriteria15 / $c13 * $bk15;
                }
              }

              // C14
              foreach ($jenis_kriteria_16 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c14_ipa = $rating->kriteria16 / $c14 * $bk16;
                } else {
                  @$cost_c14_ipa = $rating->kriteria16 / $c14 * $bk16;
                }
              }

              // C15
              foreach ($jenis_kriteria_17 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c15_ipa = $rating->kriteria17 / $c15 * $bk17;
                } else {
                  @$cost_c15_ipa = $rating->kriteria17 / $c15 * $bk17;
                }
              }

              // C16
              foreach ($jenis_kriteria_18 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c16_ipa = $rating->kriteria18 / $c16 * $bk18;
                } else {
                  @$cost_c16_ipa = $rating->kriteria18 / $c16 * $bk18;
                }
              }

              // C17
              foreach ($jenis_kriteria_19 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c17_ipa = $rating->kriteria19 / $c17 * $bk19;
                } else {
                  @$cost_c17_ipa = $rating->kriteria19 / $c17 * $bk19;
                }
              }

              // C18
              foreach ($jenis_kriteria_20 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c18_ipa = $rating->kriteria20 / $c18 * $bk20;
                } else {
                  @$cost_c18_ipa = $rating->kriteria20 / $c18 * $bk20;
                }
              }

              // C19
              foreach ($jenis_kriteria_21 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c19_ipa = $rating->kriteria21 / $c19 * $bk21;
                } else {
                  @$cost_c19_ipa = $rating->kriteria21 / $c19 * $bk21;
                }
              }

              // C20
              foreach ($jenis_kriteria_22 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c20_ipa = $rating->kriteria22 / $c20 * $bk22;
                } else {
                  @$cost_c20_ipa = $rating->kriteria22 / $c20 * $bk22;
                }
              }

              // C21
              foreach ($jenis_kriteria_23 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c21_ipa = $rating->kriteria23 / $c21 * $bk23;
                } else {
                  @$cost_c21_ipa = $rating->kriteria23 / $c21 * $bk23;
                }
              }

              // C22
              foreach ($jenis_kriteria_24 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c22_ipa = $rating->kriteria24 / $c22 * $bk24;
                } else {
                  @$cost_c22_ipa = $rating->kriteria24 / $c22 * $bk24;
                }
              }

              // C23
              foreach ($jenis_kriteria_25 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c23_ipa = $rating->kriteria25 / $c23 * $bk25;
                } else {
                  @$cost_c23_ipa = $rating->kriteria25 / $c23 * $bk25;
                }
              }

              // C24
              foreach ($jenis_kriteria_26 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c24_ipa = $rating->kriteria26 / $c24 * $bk26;
                } else {
                  @$cost_c24_ipa = $rating->kriteria26 / $c24 * $bk26;
                }
              }

              // C25
              foreach ($jenis_kriteria_27 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c25_ipa = $rating->kriteria27 / $c25 * $bk27;
                } else {
                  @$cost_c25_ipa = $rating->kriteria27 / $c25 * $bk27;
                }
              }

              // C26
              foreach ($jenis_kriteria_28 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c26_ipa = $rating->kriteria28 / $c26 * $bk28;
                } else {
                  @$cost_c26_ipa = $rating->kriteria28 / $c26 * $bk28;
                }
              }

              // C27
              foreach ($jenis_kriteria_29 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c27_ipa = $rating->kriteria29 / $c27 * $bk29;
                } else {
                  @$cost_c27_ipa = $rating->kriteria29 / $c27 * $bk29;
                }
              }

              // C28
              foreach ($jenis_kriteria_36 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria36 = $rating->kriteria36 == 4 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$benefit_c28_ipa = $kriteria36;
                } else {
                  @$kriteria36 = $rating->kriteria36 == 4 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$cost_c28_ipa = $kriteria36;
                }
              }

              // C29
              foreach ($jenis_kriteria_37 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria37 = $rating->kriteria37 == 4 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$benefit_c29_ipa = $kriteria37;
                } else {
                  @$kriteria37 = $rating->kriteria37 == 4 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$cost_c29_ipa = $kriteria37;
                }
              }

              // C30
              foreach ($jenis_kriteria_38 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria38 = $rating->kriteria38 == 4 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$benefit_c30_ipa = $kriteria38;
                } else {
                  @$kriteria38 = $rating->kriteria38 == 4 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$cost_c30_ipa = $kriteria38;
                }
              }

              // Pencarian Jenis Benefit / Cost Kriteria Ips
              // C1
              foreach ($jenis_kriteria_2 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c1_ips = $rating->kriteria2 / $c1 * $bk2;
                } else {
                  @$cost_c1_ips = $rating->kriteria2 / $c1 * $bk2;
                }
              }

              // C2
              foreach ($jenis_kriteria_3 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c2_ips = $rating->kriteria3 / $c2 * $bk3;
                } else {
                  @$cost_c2_ips = $rating->kriteria3 / $c2 * $bk3;
                }
              }

              // C3
              foreach ($jenis_kriteria_5 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c3_ips = $rating->kriteria5 / $c3 * $bk5;
                } else {
                  @$cost_c3_ips = $rating->kriteria5 / $c3 * $bk5;
                }
              }

              // C4
              foreach ($jenis_kriteria_6 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c4_ips = $rating->kriteria6 / $c4 * $bk6;
                } else {
                  @$cost_c4_ips = $rating->kriteria6 / $c4 * $bk6;
                }
              }

              // C5
              foreach ($jenis_kriteria_7 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c5_ips = $rating->kriteria7 / $c5 * $bk7;
                } else {
                  @$cost_c5_ips = $rating->kriteria7 / $c5 * $bk7;
                }
              }

              // C6
              foreach ($jenis_kriteria_8 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c6_ips = $rating->kriteria8 / $c6 * $bk8;
                } else {
                  @$cost_c6_ips = $rating->kriteria8 / $c6 * $bk8;
                }
              }

              // C7
              foreach ($jenis_kriteria_9 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c7_ips = $rating->kriteria9 / $c7 * $bk9;
                } else {
                  @$cost_c7_ips = $rating->kriteria9 / $c7 * $bk9;
                }
              }

              // C8
              foreach ($jenis_kriteria_10 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c8_ips = $rating->kriteria10 / $c8 * $bk10;
                } else {
                  @$cost_c8_ips = $rating->kriteria10 / $c8 * $bk10;
                }
              }

              // C9
              foreach ($jenis_kriteria_11 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c9_ips = $rating->kriteria11 / $c9 * $bk11;
                } else {
                  @$cost_c9_ips = $rating->kriteria11 / $c9 * $bk11;
                }
              }

              // C10
              foreach ($jenis_kriteria_12 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c10_ips = $rating->kriteria12 / $c10 * $bk12;
                } else {
                  @$cost_c10_ips = $rating->kriteria12 / $c210 * $bk12;
                }
              }

              // C11
              foreach ($jenis_kriteria_13 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c11_ips = $rating->kriteria13 / $c11 * $bk13;
                } else {
                  @$cost_c11_ips = $rating->kriteria13 / $c11 * $bk13;
                }
              }

              // C12
              foreach ($jenis_kriteria_14 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c12_ips = $rating->kriteria14 / $c12 * $bk14;
                } else {
                  @$cost_c12_ips = $rating->kriteria14 / $c12 * $bk14;
                }
              }

              // C13
              foreach ($jenis_kriteria_15 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c13_ips = $rating->kriteria15 / $c13 * $bk15;
                } else {
                  @$cost_c13_ips = $rating->kriteria15 / $c13 * $bk15;
                }
              }

              // C14
              foreach ($jenis_kriteria_16 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c14_ips = $rating->kriteria16 / $c14 * $bk16;
                } else {
                  @$cost_c14_ips = $rating->kriteria16 / $c14 * $bk16;
                }
              }

              // C15
              foreach ($jenis_kriteria_17 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c15_ips = $rating->kriteria17 / $c15 * $bk17;
                } else {
                  @$cost_c15_ips = $rating->kriteria17 / $c15 * $bk17;
                }
              }

              // C16
              foreach ($jenis_kriteria_18 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c16_ips = $rating->kriteria18 / $c16 * $bk18;
                } else {
                  @$cost_c16_ips = $rating->kriteria18 / $c16 * $bk18;
                }
              }

              // C17
              foreach ($jenis_kriteria_19 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c17_ips = $rating->kriteria19 / $c17 * $bk19;
                } else {
                  @$cost_c17_ips = $rating->kriteria19 / $c17 * $bk19;
                }
              }

              // C18
              foreach ($jenis_kriteria_20 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c18_ips = $rating->kriteria20 / $c18 * $bk20;
                } else {
                  @$cost_c18_ips = $rating->kriteria20 / $c18 * $bk20;
                }
              }

              // C19
              foreach ($jenis_kriteria_21 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c19_ips = $rating->kriteria21 / $c19 * $bk21;
                } else {
                  @$cost_c19_ips = $rating->kriteria21 / $c19 * $bk21;
                }
              }

              // C20
              foreach ($jenis_kriteria_22 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c20_ips = $rating->kriteria22 / $c20 * $bk22;
                } else {
                  @$cost_c20_ips = $rating->kriteria22 / $c20 * $bk22;
                }
              }

              // C21
              foreach ($jenis_kriteria_23 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c21_ips = $rating->kriteria23 / $c21 * $bk23;
                } else {
                  @$cost_c21_ips = $rating->kriteria23 / $c21 * $bk23;
                }
              }

              // C22
              foreach ($jenis_kriteria_30 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c22_ips = $rating->kriteria30 / $c22 * $bk30;
                } else {
                  @$cost_c22_ips = $rating->kriteria30 / $c22 * $bk30;
                }
              }

              // C23
              foreach ($jenis_kriteria_31 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c23_ips = $rating->kriteria31 / $c23 * $bk31;
                } else {
                  @$cost_c23_ips = $rating->kriteria31 / $c23 * $bk31;
                }
              }

              // C24
              foreach ($jenis_kriteria_32 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c24_ips = $rating->kriteria32 / $c24 * $bk32;
                } else {
                  @$cost_c24_ips = $rating->kriteria32 / $c24 * $bk32;
                }
              }

              // C25
              foreach ($jenis_kriteria_33 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c25_ips = $rating->kriteria33 / $c25 * $bk33;
                } else {
                  @$cost_c25_ips = $rating->kriteria33 / $c25 * $bk33;
                }
              }

              // C26
              foreach ($jenis_kriteria_34 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c26_ips = $rating->kriteria34 / $c26 * $bk34;
                } else {
                  @$cost_c26_ips = $rating->kriteria34 / $c26 * $bk34;
                }
              }

              // C27
              foreach ($jenis_kriteria_35 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c27_ips = $rating->kriteria35 / $c27 * $bk35;
                } else {
                  @$cost_c27_ips = $rating->kriteria35 / $c27 * $bk35;
                }
              }

              // C28
              foreach ($jenis_kriteria_36 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria36 = $rating->kriteria36 == 3 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$benefit_c28_ips = $kriteria36;
                } else {
                  @$kriteria36 = $rating->kriteria36 == 3 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$cost_c28_ips = $kriteria36;
                }
              }

              // C29
              foreach ($jenis_kriteria_37 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria37 = $rating->kriteria37 == 3 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$benefit_c29_ips = $kriteria37;
                } else {
                  @$kriteria37 = $rating->kriteria37 == 3 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$cost_c29_ips = $kriteria37;
                }
              }

              // C30
              foreach ($jenis_kriteria_38 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria38 = $rating->kriteria38 == 3 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$benefit_c30_ips = $kriteria38;
                } else {
                  @$kriteria38 = $rating->kriteria38 == 3 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$cost_c30_ips = $kriteria38;
                }
              }

              // Pencarian Nilai Max Ipa
              @$max_ipa = $benefit_c1_ipa + $benefit_c2_ipa + $benefit_c3_ipa + $benefit_c4_ipa + $benefit_c5_ipa + $benefit_c6_ipa + $benefit_c7_ipa + $benefit_c8_ipa + $benefit_c9_ipa + $benefit_c10_ipa + $benefit_c11_ipa + $benefit_c12_ipa + $benefit_c13_ipa + $benefit_c14_ipa + $benefit_c15_ipa + $benefit_c16_ipa + $benefit_c17_ipa + $benefit_c18_ipa + $benefit_c19_ipa + $benefit_c20_ipa + $benefit_c21_ipa + $benefit_c22_ipa + $benefit_c23_ipa + $benefit_c24_ipa + $benefit_c25_ipa + $benefit_c26_ipa + $benefit_c27_ipa + $benefit_c28_ipa + $benefit_c29_ipa + $benefit_c30_ipa;
              // Pencarian Nilai Min Ips
              @$min_ipa = $cost_c1_ipa + $cost_c2_ipa + $cost_c3_ipa + $cost_c4_ipa + $cost_c5_ipa + $cost_c6_ipa + $cost_c7_ipa + $cost_c8_ipa + $cost_c9_ipa + $cost_c10_ipa + $cost_c11_ipa + $cost_c12_ipa + $cost_c13_ipa + $cost_c14_ipa + $cost_c15_ipa + $cost_c16_ipa + $cost_c17_ipa + $cost_c18_ipa + $cost_c19_ipa + $cost_c20_ipa + $cost_c21_ipa + $cost_c22_ipa + $cost_c23_ipa + $cost_c24_ipa + $cost_c25_ipa + $cost_c26_ipa + $cost_c27_ipa + $cost_c28_ipa + $cost_c29_ipa + $cost_c30_ipa;
              // Pencarian Nilai Yi Ipa
              $yi_ipa = $max_ipa - $min_ipa;

              // Pencarian Nilai Max Ips
              @$max_ips = $benefit_c1_ips + $benefit_c2_ips + $benefit_c3_ips + $benefit_c4_ips + $benefit_c5_ips + $benefit_c6_ips + $benefit_c7_ips + $benefit_c8_ips + $benefit_c9_ips + $benefit_c10_ips + $benefit_c11_ips + $benefit_c12_ips + $benefit_c13_ips + $benefit_c14_ips + $benefit_c15_ips + $benefit_c16_ips + $benefit_c17_ips + $benefit_c18_ips + $benefit_c19_ips + $benefit_c20_ips + $benefit_c21_ips + $benefit_c22_ips + $benefit_c23_ips + $benefit_c24_ips + $benefit_c25_ips + $benefit_c26_ips + $benefit_c27_ips + $benefit_c28_ips + $benefit_c29_ips + $benefit_c30_ips;
              // Pencarian Nilai Min Ips
              @$min_ips = $cost_c1_ips + $cost_c2_ips + $cost_c3_ips + $cost_c4_ips + $cost_c5_ips + $cost_c6_ips + $cost_c7_ips + $cost_c8_ips + $cost_c9_ips + $cost_c10_ips + $cost_c11_ips + $cost_c12_ips + $cost_c13_ips + $cost_c14_ips + $cost_c15_ips + $cost_c16_ips + $cost_c17_ips + $cost_c18_ips + $cost_c19_ips + $cost_c20_ips + $cost_c21_ips + $cost_c22_ips + $cost_c23_ips + $cost_c24_ips + $cost_c25_ips + $cost_c26_ips + $cost_c27_ips + $cost_c28_ips + $cost_c29_ips + $cost_c30_ips;
              // Pencarian Nilai Yi Ips
              $yi_ips = $max_ips - $min_ips;

              $n1 = 4;
              $n2 = 5;
              $h = $n1 - $n2;
              echo $min_ipa;
            ?>
              <tr class="text-center">
                <td rowspan="2" style="vertical-align: middle;"><?= $rating->nisn ?></td>
                <td>IPA</td>
                <td><?= @round($max_ipa, 3) ?></td>
                <td><?= @round($min_ipa, 3) ?></td>
                <td><?= @round($yi_ipa, 3) ?></td>
              </tr>
              <tr class="text-center">
                <td>IPS</td>
                <td><?= @round($max_ips, 3) ?></td>
                <td><?= @round($min_ips, 3) ?></td>
                <td><?= @round($yi_ips, 3) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- /.content -->

  <!-- Conten Nilai Perangkingan Yi -->
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $tabel_perangkingan_yi ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-hover mt-2">
          <thead>
            <tr class="text-center">
              <th>NISN</th>
              <th>A\C</th>
              <th>Yi</th>
              <th>Rank</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($nilai_rating as $rating) :

              // Pencarian Jenis Benefit / Cost Kriteria Ipa
              // C1
              foreach ($jenis_kriteria_1 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c1_ipa = $rating->kriteria1 / $c1 * $bk1;
                } else {
                  @$cost_c1_ipa = $rating->kriteria1 / $c1 * $bk1;
                }
              }

              // C2
              foreach ($jenis_kriteria_3 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c2_ipa = $rating->kriteria3 / $c2 * $bk3;
                } else {
                  @$cost_c2_ipa = $rating->kriteria3 / $c2 * $bk3;
                }
              }

              // C3
              foreach ($jenis_kriteria_4 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c3_ipa = $rating->kriteria4 / $c3 * $bk4;
                } else {
                  @$cost_c3_ipa = $rating->kriteria4 / $c3 * $bk4;
                }
              }

              // C4
              foreach ($jenis_kriteria_6 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c4_ipa = $rating->kriteria6 / $c4 * $bk6;
                } else {
                  @$cost_c4_ipa = $rating->kriteria6 / $c4 * $bk6;
                }
              }

              // C5
              foreach ($jenis_kriteria_7 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c5_ipa = $rating->kriteria7 / $c5 * $bk7;
                } else {
                  @$cost_c5_ipa = $rating->kriteria7 / $c5 * $bk7;
                }
              }

              // C6
              foreach ($jenis_kriteria_8 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c6_ipa = $rating->kriteria8 / $c6 * $bk8;
                } else {
                  @$cost_c6_ipa = $rating->kriteria8 / $c6 * $bk8;
                }
              }

              // C7
              foreach ($jenis_kriteria_9 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c7_ipa = $rating->kriteria9 / $c7 * $bk9;
                } else {
                  @$cost_c7_ipa = $rating->kriteria9 / $c7 * $bk9;
                }
              }

              // C8
              foreach ($jenis_kriteria_10 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c8_ipa = $rating->kriteria10 / $c8 * $bk10;
                } else {
                  @$cost_c8_ipa = $rating->kriteria10 / $c8 * $bk10;
                }
              }

              // C9
              foreach ($jenis_kriteria_11 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c9_ipa = $rating->kriteria11 / $c9 * $bk11;
                } else {
                  @$cost_c9_ipa = $rating->kriteria11 / $c9 * $bk11;
                }
              }

              // C10
              foreach ($jenis_kriteria_12 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c10_ipa = $rating->kriteria12 / $c10 * $bk12;
                } else {
                  @$cost_c10_ipa = $rating->kriteria12 / $c210 * $bk12;
                }
              }

              // C11
              foreach ($jenis_kriteria_13 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c11_ipa = $rating->kriteria13 / $c11 * $bk13;
                } else {
                  @$cost_c11_ipa = $rating->kriteria13 / $c11 * $bk13;
                }
              }

              // C12
              foreach ($jenis_kriteria_14 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c12_ipa = $rating->kriteria14 / $c12 * $bk14;
                } else {
                  @$cost_c12_ipa = $rating->kriteria14 / $c12 * $bk14;
                }
              }

              // C13
              foreach ($jenis_kriteria_15 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c13_ipa = $rating->kriteria15 / $c13 * $bk15;
                } else {
                  @$cost_c13_ipa = $rating->kriteria15 / $c13 * $bk15;
                }
              }

              // C14
              foreach ($jenis_kriteria_16 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c14_ipa = $rating->kriteria16 / $c14 * $bk16;
                } else {
                  @$cost_c14_ipa = $rating->kriteria16 / $c14 * $bk16;
                }
              }

              // C15
              foreach ($jenis_kriteria_17 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c15_ipa = $rating->kriteria17 / $c15 * $bk17;
                } else {
                  @$cost_c15_ipa = $rating->kriteria17 / $c15 * $bk17;
                }
              }

              // C16
              foreach ($jenis_kriteria_18 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c16_ipa = $rating->kriteria18 / $c16 * $bk18;
                } else {
                  @$cost_c16_ipa = $rating->kriteria18 / $c16 * $bk18;
                }
              }

              // C17
              foreach ($jenis_kriteria_19 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c17_ipa = $rating->kriteria19 / $c17 * $bk19;
                } else {
                  @$cost_c17_ipa = $rating->kriteria19 / $c17 * $bk19;
                }
              }

              // C18
              foreach ($jenis_kriteria_20 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c18_ipa = $rating->kriteria20 / $c18 * $bk20;
                } else {
                  @$cost_c18_ipa = $rating->kriteria20 / $c18 * $bk20;
                }
              }

              // C19
              foreach ($jenis_kriteria_21 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c19_ipa = $rating->kriteria21 / $c19 * $bk21;
                } else {
                  @$cost_c19_ipa = $rating->kriteria21 / $c19 * $bk21;
                }
              }

              // C20
              foreach ($jenis_kriteria_22 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c20_ipa = $rating->kriteria22 / $c20 * $bk22;
                } else {
                  @$cost_c20_ipa = $rating->kriteria22 / $c20 * $bk22;
                }
              }

              // C21
              foreach ($jenis_kriteria_23 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c21_ipa = $rating->kriteria23 / $c21 * $bk23;
                } else {
                  @$cost_c21_ipa = $rating->kriteria23 / $c21 * $bk23;
                }
              }

              // C22
              foreach ($jenis_kriteria_24 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c22_ipa = $rating->kriteria24 / $c22 * $bk24;
                } else {
                  @$cost_c22_ipa = $rating->kriteria24 / $c22 * $bk24;
                }
              }

              // C23
              foreach ($jenis_kriteria_25 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c23_ipa = $rating->kriteria25 / $c23 * $bk25;
                } else {
                  @$cost_c23_ipa = $rating->kriteria25 / $c23 * $bk25;
                }
              }

              // C24
              foreach ($jenis_kriteria_26 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c24_ipa = $rating->kriteria26 / $c24 * $bk26;
                } else {
                  @$cost_c24_ipa = $rating->kriteria26 / $c24 * $bk26;
                }
              }

              // C25
              foreach ($jenis_kriteria_27 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c25_ipa = $rating->kriteria27 / $c25 * $bk27;
                } else {
                  @$cost_c25_ipa = $rating->kriteria27 / $c25 * $bk27;
                }
              }

              // C26
              foreach ($jenis_kriteria_28 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c26_ipa = $rating->kriteria28 / $c26 * $bk28;
                } else {
                  @$cost_c26_ipa = $rating->kriteria28 / $c26 * $bk28;
                }
              }

              // C27
              foreach ($jenis_kriteria_29 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c27_ipa = $rating->kriteria29 / $c27 * $bk29;
                } else {
                  @$cost_c27_ipa = $rating->kriteria29 / $c27 * $bk29;
                }
              }

              // C28
              foreach ($jenis_kriteria_36 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria36 = $rating->kriteria36 == 4 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$benefit_c28_ipa = $kriteria36;
                } else {
                  @$kriteria36 = $rating->kriteria36 == 4 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$cost_c28_ipa = $kriteria36;
                }
              }

              // C29
              foreach ($jenis_kriteria_37 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria37 = $rating->kriteria37 == 4 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$benefit_c29_ipa = $kriteria37;
                } else {
                  @$kriteria37 = $rating->kriteria37 == 4 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$cost_c29_ipa = $kriteria37;
                }
              }

              // C30
              foreach ($jenis_kriteria_38 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria38 = $rating->kriteria38 == 4 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$benefit_c30_ipa = $kriteria38;
                } else {
                  @$kriteria38 = $rating->kriteria38 == 4 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$cost_c30_ipa = $kriteria38;
                }
              }

              // Pencarian Jenis Benefit / Cost Kriteria Ips
              // C1
              foreach ($jenis_kriteria_2 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c1_ips = $rating->kriteria2 / $c1 * $bk2;
                } else {
                  @$cost_c1_ips = $rating->kriteria2 / $c1 * $bk2;
                }
              }

              // C2
              foreach ($jenis_kriteria_3 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c2_ips = $rating->kriteria3 / $c2 * $bk3;
                } else {
                  @$cost_c2_ips = $rating->kriteria3 / $c2 * $bk3;
                }
              }

              // C3
              foreach ($jenis_kriteria_5 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c3_ips = $rating->kriteria5 / $c3 * $bk5;
                } else {
                  @$cost_c3_ips = $rating->kriteria5 / $c3 * $bk5;
                }
              }

              // C4
              foreach ($jenis_kriteria_6 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c4_ips = $rating->kriteria6 / $c4 * $bk6;
                } else {
                  @$cost_c4_ips = $rating->kriteria6 / $c4 * $bk6;
                }
              }

              // C5
              foreach ($jenis_kriteria_7 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c5_ips = $rating->kriteria7 / $c5 * $bk7;
                } else {
                  @$cost_c5_ips = $rating->kriteria7 / $c5 * $bk7;
                }
              }

              // C6
              foreach ($jenis_kriteria_8 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c6_ips = $rating->kriteria8 / $c6 * $bk8;
                } else {
                  @$cost_c6_ips = $rating->kriteria8 / $c6 * $bk8;
                }
              }

              // C7
              foreach ($jenis_kriteria_9 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c7_ips = $rating->kriteria9 / $c7 * $bk9;
                } else {
                  @$cost_c7_ips = $rating->kriteria9 / $c7 * $bk9;
                }
              }

              // C8
              foreach ($jenis_kriteria_10 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c8_ips = $rating->kriteria10 / $c8 * $bk10;
                } else {
                  @$cost_c8_ips = $rating->kriteria10 / $c8 * $bk10;
                }
              }

              // C9
              foreach ($jenis_kriteria_11 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c9_ips = $rating->kriteria11 / $c9 * $bk11;
                } else {
                  @$cost_c9_ips = $rating->kriteria11 / $c9 * $bk11;
                }
              }

              // C10
              foreach ($jenis_kriteria_12 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c10_ips = $rating->kriteria12 / $c10 * $bk12;
                } else {
                  @$cost_c10_ips = $rating->kriteria12 / $c210 * $bk12;
                }
              }

              // C11
              foreach ($jenis_kriteria_13 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c11_ips = $rating->kriteria13 / $c11 * $bk13;
                } else {
                  @$cost_c11_ips = $rating->kriteria13 / $c11 * $bk13;
                }
              }

              // C12
              foreach ($jenis_kriteria_14 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c12_ips = $rating->kriteria14 / $c12 * $bk14;
                } else {
                  @$cost_c12_ips = $rating->kriteria14 / $c12 * $bk14;
                }
              }

              // C13
              foreach ($jenis_kriteria_15 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c13_ips = $rating->kriteria15 / $c13 * $bk15;
                } else {
                  @$cost_c13_ips = $rating->kriteria15 / $c13 * $bk15;
                }
              }

              // C14
              foreach ($jenis_kriteria_16 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c14_ips = $rating->kriteria16 / $c14 * $bk16;
                } else {
                  @$cost_c14_ips = $rating->kriteria16 / $c14 * $bk16;
                }
              }

              // C15
              foreach ($jenis_kriteria_17 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c15_ips = $rating->kriteria17 / $c15 * $bk17;
                } else {
                  @$cost_c15_ips = $rating->kriteria17 / $c15 * $bk17;
                }
              }

              // C16
              foreach ($jenis_kriteria_18 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c16_ips = $rating->kriteria18 / $c16 * $bk18;
                } else {
                  @$cost_c16_ips = $rating->kriteria18 / $c16 * $bk18;
                }
              }

              // C17
              foreach ($jenis_kriteria_19 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c17_ips = $rating->kriteria19 / $c17 * $bk19;
                } else {
                  @$cost_c17_ips = $rating->kriteria19 / $c17 * $bk19;
                }
              }

              // C18
              foreach ($jenis_kriteria_20 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c18_ips = $rating->kriteria20 / $c18 * $bk20;
                } else {
                  @$cost_c18_ips = $rating->kriteria20 / $c18 * $bk20;
                }
              }

              // C19
              foreach ($jenis_kriteria_21 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c19_ips = $rating->kriteria21 / $c19 * $bk21;
                } else {
                  @$cost_c19_ips = $rating->kriteria21 / $c19 * $bk21;
                }
              }

              // C20
              foreach ($jenis_kriteria_22 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c20_ips = $rating->kriteria22 / $c20 * $bk22;
                } else {
                  @$cost_c20_ips = $rating->kriteria22 / $c20 * $bk22;
                }
              }

              // C21
              foreach ($jenis_kriteria_23 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c21_ips = $rating->kriteria23 / $c21 * $bk23;
                } else {
                  @$cost_c21_ips = $rating->kriteria23 / $c21 * $bk23;
                }
              }

              // C22
              foreach ($jenis_kriteria_30 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c22_ips = $rating->kriteria30 / $c22 * $bk30;
                } else {
                  @$cost_c22_ips = $rating->kriteria30 / $c22 * $bk30;
                }
              }

              // C23
              foreach ($jenis_kriteria_31 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c23_ips = $rating->kriteria31 / $c23 * $bk31;
                } else {
                  @$cost_c23_ips = $rating->kriteria31 / $c23 * $bk31;
                }
              }

              // C24
              foreach ($jenis_kriteria_32 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c24_ips = $rating->kriteria32 / $c24 * $bk32;
                } else {
                  @$cost_c24_ips = $rating->kriteria32 / $c24 * $bk32;
                }
              }

              // C25
              foreach ($jenis_kriteria_33 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c25_ips = $rating->kriteria33 / $c25 * $bk33;
                } else {
                  @$cost_c25_ips = $rating->kriteria33 / $c25 * $bk33;
                }
              }

              // C26
              foreach ($jenis_kriteria_34 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c26_ips = $rating->kriteria34 / $c26 * $bk34;
                } else {
                  @$cost_c26_ips = $rating->kriteria34 / $c26 * $bk34;
                }
              }

              // C27
              foreach ($jenis_kriteria_35 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$benefit_c27_ips = $rating->kriteria35 / $c27 * $bk35;
                } else {
                  @$cost_c27_ips = $rating->kriteria35 / $c27 * $bk35;
                }
              }

              // C28
              foreach ($jenis_kriteria_36 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria36 = $rating->kriteria36 == 3 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$benefit_c28_ips = $kriteria36;
                } else {
                  @$kriteria36 = $rating->kriteria36 == 3 ? $rating->kriteria36 / $c28 * $bk36 : 0;
                  @$cost_c28_ips = $kriteria36;
                }
              }

              // C29
              foreach ($jenis_kriteria_37 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria37 = $rating->kriteria37 == 3 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$benefit_c29_ips = $kriteria37;
                } else {
                  @$kriteria37 = $rating->kriteria37 == 3 ? $rating->kriteria37 / $c29 * $bk37 : 0;
                  @$cost_c29_ips = $kriteria37;
                }
              }

              // C30
              foreach ($jenis_kriteria_38 as $jenis) {
                if ($jenis->jenis == 'benefit') {
                  @$kriteria38 = $rating->kriteria38 == 3 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$benefit_c30_ips = $kriteria38;
                } else {
                  @$kriteria38 = $rating->kriteria38 == 3 ? $rating->kriteria38 / $c30 * $bk38 : 0;
                  @$cost_c30_ips = $kriteria38;
                }
              }

              // Pencarian Nilai Max Ipa
              @$max_ipa = $benefit_c1_ipa + $benefit_c2_ipa + $benefit_c3_ipa + $benefit_c4_ipa + $benefit_c5_ipa + $benefit_c6_ipa + $benefit_c7_ipa + $benefit_c8_ipa + $benefit_c9_ipa + $benefit_c10_ipa + $benefit_c11_ipa + $benefit_c12_ipa + $benefit_c13_ipa + $benefit_c14_ipa + $benefit_c15_ipa + $benefit_c16_ipa + $benefit_c17_ipa + $benefit_c18_ipa + $benefit_c19_ipa + $benefit_c20_ipa + $benefit_c21_ipa + $benefit_c22_ipa + $benefit_c23_ipa + $benefit_c24_ipa + $benefit_c25_ipa + $benefit_c26_ipa + $benefit_c27_ipa + $benefit_c28_ipa + $benefit_c29_ipa + $benefit_c30_ipa;
              // Pencarian Nilai Min Ips
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
                <td rowspan="2" style="vertical-align: middle;"><?= $rating->nisn ?></td>
                <td><?= $yi_ipa > $yi_ips ? 'IPA' : 'IPS' ?></td>
                <td><?= $yi_ipa > $yi_ips ? round($yi_ipa, 3) : round($yi_ips, 3) ?></td>
                <td>1</td>
              </tr>
              <tr class="text-center">
                <td><?= $yi_ips < $yi_ipa ? 'IPS' : 'IPA' ?></td>
                <td><?= $yi_ips < $yi_ipa ? round($yi_ips, 3) : round($yi_ipa, 3) ?></td>
                <td>2</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->