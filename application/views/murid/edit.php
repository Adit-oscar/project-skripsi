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
            <li class="breadcrumb-item"><a href="<?= base_url() ?>murid">Home</a></li>
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
              <input type="hidden" name="id_siswa" class="form-control" value="<?= $murid->id_siswa ?>">
              <div class="form-group">
                <label for="nisn">Nisn</label>
                <input type="text" id="nisn" name="nisn" class="form-control" value="<?= $murid->nisn ?>">
                <small class="form-text text-danger"><?php echo form_error('nisn'); ?></small>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?= $murid->nama ?>">
                <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" id="ttl" name="ttl" class="form-control" value="<?= $murid->ttl ?>">
                <small class="form-text text-danger"><?php echo form_error('ttl'); ?></small>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" id="agama" name="agama" class="form-control" value="<?= $murid->agama ?>">
                <small class="form-text text-danger"><?php echo form_error('agama'); ?></small>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $murid->alamat ?>">
                <small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
              </div>
              <div class="form-group">
                <label for="asalsekolah">Asal sekolah</label>
                <input type="text" id="asalsekolah" name="asalsekolah" class="form-control" value="<?= $murid->asalsekolah ?>">
                <small class="form-text text-danger"><?php echo form_error('asalsekolah'); ?></small>
              </div>
              <div class="form-group">
                <label for="hp">No Ponsel</label>
                <input type="text" id="hp" name="hp" class="form-control" value="<?= $murid->hp ?>">
                <small class="form-text text-danger"><?php echo form_error('hp'); ?></small>
              </div>
              <div class="form-group">
                <label for="kelamin">Jenis Kelamin</label>
                <select name="kelamin" class="form-control" id="kelamin">
                  <option value="" disabled selected>-- Silahkan pilih jenis kelamin --</option>
                  <?php foreach ($kelamin as $jk) : ?>
                    <?php if ($jk == $murid->kelamin) : ?>
                      <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                    <?php else : ?>
                      <option value="<?= $jk; ?>"><?= $jk; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?php echo form_error('hp'); ?></small>
              </div>
              <div class="form-group">
                <div class="row justify-content-center">
                  <div class="col-5">
                    <button class="btn btn-primary btn-sm btn-block" type="submit">
                      <i class="fas fa-save"> Ubah</i>
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
        <a href="<?= base_url() ?>murid" class="btn btn-secondary">
          Kembali
        </a>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->