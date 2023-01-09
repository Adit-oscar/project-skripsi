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
              <li class="breadcrumb-item"><a href="<?= base_url() ?>kriteria">Home</a></li>
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
                <input type="hidden" name="id_kriteria" class="form-control" value="<?= $kriteria->id_kriteria ?>">
                  <div class="form-group">
                    <label for="id_kriteria">Id Kriteria</label>
                    <input type="text" id="id_kriteria" name="id_kriteria" class="form-control" value="<?= $kriteria->id_kriteria ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="kriteria">Kriteria</label>
                    <input type="text" id="kriteria" name="kriteria" class="form-control" value="<?= $kriteria->kriteria ?>">
                    <small class="form-text text-danger"><?php echo form_error('kriteria'); ?></small>
                  </div>
                  <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" class="form-control" id="jenis">
                            <?php foreach( $jenis as $j ) : ?>
                              <?php if( $j == $kriteria->jenis) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="text" id="bobot" name="bobot" class="form-control" value="<?= $kriteria->bobot ?>">
                    <small class="form-text text-danger"><?php echo form_error('bobot'); ?></small>
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
            <a href="<?= base_url() ?>kriteria" class="btn btn-secondary">
              Kembali
            </a>
          </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->