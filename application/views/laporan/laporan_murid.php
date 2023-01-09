<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
  <table style="width:100%;">
    <tr>
      <td>
        <img src="<?= base_url() ?>assets/image/logo_provinsi.png" alt="Logo Sekolah" style="posisition: absolute; width: 50px; height:auto; margin-top:-25;">
      </td>
      <td class=" text-center">
        <div style="margin: left 5px;  margin: right 5px;">
          <h5 style="margin-left:5px; font-size: 16px;"> PEMERINTAH PROVINSI KALIMANTAN SELATAN DINAS PENDIDIKAN DAN KEBUDAYAAN </h5>
          <h4 style="font-size: 16px;">SMA NEGERI 1 HALONG</h4>
          <p style="margin-top:-10px; font-weight:100; font-size: 12px;"><i>Alamat: Jln. Pembangunan RT. V No 87 Kec.Halong Kab. Balangan Kode Pos 71666</i></p>
          <p style="margin-top:-15px; font-weight:100; font-size: 12px;"><i>NPSN:30304976, Email:sman1halong@yahoo.co.id</i></p>
        </div>
      </td>
      <td>
        <img src="<?= base_url() ?>assets/image/logo_sma.png" alt="Logo Sekolah" style="posisition: absolute; width: 50px; height:auto; margin-top:-28;">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr style="width:100%; border-bottom:1px solid black; margin-top:-18px;">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr style="width:100%; border-bottom:4px solid black; margin-top:-16px;">
      </td>
    </tr>
  </table>
  <h5 style="font-size: 14px;" class="text-center pt-3">LAPORAN DATA MURID</h5>
  <table style="font-size: 12px;" class="table table-bordered mt-3">
    <thead class="thead-dark">
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
      </tr>
    </thead>
    <tbody class="border-dark">
      <?php
      $no = 1;
      foreach ($murid as $data) :
      ?>
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
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <table style="font-size: 12px;" class="float-right mr-5 mt-4">
    <tr>
      <td>Halong,</td>
    </tr>
    <tr>
      <td>a.n, Kepala Sekolah</td>
    </tr>
    <tr>
      <td>KTAS SMAN 1 HALONG,</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><b>Kasri, S.pd</b></td>
    </tr>
    <tr>
      <td>Penata, (III/d)</td>
    </tr>
    <tr>
      <td>NIP 197009142007012015</td>
    </tr>
  </table>
</body>

</html>