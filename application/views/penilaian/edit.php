<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-gradient-cyan pb-3">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $judul_halaman ?></h1>
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

    <div class="card card-primary bg-gray-light">
      <div class="card-header">
        <div class="row justify-content-center">
          <h3 class="card-title"><?= $judul_header; ?></h3>
        </div>
      </div>
      <!-- Form Tambah Dat -->
      <form action="" method="POST">
        <!-- card body -->
        <div class="card-body">
          <input type="hidden" name="id" class="form-control" value="<?= $penilaian->id ?>">
          <input type="hidden" class="form-control" id="nisn" name="nisn" value="<?= $penilaian->nisn ?>">

          <div class="form-group row">
            <label for="nisn" class="col-sm-1 col-form-label">Nisn</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $penilaian->nisn ?>" disabled>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI UN & TES SOAL</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- Un Ipa -->
                <label for="un_ipa" class="col-sm col-form-label">UN IPA</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="un_ipa" name="un_ipa" value="<?= $penilaian->un_ipa ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('un_ipa'); ?></small>
                <!-- .Un Ipa -->

                <!-- Un Ips -->
                <label for="un_ips" class="col-sm col-form-label">UN IPS</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="un_ips" name="un_ips" value="<?= $penilaian->un_ips ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('un_ips'); ?></small>
                <!-- .Un Ips -->

                <!-- Un Matematika -->
                <label for="un_matematika" class="col-sm col-form-label">UN MATEMATIKA</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="un_matematika" name="un_matematika" value="<?= $penilaian->un_matematika ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('un_matematika'); ?></small>
                <!-- .Un Matematika -->

                <!-- Tes Soal Ipa -->
                <label for="tes_soal_ipa" class="col-sm col-form-label">TES SOAL IPA</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="tes_soal_ipa" name="tes_soal_ipa" value="<?= $penilaian->tes_soal_ipa ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('tes_soal_ipa'); ?></small>
                <!-- .Tes Soal Ipa -->

                <!-- Tes Soal Ips -->
                <label for="tes_soal_ips" class="col-sm col-form-label">TES SOAL IPS</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="tes_soal_ips" name="tes_soal_ips" placeholder="--" value="<?= $penilaian->tes_soal_ips ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('tes_soal_ips'); ?></small>
                <!-- .Tes Soal Ips -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI BAHASAS INDONESIA / SMESTER</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- B.INDO SMESTER 1 -->
                <label for="bahasa_indo_smes_1" class="col-sm col-form-label">SMESTER 1</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_1" name="bahasa_indo_smes_1" value="<?= $penilaian->bahasa_indo_smes_1 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_1'); ?></small>
                <!-- .B.INDO SMESTER 1 -->

                <!-- B.INDO SMESTER 2 -->
                <label for="bahasa_indo_smes_2" class="col-sm col-form-label">SMESTER 2</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_2" name="bahasa_indo_smes_2" value="<?= $penilaian->bahasa_indo_smes_2 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_2'); ?></small>
                <!-- .B.INDO SMESTER 2 -->

                <!-- B.INDO SMESTER 3 -->
                <label for="bahasa_indo_smes_3" class="col-sm col-form-label">SMESTER 3</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_3" name="bahasa_indo_smes_3" value="<?= $penilaian->bahasa_indo_smes_3 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_3'); ?></small>
                <!-- .B.INDO SMESTER 3 -->

                <!-- B.INDO SMESTER 4 -->
                <label for="bahasa_indo_smes_4" class="col-sm col-form-label">SMESTER 4</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_4" name="bahasa_indo_smes_4" value="<?= $penilaian->bahasa_indo_smes_4 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_4'); ?></small>
                <!-- .B.INDO SMESTER 4 -->

                <!-- B.INDO SMESTER 5 -->
                <label for="bahasa_indo_smes_5" class="col-sm col-form-label">SMESTER 5</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_5" name="bahasa_indo_smes_5" value="<?= $penilaian->bahasa_indo_smes_5 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_5'); ?></small>
                <!-- .B.INDO SMESTER 5 -->

                <!-- B.INDO SMESTER 6 -->
                <label for="bahasa_indo_smes_6" class="col-sm col-form-label">SMESTER 6</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_indo_smes_6" name="bahasa_indo_smes_6" value="<?= $penilaian->bahasa_indo_smes_6 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_indo_smes_6'); ?></small>
                <!-- .B.INDO SMESTER 6 -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI BAHASA INGGRIS / SMESTER</h4>
            </div>
            <div class="card-body">
              <!-- B.INGGRIS SMESTER 1 -->
              <div class="form-group row">
                <label for="bahasa_ing_smes_1" class="col-sm col-form-label">SMESTER 1</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_1" name="bahasa_ing_smes_1" value="<?= $penilaian->bahasa_ing_smes_1 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_1'); ?></small>
                <!-- .B.INGGRIS SMESTER 1 -->

                <!-- B.INGGRIS SMESTER 2 -->
                <label for="bahasa_ing_smes_2" class="col-sm col-form-label">SMESTER 2</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_2" name="bahasa_ing_smes_2" value="<?= $penilaian->bahasa_ing_smes_2 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_2'); ?></small>
                <!-- .B.INGGRIS SMESTER 2 -->

                <!-- B.INGGRIS SMESTER 3 -->
                <label for="bahasa_ing_smes_3" class="col-sm col-form-label">SMESTER 3</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_3" name="bahasa_ing_smes_3" value="<?= $penilaian->bahasa_ing_smes_3 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_3'); ?></small>
                <!-- .B.INGGRIS SMESTER 3 -->

                <!-- B.INGGRIS SMESTER 4 -->
                <label for="bahasa_ing_smes_4" class="col-sm col-form-label">SMESTER 4</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_4" name="bahasa_ing_smes_4" value="<?= $penilaian->bahasa_ing_smes_4 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_4'); ?></small>
                <!-- .B.INGGRIS SMESTER 4 -->

                <!-- B.INGGRIS SMESTER 5 -->
                <label for="bahasa_ing_smes_5" class="col-sm col-form-label">SMESTER 5</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_5" name="bahasa_ing_smes_5" value="<?= $penilaian->bahasa_ing_smes_5 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_5'); ?></small>
                <!-- .B.INGGRIS SMESTER 5 -->

                <!-- B.INGGRIS SMESTER 6 -->
                <label for="bahasa_ing_smes_6" class="col-sm col-form-label">SMESTER 6</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="bahasa_ing_smes_6" name="bahasa_ing_smes_6" value="<?= $penilaian->bahasa_ing_smes_6 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('bahasa_ing_smes_6'); ?></small>
                <!-- .B.INGGRIS SMESTER 6 -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI MATEMATIKA / SMESTER</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- NILAI MATEMATIKA SMESTER 1 -->
                <label for="matematika_smes_1" class="col-sm col-form-label">SMESTER 1</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_1" name="matematika_smes_1" value="<?= $penilaian->matematika_smes_1 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_1'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 1 -->

                <!-- NILAI MATEMATIKA SMESTER 2 -->
                <label for="matematika_smes_2" class="col-sm col-form-label">SMESTER 2</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_2" name="matematika_smes_2" value="<?= $penilaian->matematika_smes_2 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_2'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 2 -->

                <!-- NILAI MATEMATIKA SMESTER 3 -->
                <label for="matematika_smes_3" class="col-sm col-form-label">SMESTER 3</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_3" name="matematika_smes_3" value="<?= $penilaian->matematika_smes_3 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_3'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 3 -->

                <!-- NILAI MATEMATIKA SMESTER 4 -->
                <label for="matematika_smes_4" class="col-sm col-form-label">SMESTER 4</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_4" name="matematika_smes_4" value="<?= $penilaian->matematika_smes_4 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_4'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 4 -->

                <!-- NILAI MATEMATIKA SMESTER 5 -->
                <label for="matematika_smes_5" class="col-sm col-form-label">SMESTER 5</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_5" name="matematika_smes_5" value="<?= $penilaian->matematika_smes_5 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_5'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 5 -->

                <!-- NILAI MATEMATIKA SMESTER 6 -->
                <label for="matematika_smes_6" class="col-sm col-form-label">SMESTER 6</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="matematika_smes_6" name="matematika_smes_6" value="<?= $penilaian->matematika_smes_6 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('matematika_smes_6'); ?></small>
                <!-- .NILAI MATEMATIKA SMESTER 6 -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI IPA / SMESTER</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- NILAI IPA SMESTER 1 -->
                <label for="ipa_smes_1" class="col-sm col-form-label">SMESTER 1</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_1" name="ipa_smes_1" value="<?= $penilaian->ipa_smes_1 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_1'); ?></small>
                <!-- .NILAI IPA SMESTER 1 -->

                <!-- NILAI IPA SMESTER 2 -->
                <label for="ipa_smes_2" class="col-sm col-form-label">SMESTER 2</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_2" name="ipa_smes_2" value="<?= $penilaian->ipa_smes_2 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_2'); ?></small>
                <!-- .NILAI IPA SMESTER 2 -->

                <!-- NILAI IPA SMESTER 3 -->
                <label for="ipa_smes_3" class="col-sm col-form-label">SMESTER 3</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_3" name="ipa_smes_3" value="<?= $penilaian->ipa_smes_3 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_3'); ?></small>
                <!-- .NILAI IPA SMESTER 3 -->

                <!-- NILAI IPA SMESTER 4 -->
                <label for="ipa_smes_4" class="col-sm col-form-label">SMESTER 4</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_4" name="ipa_smes_4" value="<?= $penilaian->ipa_smes_4 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_4'); ?></small>
                <!-- .NILAI IPA SMESTER 4 -->

                <!-- NILAI IPA SMESTER 5 -->
                <label for="ipa_smes_5" class="col-sm col-form-label">SMESTER 5</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_5" name="ipa_smes_5" value="<?= $penilaian->ipa_smes_5 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_5'); ?></small>
                <!-- .NILAI IPA SMESTER 5 -->

                <!-- NILAI IPA SMESTER 6 -->
                <label for="ipa_smes_6" class="col-sm col-form-label">SMESTER 6</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ipa_smes_6" name="ipa_smes_6" value="<?= $penilaian->ipa_smes_6 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ipa_smes_6'); ?></small>
                <!-- .NILAI IPA SMESTER 6 -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI IPS / SMESTER</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- NILAI IPS SMESTER 1 -->
                <label for="ips_smes_1" class="col-sm col-form-label">SMESTER 1</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_1" name="ips_smes_1" value="<?= $penilaian->ips_smes_1 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_1'); ?></small>
                <!-- .NILAI IPS SMESTER 1 -->

                <!-- NILAI IPS SMESTER 2 -->
                <label for="ips_smes_2" class="col-sm col-form-label">SMESTER 2</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_2" name="ips_smes_2" value="<?= $penilaian->ips_smes_2 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_2'); ?></small>
                <!-- .NILAI IPS SMESTER 2 -->

                <!-- NILAI IPS SMESTER 3 -->
                <label for="ips_smes_3" class="col-sm col-form-label">SMESTER 3</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_3" name="ips_smes_3" value="<?= $penilaian->ips_smes_3 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_3'); ?></small>
                <!-- .NILAI IPS SMESTER 3 -->

                <!-- NILAI IPS SMESTER 4 -->
                <label for="ips_smes_4" class="col-sm col-form-label">SMESTER 4</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_4" name="ips_smes_4" value="<?= $penilaian->ips_smes_4 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_4'); ?></small>
                <!-- .NILAI IPS SMESTER 4 -->

                <!-- NILAI IPS SMESTER 5 -->
                <label for="ips_smes_5" class="col-sm col-form-label">SMESTER 5</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_5" name="ips_smes_5" value="<?= $penilaian->ips_smes_5 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_5'); ?></small>
                <!-- .NILAI IPS SMESTER 5 -->

                <!-- NILAI IPS SMESTER 6 -->
                <label for="ips_smes_6" class="col-sm col-form-label">SMESTER 6</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="ips_smes_6" name="ips_smes_6" value="<?= $penilaian->ips_smes_6 ?>">
                </div>
                <small class="form-text text-danger"><?php echo form_error('ips_smes_6'); ?></small>
                <!-- .NILAI IPS SMESTER 6 -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>NILAI PEMINATAN</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <!-- TES WAWANCARA -->
                <label for="tes_wawancara" class="col-sm-2 col-form-label">TES WAWANCARA</label>
                <div class="col-sm-1 ml-n5">
                  <select name="tes_wawancara" class="form-control" id="tes_wawancara">
                    <option value="" disabled selected>-Pilih-</option>
                    <?php foreach ($pilihan as $pilih) : ?>
                      <?php if ($pilih == $penilaian->tes_wawancara) : ?>
                        <option value="<?= $pilih; ?>" selected><?= $pilih; ?></option>
                      <?php else : ?>
                        <option value="<?= $pilih; ?>" select><?= $pilih; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                  <small class="form-text text-danger"><?php echo form_error('tes_wawancara'); ?></small>
                </div>
                <!-- .TES WAWANCARA -->

                <!-- MINAT MURID -->
                <label for="minat_murid" class="col-sm-2 col-form-label ml-5">MINAT MURID</label>
                <div class="col-sm-1 ml-n5">
                  <select name="minat_murid" class="form-control" id="minat_murid">
                    <option value="" disabled selected>-Pilih-</option>
                    <?php foreach ($pilihan as $pilih) : ?>
                      <?php if ($pilih == $penilaian->minat_murid) : ?>
                        <option value="<?= $pilih; ?>" selected><?= $pilih; ?></option>
                      <?php else : ?>
                        <option value="<?= $pilih; ?>" select><?= $pilih; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                  <small class="form-text text-danger"><?php echo form_error('minat_murid'); ?></small>
                </div>
                <!-- .MINAT MURID -->

                <!-- SARAN ORANG TUA -->
                <label for="saran_orang_tua" class="col-sm-2 col-form-label ml-5">SARAN ORANGTUA</label>
                <div class="col-sm-1 ml-n5">
                  <select name="saran_orang_tua" class="form-control" id="saran_orang_tua">
                    <option value="" disabled selected>-Pilih-</option>
                    <?php foreach ($pilihan as $pilih) : ?>
                      <?php if ($pilih == $penilaian->saran_orang_tua) : ?>
                        <option value="<?= $pilih; ?>" selected><?= $pilih; ?></option>
                      <?php else : ?>
                        <option value="<?= $pilih; ?>"><?= $pilih; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                  <small class="form-text text-danger"><?php echo form_error('saran_orang_tua'); ?></small>
                </div>
                <!-- .SARAN ORANG TUA -->
              </div>
            </div>
          </div>



          <div class="form-group row">

          </div>

          <div class="form-group row">

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
    <!-- /.card -->

    <a href="<?= base_url() ?>penilaian" class="btn btn-secondary">
      Kembali
    </a>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->