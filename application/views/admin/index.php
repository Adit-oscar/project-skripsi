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
              <strong>Data Admin Berhasil <?php echo $this->session->flashdata('flash'); ?></strong>
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
            <div class="row justify-content-end">
              <a href="<?= base_url() ?>admin/tambah" class="btn btn-primary btn-sm mb-2">
                <i class="fas fa-plus"></i> Tambah Data
              </a>
            </div>
          </div>
          <div>
          </div>
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr class="text-center">
                <th>NO</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>NAMA</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($admin as $data) : ?>
                <tr class="text-center">
                  <td><?= $no++ ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->password ?></td>
                  <td><?= $data->nama ?></td>
                  <td>
                    <a href="<?= base_url() ?>admin/edit/<?= $data->id_admin ?>" class="btn btn-warning btn-sm">
                      <i class="fas fa-user-edit"></i>
                    </a>
                    <a href="<?= base_url() ?>admin/hapus/<?= $data->id_admin ?>" class="btn btn-danger btn-sm">
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