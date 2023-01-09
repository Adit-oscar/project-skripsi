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
                <a href="<?= base_url() ?>home">Home</a>
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

  <!-- Flash Data -->
  <div class="content">
    <?php if ($this->session->flashdata()) : ?>
      <div class="row mt-3">
        <div class="col">
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Penilaian Kriteria Berhasil <?php echo $this->session->flashdata('flash'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $judul_tabel; ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="col">
          <div class="row justify-content-end mb-2">
            <a href="<?= base_url() ?>penilaian/laporan" class="btn btn-success btn-sm" target="_blank">
              <i class="fas fa-file-pdf"></i> Export Pdf
            </a>
          </div>
        </div>
        <table id="example3" class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="text-center">
              <th>NO</th>
              <th>NAMA</th>
              <th class="col-md-4">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($penilaian as $data) : ?>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $data->nama ?></td>
                <td>
                  <a href="<?= base_url() ?>penilaian/edit/<?= $data->id ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-plus"></i>
                  </a>
                  <a href="<?= base_url() ?>penilaian/detail/<?= $data->id ?>" class="btn btn-success btn-sm ml-2">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
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