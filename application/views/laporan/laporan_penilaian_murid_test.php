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
          <h5 style="margin-left:5px; font-size: 14px;"> PEMERINTAH PROVINSI KALIMANTAN SELATAN DINAS PENDIDIKAN DAN KEBUDAYAAN </h5>
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
  <h5 style="font-size: 14px;" class="text-center">LAPORAN PENILAIAN MURID</h5>
  <table style="font-size: 10px;" class=" ml-4">
    <tbody>
      <tr>
        <th class="text-left pl-2">NAMA </th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->nama ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">UN IPA</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->un_ipa ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">UN IPS</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->un_ips ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">UN MATEMATIKA</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->un_matematika ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">TES SOAL IPA</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->tes_soal_ipa ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">TES SOAL IPS</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->tes_soal_ips ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 1</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_indo_smes_1 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 2</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"> <?= $penilaian->bahasa_indo_smes_2 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 3</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_indo_smes_3 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 4</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"> <?= $penilaian->bahasa_indo_smes_4 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 5</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_indo_smes_5 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INDONESIA SEMESTER 6</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_indo_smes_6 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 1</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_1 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 2</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_2 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 3</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_3 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 4</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_4 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 5</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_5 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">B.INGGRIS SEMESTER 6</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->bahasa_ing_smes_6 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 1</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_1 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 2</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_2 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 3</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_3 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 4</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_4 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 5</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_5 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">MATEMATIKA SEMESTER 6</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->matematika_smes_6 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 1</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ipa_smes_1 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 2</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ipa_smes_2 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 3</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ipa_smes_3 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 4</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ipa_smes_4 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 5</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ipa_smes_5 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPA SEMESTER 6</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"> <?= $penilaian->ipa_smes_6 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 1</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_1 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 2</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_2 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 3</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_3 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 4</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_4 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 5</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_5 ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">IPS SEMESTER 6</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->ips_smes_6 ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">TES WAWANCARA</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"><?= $penilaian->tes_wawancara ?></th>
      </tr>
      <tr>
        <th class="text-left pl-2">MINAT MURID</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"> <?= $penilaian->minat_murid ?> </th>
      </tr>
      <tr>
        <th class="text-left pl-2">SARAN ORANG TUA</th>
        <th class="pl-4">:</th>
        <th class="text-left pl-2"> <?= $penilaian->saran_orang_tua ?> </th>
      </tr>
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