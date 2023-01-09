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
        <table id="example3" class="table table-responsive table-bordered table-striped table-hover">
          <thead>
            <tr class="text-center">
              <th rowspan="2" style="vertical-align: middle;">NO</th>
              <th rowspan="2" style="vertical-align: middle;">NISN</th>
              <th colspan="3" style="vertical-align: middle;">NILAI UN</th>
              <th colspan="2" style="vertical-align: middle;">TES SOAL</th>
              <th colspan="6" style="vertical-align: middle;">BAHASA INDONESIA / SMESTER</th>
              <th colspan="6" style="vertical-align: middle;">BAHASA INGGRIS / SMESTER</th>
              <th colspan="6" style="vertical-align: middle;">MATEMATIKA / SMESTER</th>
              <th colspan="6" style="vertical-align: middle;">NILAI IPA / SMESTER</th>
              <th colspan="6" style="vertical-align: middle;">NILAI IPS / SMESTER</th>
              <th rowspan="2" style="vertical-align: middle;">TES WAWANCARA</th>
              <th rowspan="2" style="vertical-align: middle;">MINAT MURID</th>
              <th rowspan="2" style="vertical-align: middle;">SARAN ORANG TUA</th>
              <th rowspan="2" style="vertical-align: middle;">AKSI</th>
            </tr>
            <tr>
              <th>IPA</th>
              <th>IPS</th>
              <th>MATEMATIKA</th>
              <th>IPA</th>
              <th>IPS</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($penilaian as $data) : ?>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $data->nisn ?></td>
                <td><?= $data->un_ipa ?></td>
                <td><?= $data->un_ips ?></td>
                <td><?= $data->un_matematika ?></td>
                <td><?= $data->tes_soal_ipa ?></td>
                <td><?= $data->tes_soal_ips ?></td>
                <td><?= $data->bahasa_indo_smes_1 ?></td>
                <td><?= $data->bahasa_indo_smes_2 ?></td>
                <td><?= $data->bahasa_indo_smes_3 ?></td>
                <td><?= $data->bahasa_indo_smes_4 ?></td>
                <td><?= $data->bahasa_indo_smes_5 ?></td>
                <td><?= $data->bahasa_indo_smes_6 ?></td>
                <td><?= $data->bahasa_ing_smes_1 ?></td>
                <td><?= $data->bahasa_ing_smes_2 ?></td>
                <td><?= $data->bahasa_ing_smes_3 ?></td>
                <td><?= $data->bahasa_ing_smes_4 ?></td>
                <td><?= $data->bahasa_ing_smes_5 ?></td>
                <td><?= $data->bahasa_ing_smes_6 ?></td>
                <td><?= $data->matematika_smes_1 ?></td>
                <td><?= $data->matematika_smes_2 ?></td>
                <td><?= $data->matematika_smes_3 ?></td>
                <td><?= $data->matematika_smes_4 ?></td>
                <td><?= $data->matematika_smes_5 ?></td>
                <td><?= $data->matematika_smes_6 ?></td>
                <td><?= $data->ipa_smes_1 ?></td>
                <td><?= $data->ipa_smes_2 ?></td>
                <td><?= $data->ipa_smes_3 ?></td>
                <td><?= $data->ipa_smes_4 ?></td>
                <td><?= $data->ipa_smes_5 ?></td>
                <td><?= $data->ipa_smes_6 ?></td>
                <td><?= $data->ips_smes_1 ?></td>
                <td><?= $data->ips_smes_2 ?></td>
                <td><?= $data->ips_smes_3 ?></td>
                <td><?= $data->ips_smes_4 ?></td>
                <td><?= $data->ips_smes_5 ?></td>
                <td><?= $data->ips_smes_6 ?></td>
                <td><?= $data->tes_wawancara ?></td>
                <td><?= $data->minat_murid ?></td>
                <td><?= $data->saran_orang_tua ?></td>
                <td>
                  <a href="<?= base_url() ?>penilaian/edit/<?= $data->id ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-user-edit"></i>
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