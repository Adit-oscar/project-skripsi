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
              <strong>Data Murid Berhasil <?php echo $this->session->flashdata('flash'); ?></strong>
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
              <a href="<?= base_url() ?>murid/tambah" class="btn btn-primary btn-sm mr-1">
                <i class="fas fa-plus"></i> Tambah Data
              </a>
              <a href="<?= base_url() ?>murid/laporan" class="btn btn-success btn-sm" target="_blank">
                <i class="fas fa-file-pdf"></i> Export Pdf
              </a>
            </div>
          </div>
          <table id="example2" class="table table-bordered table-striped table-hover">
            <thead>
              <tr class="text-center">
                <th>NO</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>TANGGAL LAHIR</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>ASAL SEKOLAH</th>
                <th>NO PONSEL</th>
                <th>KELAMIN</th>
                <th class="col-1">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($murid as $data) : ?>
                <tr class="text-center">
                  <td><?= $no++ ?></td>
                  <td><?= $data->nisn ?></td>
                  <td><?= $data->nama ?></td>
                  <td><?= $data->ttl ?></td>
                  <td><?= $data->agama ?></td>
                  <td><?= $data->alamat ?></td>
                  <td><?= $data->asalsekolah ?></td>
                  <td><?= $data->hp ?></td>
                  <td><?= $data->kelamin ?></td>
                  <td>
                    <a href="<?= base_url() ?>murid/edit/<?= $data->id_siswa ?>" class="btn btn-warning btn-sm">
                      <i class="fas fa-user-edit"></i>
                    </a>
                    <a href="<?= base_url() ?>murid/hapus/<?= $data->id_siswa ?>" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
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