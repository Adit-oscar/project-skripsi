<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-gradient-cyan pb-3">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $judul_halaman ?> <strong><?= $penilaian->nama ?></strong></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>penilaian">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul_halaman; ?></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card card-primary bg-light">
      <div class="card-header text-center">
        <h4><?= $judul_halaman ?></h4>
      </div>
      <div class="card-body">
        <h3>NAMA : <?= $penilaian->nama ?> </h3>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI UN & TES SOAL</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                UN IPA : <?= $penilaian->un_ipa ?>
              </div>
              <div class="col-md-2">
                UN IPS : <?= $penilaian->un_ips ?>
              </div>
              <div class="col-md-2">
                UN MATEMATIKA : <?= $penilaian->un_matematika ?>
              </div>
              <div class="col-md-2">
                TES SOAL IPA : <?= $penilaian->tes_soal_ipa ?>
              </div>
              <div class="col-md-2">
                TES SOAL IPS : <?= $penilaian->tes_soal_ips ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI BAHASA INDONESIA / SMESTER</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                SEMESTER 1 : <?= $penilaian->bahasa_indo_smes_1 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 2 : <?= $penilaian->bahasa_indo_smes_2 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 3 : <?= $penilaian->bahasa_indo_smes_3 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 4 : <?= $penilaian->bahasa_indo_smes_4 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 5 : <?= $penilaian->bahasa_indo_smes_5 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 6 : <?= $penilaian->bahasa_indo_smes_6 ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI BAHASA INGGRIS / SMESTER</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                SEMESTER 1 : <?= $penilaian->bahasa_ing_smes_1 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 2 : <?= $penilaian->bahasa_ing_smes_2 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 3 : <?= $penilaian->bahasa_ing_smes_3 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 4 : <?= $penilaian->bahasa_ing_smes_4 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 5 : <?= $penilaian->bahasa_ing_smes_5 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 6 : <?= $penilaian->bahasa_ing_smes_6 ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI MATEMATIKA / SMESTER</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                SEMESTER 1 : <?= $penilaian->matematika_smes_1 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 2 : <?= $penilaian->matematika_smes_2 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 3 : <?= $penilaian->matematika_smes_3 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 4 : <?= $penilaian->matematika_smes_4 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 5 : <?= $penilaian->matematika_smes_5 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 6 : <?= $penilaian->matematika_smes_6 ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI IPA / SMESTER</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                SEMESTER 1 : <?= $penilaian->ipa_smes_1 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 2 : <?= $penilaian->ipa_smes_2 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 3 : <?= $penilaian->ipa_smes_3 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 4 : <?= $penilaian->ipa_smes_4 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 5 : <?= $penilaian->ipa_smes_5 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 6 : <?= $penilaian->ipa_smes_6 ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI IPS / SMESTER</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                SEMESTER 1 : <?= $penilaian->ips_smes_1 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 2 : <?= $penilaian->ips_smes_2 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 3 : <?= $penilaian->ips_smes_3 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 4 : <?= $penilaian->ips_smes_4 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 5 : <?= $penilaian->ips_smes_5 ?>
              </div>
              <div class="col-md-2">
                SEMESTER 6 : <?= $penilaian->ips_smes_6 ?>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <h4>NILAI PEMINATAN MURID</h4>
            </div>
            <div class="row">
              <div class="col-md-2">
                TES WAWANCARA : <?= $penilaian->tes_wawancara ?>
              </div>
              <div class="col-md-2">
                MINAT MURID : <?= $penilaian->minat_murid ?>
              </div>
              <div class="col-md-2">
                SARAN ORANG TUA : <?= $penilaian->saran_orang_tua ?>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <a href="<?= base_url() ?>penilaian" class="btn btn-secondary">
      Kembali
    </a>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->