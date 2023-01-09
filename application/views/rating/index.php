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
  <!-- Main content -->
  <section class="content">
    <div class="card bg-gradient-light">
      <div class="card-header elevation-1">
        <h3 class="card-title"><?= $judul_tabel; ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example3" class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="text-center">
              <th>NO</th>
              <th>NISN</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($nisn as $nisn) : ?>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $nisn->nisn ?></td>
                <td>
                  <a href="<?= base_url() ?>rating/detail/<?= $nisn->nisn ?>" class="btn btn-info btn-sm">
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->