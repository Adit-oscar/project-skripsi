<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-gradient-cyan pb-1">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $judul_halaman; ?></h1>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="jumbotron bg-gradient-light p-2">
      <h1 class=" display-4 text-info text-center">SISTEM PENYELEKSIAN JURUSAN SMAN 1 HALONG</h1>
    </div>
  </section>
  <!-- /.content -->

  <!-- Data Content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-light shadow">
          <div class="inner">
            <h3><?= $jumlah_admin ?></h3>

            <p>Jumlah Admin</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-circle"></i>
          </div>
          <a href="<?= base_url() ?>admin" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success shadow">
          <div class="inner">
            <h3><?= $jumlah_murid ?></h3>

            <p>Jumlah Murid</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-friends"></i>
          </div>
          <a href="<?= base_url() ?>murid" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning shadow">
          <div class="inner">
            <h3><?= $jumlah_kriteria ?></h3>

            <p>Jumlah Kriteria</p>
          </div>
          <div class="icon">
            <i class="fas fa-book-open"></i>
          </div>
          <a href="<?= base_url() ?>kriteria" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- ./col -->
  </section>
  <!-- / .Data Content -->
</div>
<!-- /.content-wrapper -->