<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-gradient-cyan pb-3">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $judul_halaman; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul_halaman; ?></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card card-primary bg-gray-light">
          <div class="card-header">
            <div class="row justify-content-center">
              <h3 class="card-title"><?= $judul_header; ?></h3>
            </div>
          </div>
          <!-- Form Tambah Dat -->
          <form action="" method="post">
            <!-- card body -->
            <div class="card-body">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
                <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control">
                <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control">
                <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <div class="row justify-content-between">
                  <div class="col">
                    <button class="btn btn-primary btn-sm btn-block" type="submit">
                      <i class="fas fa-save"> Simpan</i>
                    </button>
                  </div>
                  <div class="col">
                    <button class="btn btn-info btn-sm btn-block" type="reset">
                      <i class="fas fa-backspace"> Ulang</i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </form>
          <!-- /.Form  -->
        </div>
      </div>
      <!-- /.card -->
    </div>
    <div class="col">
      <div class="row">
        <a href="<?= base_url() ?>admin" class="btn btn-secondary">
          Kembali
        </a>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->