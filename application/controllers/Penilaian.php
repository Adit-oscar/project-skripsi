<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Penilaian_model');
  }

  public function index()
  {

    $data = [

      "judul_halaman" => "Halaman Penilaian",
      "judul_tabel" => "Tabel Data Penilaian",
      "penilaian" => $this->Penilaian_model->ambildata('tabel_penilaian_kriteria_murid', 'tabel_murid')->result()

    ];

    $this->load->view('template/header', $data);
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    $this->load->view('penilaian/index', $data);
    $this->load->view('template/footer');
  }

  public function edit($id)
  {

    $data = [

      "judul_halaman" => "Halaman Tambah Penilaian",
      "judul_header" => "Form Tambah Data Penilaian",
      "pilihan" => ["IPA", "IPS"],
      "penilaian" => $this->Penilaian_model->TambahPenilaianMuridBerdasarkanId('tabel_penilaian_kriteria_murid', $id)->row()

    ];

    $this->form_validation->set_rules('nisn', 'Nisn', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_4', 'UN IPA', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('un_ips', 'UN IPS', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('un_matematika', 'UN MATEMATIKA', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('tes_soal_ipa', 'TES SOAL IPA', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('tes_soal_ips', 'TES SOAL IPS', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_1', 'BAHASA INDONESIA SMESTER 1', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_2', 'BAHASA INDONESIA SMESTER 2', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_3', 'BAHASA INDONESIA SMESTER 3', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_4', 'BAHASA INDONESIA SMESTER 4', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_5', 'BAHASA INDONESIA SMESTER 5', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_indo_smes_6', 'BAHASA INDONESIA SMESTER 6', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_1', 'BAHASA INGGRIS SMESTER 1', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_2', 'BAHASA INGGRIS SMESTER 2', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_3', 'BAHASA INGGRIS SMESTER 3', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_4', 'BAHASA INGGRIS SMESTER 4', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_5', 'BAHASA INGGRIS SMESTER 5', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('bahasa_ing_smes_6', 'BAHASA INGGRIS SMESTER 6', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_1', 'MATEMATIKA SMESTER 1', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_2', 'MATEMATIKA SMESTER 2', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_3', 'MATEMATIKA SMESTER 3', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_4', 'MATEMATIKA SMESTER 4', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_5', 'MATEMATIKA SMESTER 5', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('matematika_smes_6', 'MATEMATIKA SMESTER 6', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_1', 'IPA SMESTER 1', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_2', 'IPA SMESTER 2', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_3', 'IPA SMESTER 3', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_4', 'IPA SMESTER 4', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_5', 'IPA SMESTER 5', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ipa_smes_6', 'IPA SMESTER 6', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_1', 'IPS SMESTER 1', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_2', 'IPS SMESTER 2', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_3', 'IPS SMESTER 3', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_4', 'IPS SMESTER 4', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_5', 'IPS SMESTER 5', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('ips_smes_6', 'IPS SMESTER 6', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('tes_wawancara', 'TES WAWANCARA', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('minat_murid', 'MINAT MURID', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('saran_orang_tua', 'SARAN ORANG TUA', 'required', array(
      'required' => '%s harus diisi !'
    ));

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('template/header', $data);
      $this->load->view('template/topbar');
      $this->load->view('template/sidebar');
      $this->load->view('penilaian/edit', $data);
      $this->load->view('template/footer');
    } else {

      $id = $this->input->post('id');
      $nisn = $this->input->post('nisn');
      $un_ipa = $this->input->post('un_ipa');
      $un_ips = $this->input->post('un_ips');
      $un_matematika = $this->input->post('un_matematika');
      $tes_soal_ipa = $this->input->post('tes_soal_ipa');
      $tes_soal_ips = $this->input->post('tes_soal_ips');
      $bahasa_indo_smes_1 = $this->input->post('bahasa_indo_smes_1');
      $bahasa_indo_smes_2 = $this->input->post('bahasa_indo_smes_2');
      $bahasa_indo_smes_3 = $this->input->post('bahasa_indo_smes_3');
      $bahasa_indo_smes_4 = $this->input->post('bahasa_indo_smes_4');
      $bahasa_indo_smes_5 = $this->input->post('bahasa_indo_smes_5');
      $bahasa_indo_smes_6 = $this->input->post('bahasa_indo_smes_6');
      $bahasa_ing_smes_1 = $this->input->post('bahasa_ing_smes_1');
      $bahasa_ing_smes_2 = $this->input->post('bahasa_ing_smes_2');
      $bahasa_ing_smes_3 = $this->input->post('bahasa_ing_smes_3');
      $bahasa_ing_smes_4 = $this->input->post('bahasa_ing_smes_4');
      $bahasa_ing_smes_5 = $this->input->post('bahasa_ing_smes_5');
      $bahasa_ing_smes_6 = $this->input->post('bahasa_ing_smes_6');
      $matematika_smes_1 = $this->input->post('matematika_smes_1');
      $matematika_smes_2 = $this->input->post('matematika_smes_2');
      $matematika_smes_3 = $this->input->post('matematika_smes_3');
      $matematika_smes_4 = $this->input->post('matematika_smes_4');
      $matematika_smes_5 = $this->input->post('matematika_smes_5');
      $matematika_smes_6 = $this->input->post('matematika_smes_6');
      $ipa_smes_1 = $this->input->post('ipa_smes_1');
      $ipa_smes_2 = $this->input->post('ipa_smes_2');
      $ipa_smes_3 = $this->input->post('ipa_smes_3');
      $ipa_smes_4 = $this->input->post('ipa_smes_4');
      $ipa_smes_5 = $this->input->post('ipa_smes_5');
      $ipa_smes_6 = $this->input->post('ipa_smes_6');
      $ips_smes_1 = $this->input->post('ips_smes_1');
      $ips_smes_2 = $this->input->post('ips_smes_2');
      $ips_smes_3 = $this->input->post('ips_smes_3');
      $ips_smes_4 = $this->input->post('ips_smes_4');
      $ips_smes_5 = $this->input->post('ips_smes_5');
      $ips_smes_6 = $this->input->post('ips_smes_6');
      $tes_wawancara = $this->input->post('tes_wawancara');
      $minat_murid = $this->input->post('minat_murid');
      $saran_orang_tua = $this->input->post('saran_orang_tua');

      $data = [

        "id" => $id,
        "nisn" => $nisn,
        "bahasa_ing_smes_4" => $bahasa_ing_smes_4,
        "un_ipa" => $un_ipa,
        "un_ips" => $un_ips,
        "un_matematika" => $un_matematika,
        "tes_soal_ipa" => $tes_soal_ipa,
        "tes_soal_ips" => $tes_soal_ips,
        "bahasa_indo_smes_1" => $bahasa_indo_smes_1,
        "bahasa_indo_smes_2" => $bahasa_indo_smes_2,
        "bahasa_indo_smes_3" => $bahasa_indo_smes_3,
        "bahasa_indo_smes_4" => $bahasa_indo_smes_4,
        "bahasa_indo_smes_5" => $bahasa_indo_smes_5,
        "bahasa_indo_smes_6" => $bahasa_indo_smes_6,
        "bahasa_ing_smes_1" => $bahasa_ing_smes_1,
        "bahasa_ing_smes_2" => $bahasa_ing_smes_2,
        "bahasa_ing_smes_3" => $bahasa_ing_smes_3,
        "bahasa_ing_smes_4" => $bahasa_ing_smes_4,
        "bahasa_ing_smes_5" => $bahasa_ing_smes_5,
        "bahasa_ing_smes_6" => $bahasa_ing_smes_6,
        "matematika_smes_1" => $matematika_smes_1,
        "matematika_smes_2" => $matematika_smes_2,
        "matematika_smes_3" => $matematika_smes_3,
        "matematika_smes_4" => $matematika_smes_4,
        "matematika_smes_5" => $matematika_smes_5,
        "matematika_smes_6" => $matematika_smes_6,
        "ipa_smes_1" => $ipa_smes_1,
        "ipa_smes_2" => $ipa_smes_2,
        "ipa_smes_3" => $ipa_smes_3,
        "ipa_smes_4" => $ipa_smes_4,
        "ipa_smes_5" => $ipa_smes_5,
        "ipa_smes_6" => $ipa_smes_6,
        "ips_smes_1" => $ips_smes_1,
        "ips_smes_2" => $ips_smes_2,
        "ips_smes_3" => $ips_smes_3,
        "ips_smes_4" => $ips_smes_4,
        "ips_smes_5" => $ips_smes_5,
        "ips_smes_6" => $ips_smes_6,
        "tes_wawancara" => $tes_wawancara,
        "minat_murid" => $minat_murid,
        "saran_orang_tua" => $saran_orang_tua

      ];

      // Nilai Rating UN IPA
      if ($data['bahasa_ing_smes_4'] > 100) {

        $bahasa_ing_smes_4 = 0;
      } elseif ($data['bahasa_ing_smes_4'] > 80 && $data['bahasa_ing_smes_4'] <= 100) {

        $bahasa_ing_smes_4 = 5;
      } elseif ($data['bahasa_ing_smes_4'] > 60 && $data['bahasa_ing_smes_4'] <= 80) {

        $bahasa_ing_smes_4 = 4;
      } elseif ($data['bahasa_ing_smes_4'] > 40 && $data['bahasa_ing_smes_4'] <= 60) {

        $bahasa_ing_smes_4 = 3;
      } elseif ($data['bahasa_ing_smes_4'] > 20 && $data['bahasa_ing_smes_4'] <= 40) {

        $bahasa_ing_smes_4 = 2;
      } elseif ($data['bahasa_ing_smes_4'] > 0 && $data['bahasa_ing_smes_4'] <= 20) {

        $bahasa_ing_smes_4 = 1;
      } elseif ($data['bahasa_ing_smes_4'] <= 0) {

        $bahasa_ing_smes_4 = 0;
      } else {

        $bahasa_ing_smes_4 = 0;
      }

      // Nilai Rating UN IPS
      if ($data['un_ips'] > 100) {

        $un_ips = 0;
      } elseif (
        $data['un_ips'] > 80 && $data['un_ips'] <= 100
      ) {

        $un_ips = 5;
      } elseif (
        $data['un_ips'] > 60 && $data['un_ips'] <= 80
      ) {

        $un_ips = 4;
      } elseif (
        $data['un_ips'] > 40 && $data['un_ips'] <= 60
      ) {

        $un_ips = 3;
      } elseif (
        $data['un_ips'] > 20 && $data['un_ips'] <= 40
      ) {

        $un_ips = 2;
      } elseif (
        $data['un_ips'] > 0 && $data['un_ips'] <= 20
      ) {

        $un_ips = 1;
      } elseif ($data['un_ips'] <= 0) {

        $un_ips = 0;
      } else {

        $un_ips = 0;
      }

      // Nilai Rating UN MATEMATIKA
      if ($data['un_matematika'] > 100) {

        $un_matematika = 0;
      } elseif ($data['un_matematika'] > 80 && $data['un_matematika'] <= 100) {

        $un_matematika = 5;
      } elseif ($data['un_matematika'] > 60 && $data['un_matematika'] <= 80) {

        $un_matematika = 4;
      } elseif ($data['un_matematika'] > 40 && $data['un_matematika'] <= 60) {

        $un_matematika = 3;
      } elseif ($data['un_matematika'] > 20 && $data['un_matematika'] <= 40) {

        $un_matematika = 2;
      } elseif ($data['un_matematika'] > 0 && $data['un_matematika'] <= 20) {

        $un_matematika = 1;
      } elseif ($data['un_matematika'] <= 0) {

        $un_matematika = 0;
      } else {

        $un_matematika = 0;
      }

      // Nilai Rating Tes Soal Ipa
      if ($data['tes_soal_ipa'] > 100) {

        $tes_soal_ipa = 0;
      } elseif ($data['tes_soal_ipa'] > 80 && $data['tes_soal_ipa'] <= 100) {

        $tes_soal_ipa = 5;
      } elseif ($data['tes_soal_ipa'] > 60 && $data['tes_soal_ipa'] <= 80) {

        $tes_soal_ipa = 4;
      } elseif ($data['tes_soal_ipa'] > 40 && $data['tes_soal_ipa'] <= 60) {

        $tes_soal_ipa = 3;
      } elseif ($data['tes_soal_ipa'] > 20 && $data['tes_soal_ipa'] <= 40) {

        $tes_soal_ipa = 2;
      } elseif ($data['tes_soal_ipa'] > 0 && $data['tes_soal_ipa'] <= 20) {

        $tes_soal_ipa = 1;
      } elseif ($data['tes_soal_ipa'] <= 0) {

        $tes_soal_ipa = 0;
      } else {

        $tes_soal_ipa = 0;
      }

      // Nilai Rating Tes Soal Ips
      if ($data['tes_soal_ips'] > 100) {

        $tes_soal_ips = 0;
      } elseif ($data['tes_soal_ips'] > 80 && $data['tes_soal_ips'] <= 100) {

        $tes_soal_ips = 5;
      } elseif ($data['tes_soal_ips'] > 60 && $data['tes_soal_ips'] <= 80) {

        $tes_soal_ips = 4;
      } elseif ($data['tes_soal_ips'] > 40 && $data['tes_soal_ips'] <= 60) {

        $tes_soal_ips = 3;
      } elseif ($data['tes_soal_ips'] > 20 && $data['tes_soal_ips'] <= 40) {

        $tes_soal_ips = 2;
      } elseif ($data['tes_soal_ips'] > 0 && $data['tes_soal_ips'] <= 20) {

        $tes_soal_ips = 1;
      } elseif ($data['tes_soal_ips'] <= 0) {

        $tes_soal_ips = 0;
      } else {

        $tes_soal_ips = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 1
      if ($data['bahasa_indo_smes_1'] > 100) {

        $bahasa_indo_smes_1 = 0;
      } elseif (
        $data['bahasa_indo_smes_1'] > 80 && $data['bahasa_indo_smes_1'] <= 100
      ) {

        $bahasa_indo_smes_1 = 5;
      } elseif (
        $data['bahasa_indo_smes_1'] > 60 && $data['bahasa_indo_smes_1'] <= 80
      ) {

        $bahasa_indo_smes_1 = 4;
      } elseif (
        $data['bahasa_indo_smes_1'] > 40 && $data['bahasa_indo_smes_1'] <= 60
      ) {

        $bahasa_indo_smes_1 = 3;
      } elseif (
        $data['bahasa_indo_smes_1'] > 20 && $data['bahasa_indo_smes_1'] <= 40
      ) {

        $bahasa_indo_smes_1 = 2;
      } elseif (
        $data['bahasa_indo_smes_1'] > 0 && $data['bahasa_indo_smes_1'] <= 20
      ) {

        $bahasa_indo_smes_1 = 1;
      } elseif (
        $data['bahasa_indo_smes_1'] <= 0
      ) {

        $bahasa_indo_smes_1 = 0;
      } else {

        $bahasa_indo_smes_1 = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 2
      if ($data['bahasa_indo_smes_2'] > 100) {

        $bahasa_indo_smes_2 = 0;
      } elseif (
        $data['bahasa_indo_smes_2'] > 80 && $data['bahasa_indo_smes_2'] <= 100
      ) {

        $bahasa_indo_smes_2 = 5;
      } elseif (
        $data['bahasa_indo_smes_2'] > 60 && $data['bahasa_indo_smes_2'] <= 80
      ) {

        $bahasa_indo_smes_2 = 4;
      } elseif (
        $data['bahasa_indo_smes_2'] > 40 && $data['bahasa_indo_smes_2'] <= 60
      ) {

        $bahasa_indo_smes_2 = 3;
      } elseif (
        $data['bahasa_indo_smes_2'] > 20 && $data['bahasa_indo_smes_2'] <= 40
      ) {

        $bahasa_indo_smes_2 = 2;
      } elseif (
        $data['bahasa_indo_smes_2'] > 0 && $data['bahasa_indo_smes_2'] <= 20
      ) {

        $bahasa_indo_smes_2 = 1;
      } elseif (
        $data['bahasa_indo_smes_2'] <= 0
      ) {

        $bahasa_indo_smes_2 = 0;
      } else {

        $bahasa_indo_smes_2 = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 3
      if ($data['bahasa_indo_smes_3'] > 100) {

        $bahasa_indo_smes_3 = 0;
      } elseif (
        $data['bahasa_indo_smes_3'] > 80 && $data['bahasa_indo_smes_3'] <= 100
      ) {

        $bahasa_indo_smes_3 = 5;
      } elseif (
        $data['bahasa_indo_smes_3'] > 60 && $data['bahasa_indo_smes_3'] <= 80
      ) {

        $bahasa_indo_smes_3 = 4;
      } elseif (
        $data['bahasa_indo_smes_3'] > 40 && $data['bahasa_indo_smes_3'] <= 60
      ) {

        $bahasa_indo_smes_3 = 3;
      } elseif (
        $data['bahasa_indo_smes_3'] > 20 && $data['bahasa_indo_smes_3'] <= 40
      ) {

        $bahasa_indo_smes_3 = 2;
      } elseif (
        $data['bahasa_indo_smes_3'] > 0 && $data['bahasa_indo_smes_3'] <= 20
      ) {

        $bahasa_indo_smes_3 = 1;
      } elseif (
        $data['bahasa_indo_smes_3'] <= 0
      ) {

        $bahasa_indo_smes_3 = 0;
      } else {

        $bahasa_indo_smes_3 = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 4
      if ($data['bahasa_indo_smes_4'] > 100) {

        $bahasa_indo_smes_4 = 0;
      } elseif (
        $data['bahasa_indo_smes_4'] > 80 && $data['bahasa_indo_smes_4'] <= 100
      ) {

        $bahasa_indo_smes_4 = 5;
      } elseif (
        $data['bahasa_indo_smes_4'] > 60 && $data['bahasa_indo_smes_4'] <= 80
      ) {

        $bahasa_indo_smes_4 = 4;
      } elseif (
        $data['bahasa_indo_smes_4'] > 40 && $data['bahasa_indo_smes_4'] <= 60
      ) {

        $bahasa_indo_smes_4 = 3;
      } elseif (
        $data['bahasa_indo_smes_4'] > 20 && $data['bahasa_indo_smes_4'] <= 40
      ) {

        $bahasa_indo_smes_4 = 2;
      } elseif (
        $data['bahasa_indo_smes_4'] > 0 && $data['bahasa_indo_smes_4'] <= 20
      ) {

        $bahasa_indo_smes_4 = 1;
      } elseif (
        $data['bahasa_indo_smes_4'] <= 0
      ) {

        $bahasa_indo_smes_4 = 0;
      } else {

        $bahasa_indo_smes_4 = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 5
      if ($data['bahasa_indo_smes_5'] > 100) {

        $bahasa_indo_smes_5 = 0;
      } elseif (
        $data['bahasa_indo_smes_5'] > 80 && $data['bahasa_indo_smes_5'] <= 100
      ) {

        $bahasa_indo_smes_5 = 5;
      } elseif (
        $data['bahasa_indo_smes_5'] > 60 && $data['bahasa_indo_smes_5'] <= 80
      ) {

        $bahasa_indo_smes_5 = 4;
      } elseif (
        $data['bahasa_indo_smes_5'] > 40 && $data['bahasa_indo_smes_5'] <= 60
      ) {

        $bahasa_indo_smes_5 = 3;
      } elseif (
        $data['bahasa_indo_smes_5'] > 20 && $data['bahasa_indo_smes_5'] <= 40
      ) {

        $bahasa_indo_smes_5 = 2;
      } elseif (
        $data['bahasa_indo_smes_5'] > 0 && $data['bahasa_indo_smes_5'] <= 20
      ) {

        $bahasa_indo_smes_5 = 1;
      } elseif (
        $data['bahasa_indo_smes_5'] <= 0
      ) {

        $bahasa_indo_smes_5 = 0;
      } else {

        $bahasa_indo_smes_5 = 0;
      }

      // Nilai Rating Bahasa Indonesia Smester 6
      if ($data['bahasa_indo_smes_6'] > 100) {

        $bahasa_indo_smes_6 = 0;
      } elseif (
        $data['bahasa_indo_smes_6'] > 80 && $data['bahasa_indo_smes_6'] <= 100
      ) {

        $bahasa_indo_smes_6 = 5;
      } elseif (
        $data['bahasa_indo_smes_6'] > 60 && $data['bahasa_indo_smes_6'] <= 80
      ) {

        $bahasa_indo_smes_6 = 4;
      } elseif (
        $data['bahasa_indo_smes_6'] > 40 && $data['bahasa_indo_smes_6'] <= 60
      ) {

        $bahasa_indo_smes_6 = 3;
      } elseif (
        $data['bahasa_indo_smes_6'] > 20 && $data['bahasa_indo_smes_6'] <= 40
      ) {

        $bahasa_indo_smes_6 = 2;
      } elseif (
        $data['bahasa_indo_smes_6'] > 0 && $data['bahasa_indo_smes_6'] <= 20
      ) {

        $bahasa_indo_smes_6 = 1;
      } elseif (
        $data['bahasa_indo_smes_6'] <= 0
      ) {

        $bahasa_indo_smes_6 = 0;
      } else {

        $bahasa_indo_smes_6 = 0;
      }

      // Nilai Rating Bahasa Inggris Smester 1
      if ($data['bahasa_ing_smes_1'] > 100) {

        $bahasa_ing_smes_1 = 0;
      } elseif (
        $data['bahasa_ing_smes_1'] > 80 && $data['bahasa_ing_smes_1'] <= 100
      ) {

        $bahasa_ing_smes_1 = 5;
      } elseif (
        $data['bahasa_ing_smes_1'] > 60 && $data['bahasa_ing_smes_1'] <= 80
      ) {

        $bahasa_ing_smes_1 = 4;
      } elseif (
        $data['bahasa_ing_smes_1'] > 40 && $data['bahasa_ing_smes_1'] <= 60
      ) {

        $bahasa_ing_smes_1 = 3;
      } elseif (
        $data['bahasa_ing_smes_1'] > 20 && $data['bahasa_ing_smes_1'] <= 40
      ) {

        $bahasa_ing_smes_1 = 2;
      } elseif (
        $data['bahasa_ing_smes_1'] > 0 && $data['bahasa_ing_smes_1'] <= 20
      ) {

        $bahasa_ing_smes_1 = 1;
      } elseif (
        $data['bahasa_ing_smes_1'] <= 0
      ) {

        $bahasa_ing_smes_1 = 0;
      } else {

        $bahasa_ing_smes_1 = 0;
      }

      // Nilai Rating Bahasa inggris Smester 2
      if ($data['bahasa_ing_smes_2'] > 100) {

        $bahasa_ing_smes_2 = 0;
      } elseif (
        $data['bahasa_ing_smes_2'] > 80 && $data['bahasa_ing_smes_2'] <= 100
      ) {

        $bahasa_ing_smes_2 = 5;
      } elseif (
        $data['bahasa_ing_smes_2'] > 60 && $data['bahasa_ing_smes_2'] <= 80
      ) {

        $bahasa_ing_smes_2 = 4;
      } elseif (
        $data['bahasa_ing_smes_2'] > 40 && $data['bahasa_ing_smes_2'] <= 60
      ) {

        $bahasa_ing_smes_2 = 3;
      } elseif (
        $data['bahasa_ing_smes_2'] > 20 && $data['bahasa_ing_smes_2'] <= 40
      ) {

        $bahasa_ing_smes_2 = 2;
      } elseif (
        $data['bahasa_ing_smes_2'] > 0 && $data['bahasa_ing_smes_2'] <= 20
      ) {

        $bahasa_ing_smes_2 = 1;
      } elseif (
        $data['bahasa_ing_smes_2'] <= 0
      ) {

        $bahasa_ing_smes_2 = 0;
      } else {

        $bahasa_ing_smes_2 = 0;
      }

      // Nilai Rating Bahasa inggris Smester 3
      if ($data['bahasa_ing_smes_3'] > 100) {

        $bahasa_ing_smes_3 = 0;
      } elseif (
        $data['bahasa_ing_smes_3'] > 80 && $data['bahasa_ing_smes_3'] <= 100
      ) {

        $bahasa_ing_smes_3 = 5;
      } elseif (
        $data['bahasa_ing_smes_3'] > 60 && $data['bahasa_ing_smes_3'] <= 80
      ) {

        $bahasa_ing_smes_3 = 4;
      } elseif (
        $data['bahasa_ing_smes_3'] > 40 && $data['bahasa_ing_smes_3'] <= 60
      ) {

        $bahasa_ing_smes_3 = 3;
      } elseif (
        $data['bahasa_ing_smes_3'] > 20 && $data['bahasa_ing_smes_3'] <= 40
      ) {

        $bahasa_ing_smes_3 = 2;
      } elseif (
        $data['bahasa_ing_smes_3'] > 0 && $data['bahasa_ing_smes_3'] <= 20
      ) {

        $bahasa_ing_smes_3 = 1;
      } elseif (
        $data['bahasa_ing_smes_3'] <= 0
      ) {

        $bahasa_ing_smes_3 = 0;
      } else {

        $bahasa_ing_smes_3 = 0;
      }

      // Nilai Rating Bahasa inggris Smester 4
      if ($data['bahasa_ing_smes_4'] > 100) {

        $bahasa_ing_smes_4 = 0;
      } elseif (
        $data['bahasa_ing_smes_4'] > 80 && $data['bahasa_ing_smes_4'] <= 100
      ) {

        $bahasa_ing_smes_4 = 5;
      } elseif (
        $data['bahasa_ing_smes_4'] > 60 && $data['bahasa_ing_smes_4'] <= 80
      ) {

        $bahasa_ing_smes_4 = 4;
      } elseif (
        $data['bahasa_ing_smes_4'] > 40 && $data['bahasa_ing_smes_4'] <= 60
      ) {

        $bahasa_ing_smes_4 = 3;
      } elseif (
        $data['bahasa_ing_smes_4'] > 20 && $data['bahasa_ing_smes_4'] <= 40
      ) {

        $bahasa_ing_smes_4 = 2;
      } elseif (
        $data['bahasa_ing_smes_4'] > 0 && $data['bahasa_ing_smes_4'] <= 20
      ) {

        $bahasa_ing_smes_4 = 1;
      } elseif (
        $data['bahasa_ing_smes_4'] <= 0
      ) {

        $bahasa_ing_smes_4 = 0;
      } else {

        $bahasa_ing_smes_4 = 0;
      }

      // Nilai Rating Bahasa inggris Smester 5
      if ($data['bahasa_ing_smes_5'] > 100) {

        $bahasa_ing_smes_5 = 0;
      } elseif (
        $data['bahasa_ing_smes_5'] > 80 && $data['bahasa_ing_smes_5'] <= 100
      ) {

        $bahasa_ing_smes_5 = 5;
      } elseif (
        $data['bahasa_ing_smes_5'] > 60 && $data['bahasa_ing_smes_5'] <= 80
      ) {

        $bahasa_ing_smes_5 = 4;
      } elseif (
        $data['bahasa_ing_smes_5'] > 40 && $data['bahasa_ing_smes_5'] <= 60
      ) {

        $bahasa_ing_smes_5 = 3;
      } elseif (
        $data['bahasa_ing_smes_5'] > 20 && $data['bahasa_ing_smes_5'] <= 40
      ) {

        $bahasa_ing_smes_5 = 2;
      } elseif (
        $data['bahasa_ing_smes_5'] > 0 && $data['bahasa_ing_smes_5'] <= 20
      ) {

        $bahasa_ing_smes_5 = 1;
      } elseif (
        $data['bahasa_ing_smes_5'] <= 0
      ) {

        $bahasa_ing_smes_5 = 0;
      } else {

        $bahasa_ing_smes_5 = 0;
      }

      // Nilai Rating Bahasa inggris Smester 6
      if ($data['bahasa_ing_smes_6'] > 100) {

        $bahasa_ing_smes_6 = 0;
      } elseif (
        $data['bahasa_ing_smes_6'] > 80 && $data['bahasa_ing_smes_6'] <= 100
      ) {

        $bahasa_ing_smes_6 = 5;
      } elseif (
        $data['bahasa_ing_smes_6'] > 60 && $data['bahasa_ing_smes_6'] <= 80
      ) {

        $bahasa_ing_smes_6 = 4;
      } elseif (
        $data['bahasa_ing_smes_6'] > 40 && $data['bahasa_ing_smes_6'] <= 60
      ) {

        $bahasa_ing_smes_6 = 3;
      } elseif (
        $data['bahasa_ing_smes_6'] > 20 && $data['bahasa_ing_smes_6'] <= 40
      ) {

        $bahasa_ing_smes_6 = 2;
      } elseif (
        $data['bahasa_ing_smes_6'] > 0 && $data['bahasa_ing_smes_6'] <= 20
      ) {

        $bahasa_ing_smes_6 = 1;
      } elseif (
        $data['bahasa_ing_smes_6'] <= 0
      ) {

        $bahasa_ing_smes_6 = 0;
      } else {

        $bahasa_ing_smes_6 = 0;
      }

      // Nilai Rating  Matematika Smester 1
      if ($data['matematika_smes_1'] > 100) {

        $matematika_smes_1 = 0;
      } elseif (
        $data['matematika_smes_1'] > 80 && $data['matematika_smes_1'] <= 100
      ) {

        $matematika_smes_1 = 5;
      } elseif (
        $data['matematika_smes_1'] > 60 && $data['matematika_smes_1'] <= 80
      ) {

        $matematika_smes_1 = 4;
      } elseif (
        $data['matematika_smes_1'] > 40 && $data['matematika_smes_1'] <= 60
      ) {

        $matematika_smes_1 = 3;
      } elseif (
        $data['matematika_smes_1'] > 20 && $data['matematika_smes_1'] <= 40
      ) {

        $matematika_smes_1 = 2;
      } elseif (
        $data['matematika_smes_1'] > 0 && $data['matematika_smes_1'] <= 20
      ) {

        $matematika_smes_1 = 1;
      } elseif (
        $data['matematika_smes_1'] <= 0
      ) {

        $matematika_smes_1 = 0;
      } else {

        $matematika_smes_1 = 0;
      }

      // Nilai Rating  Matematika Smester 2
      if ($data['matematika_smes_2'] > 100) {

        $matematika_smes_2 = 0;
      } elseif (
        $data['matematika_smes_2'] > 80 && $data['matematika_smes_2'] <= 100
      ) {

        $matematika_smes_2 = 5;
      } elseif (
        $data['matematika_smes_2'] > 60 && $data['matematika_smes_2'] <= 80
      ) {

        $matematika_smes_2 = 4;
      } elseif (
        $data['matematika_smes_2'] > 40 && $data['matematika_smes_2'] <= 60
      ) {

        $matematika_smes_2 = 3;
      } elseif (
        $data['matematika_smes_2'] > 20 && $data['matematika_smes_2'] <= 40
      ) {

        $matematika_smes_2 = 2;
      } elseif (
        $data['matematika_smes_2'] > 0 && $data['matematika_smes_2'] <= 20
      ) {

        $matematika_smes_2 = 1;
      } elseif (
        $data['matematika_smes_2'] <= 0
      ) {

        $matematika_smes_2 = 0;
      } else {

        $matematika_smes_2 = 0;
      }

      // Nilai Rating  Matematika Smester 3
      if ($data['matematika_smes_3'] > 100) {

        $matematika_smes_3 = 0;
      } elseif (
        $data['matematika_smes_3'] > 80 && $data['matematika_smes_3'] <= 100
      ) {

        $matematika_smes_3 = 5;
      } elseif (
        $data['matematika_smes_3'] > 60 && $data['matematika_smes_3'] <= 80
      ) {

        $matematika_smes_3 = 4;
      } elseif (
        $data['matematika_smes_3'] > 40 && $data['matematika_smes_3'] <= 60
      ) {

        $matematika_smes_3 = 3;
      } elseif (
        $data['matematika_smes_3'] > 20 && $data['matematika_smes_3'] <= 40
      ) {

        $matematika_smes_3 = 2;
      } elseif (
        $data['matematika_smes_3'] > 0 && $data['matematika_smes_3'] <= 20
      ) {

        $matematika_smes_3 = 1;
      } elseif (
        $data['matematika_smes_3'] <= 0
      ) {

        $matematika_smes_3 = 0;
      } else {

        $matematika_smes_3 = 0;
      }

      // Nilai Rating  Matematika Smester 4
      if ($data['matematika_smes_4'] > 100) {

        $matematika_smes_4 = 0;
      } elseif (
        $data['matematika_smes_4'] > 80 && $data['matematika_smes_4'] <= 100
      ) {

        $matematika_smes_4 = 5;
      } elseif (
        $data['matematika_smes_4'] > 60 && $data['matematika_smes_4'] <= 80
      ) {

        $matematika_smes_4 = 4;
      } elseif (
        $data['matematika_smes_4'] > 40 && $data['matematika_smes_4'] <= 60
      ) {

        $matematika_smes_4 = 3;
      } elseif (
        $data['matematika_smes_4'] > 20 && $data['matematika_smes_4'] <= 40
      ) {

        $matematika_smes_4 = 2;
      } elseif (
        $data['matematika_smes_4'] > 0 && $data['matematika_smes_4'] <= 20
      ) {

        $matematika_smes_4 = 1;
      } elseif (
        $data['matematika_smes_4'] <= 0
      ) {

        $matematika_smes_4 = 0;
      } else {

        $matematika_smes_4 = 0;
      }

      // Nilai Rating  Matematika Smester 5
      if ($data['matematika_smes_5'] > 100) {

        $matematika_smes_5 = 0;
      } elseif (
        $data['matematika_smes_5'] > 80 && $data['matematika_smes_5'] <= 100
      ) {

        $matematika_smes_5 = 5;
      } elseif (
        $data['matematika_smes_5'] > 60 && $data['matematika_smes_5'] <= 80
      ) {

        $matematika_smes_5 = 4;
      } elseif (
        $data['matematika_smes_5'] > 40 && $data['matematika_smes_5'] <= 60
      ) {

        $matematika_smes_5 = 3;
      } elseif (
        $data['matematika_smes_5'] > 20 && $data['matematika_smes_5'] <= 40
      ) {

        $matematika_smes_5 = 2;
      } elseif (
        $data['matematika_smes_5'] > 0 && $data['matematika_smes_5'] <= 20
      ) {

        $matematika_smes_5 = 1;
      } elseif (
        $data['matematika_smes_5'] <= 0
      ) {

        $matematika_smes_5 = 0;
      } else {

        $matematika_smes_5 = 0;
      }

      // Nilai Rating  Matematika Smester 6
      if ($data['matematika_smes_6'] > 100) {

        $matematika_smes_6 = 0;
      } elseif (
        $data['matematika_smes_6'] > 80 && $data['matematika_smes_6'] <= 100
      ) {

        $matematika_smes_6 = 5;
      } elseif (
        $data['matematika_smes_6'] > 60 && $data['matematika_smes_6'] <= 80
      ) {

        $matematika_smes_6 = 4;
      } elseif (
        $data['matematika_smes_6'] > 40 && $data['matematika_smes_6'] <= 60
      ) {

        $matematika_smes_6 = 3;
      } elseif (
        $data['matematika_smes_6'] > 20 && $data['matematika_smes_6'] <= 40
      ) {

        $matematika_smes_6 = 2;
      } elseif (
        $data['matematika_smes_6'] > 0 && $data['matematika_smes_6'] <= 20
      ) {

        $matematika_smes_6 = 1;
      } elseif (
        $data['matematika_smes_6'] <= 0
      ) {

        $matematika_smes_6 = 0;
      } else {

        $matematika_smes_6 = 0;
      }

      // Nilai Rating  ipa Smester 1
      if ($data['ipa_smes_1'] > 100) {

        $ipa_smes_1 = 0;
      } elseif (
        $data['ipa_smes_1'] > 80 && $data['ipa_smes_1'] <= 100
      ) {

        $ipa_smes_1 = 5;
      } elseif (
        $data['ipa_smes_1'] > 60 && $data['ipa_smes_1'] <= 80
      ) {

        $ipa_smes_1 = 4;
      } elseif (
        $data['ipa_smes_1'] > 40 && $data['ipa_smes_1'] <= 60
      ) {

        $ipa_smes_1 = 3;
      } elseif (
        $data['ipa_smes_1'] > 20 && $data['ipa_smes_1'] <= 40
      ) {

        $ipa_smes_1 = 2;
      } elseif (
        $data['ipa_smes_1'] > 0 && $data['ipa_smes_1'] <= 20
      ) {

        $ipa_smes_1 = 1;
      } elseif (
        $data['ipa_smes_1'] <= 0
      ) {

        $ipa_smes_1 = 0;
      } else {

        $ipa_smes_1 = 0;
      }

      // Nilai Rating  ipa Smester 2
      if ($data['ipa_smes_2'] > 100) {

        $ipa_smes_2 = 0;
      } elseif (
        $data['ipa_smes_2'] > 80 && $data['ipa_smes_2'] <= 100
      ) {

        $ipa_smes_2 = 5;
      } elseif (
        $data['ipa_smes_2'] > 60 && $data['ipa_smes_2'] <= 80
      ) {

        $ipa_smes_2 = 4;
      } elseif (
        $data['ipa_smes_2'] > 40 && $data['ipa_smes_2'] <= 60
      ) {

        $ipa_smes_2 = 3;
      } elseif (
        $data['ipa_smes_2'] > 20 && $data['ipa_smes_2'] <= 40
      ) {

        $ipa_smes_2 = 2;
      } elseif (
        $data['ipa_smes_2'] > 0 && $data['ipa_smes_2'] <= 20
      ) {

        $ipa_smes_2 = 1;
      } elseif (
        $data['ipa_smes_2'] <= 0
      ) {

        $ipa_smes_2 = 0;
      } else {

        $ipa_smes_2 = 0;
      }

      // Nilai Rating  ipa Smester 3
      if ($data['ipa_smes_3'] > 100) {

        $ipa_smes_3 = 0;
      } elseif (
        $data['ipa_smes_3'] > 80 && $data['ipa_smes_3'] <= 100
      ) {

        $ipa_smes_3 = 5;
      } elseif (
        $data['ipa_smes_3'] > 60 && $data['ipa_smes_3'] <= 80
      ) {

        $ipa_smes_3 = 4;
      } elseif (
        $data['ipa_smes_3'] > 40 && $data['ipa_smes_3'] <= 60
      ) {

        $ipa_smes_3 = 3;
      } elseif (
        $data['ipa_smes_3'] > 20 && $data['ipa_smes_3'] <= 40
      ) {

        $ipa_smes_3 = 2;
      } elseif (
        $data['ipa_smes_3'] > 0 && $data['ipa_smes_3'] <= 20
      ) {

        $ipa_smes_3 = 1;
      } elseif (
        $data['ipa_smes_3'] <= 0
      ) {

        $ipa_smes_3 = 0;
      } else {

        $ipa_smes_3 = 0;
      }

      // Nilai Rating  ipa Smester 4
      if ($data['ipa_smes_4'] > 100) {

        $ipa_smes_4 = 0;
      } elseif (
        $data['ipa_smes_4'] > 80 && $data['ipa_smes_4'] <= 100
      ) {

        $ipa_smes_4 = 5;
      } elseif (
        $data['ipa_smes_4'] > 60 && $data['ipa_smes_4'] <= 80
      ) {

        $ipa_smes_4 = 4;
      } elseif (
        $data['ipa_smes_4'] > 40 && $data['ipa_smes_4'] <= 60
      ) {

        $ipa_smes_4 = 3;
      } elseif (
        $data['ipa_smes_4'] > 20 && $data['ipa_smes_4'] <= 40
      ) {

        $ipa_smes_4 = 2;
      } elseif (
        $data['ipa_smes_4'] > 0 && $data['ipa_smes_4'] <= 20
      ) {

        $ipa_smes_4 = 1;
      } elseif (
        $data['ipa_smes_4'] <= 0
      ) {

        $ipa_smes_4 = 0;
      } else {

        $ipa_smes_4 = 0;
      }

      // Nilai Rating  ipa Smester 5
      if ($data['ipa_smes_5'] > 100) {

        $ipa_smes_5 = 0;
      } elseif (
        $data['ipa_smes_5'] > 80 && $data['ipa_smes_5'] <= 100
      ) {

        $ipa_smes_5 = 5;
      } elseif (
        $data['ipa_smes_5'] > 60 && $data['ipa_smes_5'] <= 80
      ) {

        $ipa_smes_5 = 4;
      } elseif (
        $data['ipa_smes_5'] > 40 && $data['ipa_smes_5'] <= 60
      ) {

        $ipa_smes_5 = 3;
      } elseif (
        $data['ipa_smes_5'] > 20 && $data['ipa_smes_5'] <= 40
      ) {

        $ipa_smes_5 = 2;
      } elseif (
        $data['ipa_smes_5'] > 0 && $data['ipa_smes_5'] <= 20
      ) {

        $ipa_smes_5 = 1;
      } elseif (
        $data['ipa_smes_5'] <= 0
      ) {

        $ipa_smes_5 = 0;
      } else {

        $ipa_smes_5 = 0;
      }

      // Nilai Rating  ipa Smester 6
      if ($data['ipa_smes_6'] > 100) {

        $ipa_smes_6 = 0;
      } elseif (
        $data['ipa_smes_6'] > 80 && $data['ipa_smes_6'] <= 100
      ) {

        $ipa_smes_6 = 5;
      } elseif (
        $data['ipa_smes_6'] > 60 && $data['ipa_smes_6'] <= 80
      ) {

        $ipa_smes_6 = 4;
      } elseif (
        $data['ipa_smes_6'] > 40 && $data['ipa_smes_6'] <= 60
      ) {

        $ipa_smes_6 = 3;
      } elseif (
        $data['ipa_smes_6'] > 20 && $data['ipa_smes_6'] <= 40
      ) {

        $ipa_smes_6 = 2;
      } elseif (
        $data['ipa_smes_6'] > 0 && $data['ipa_smes_6'] <= 20
      ) {

        $ipa_smes_6 = 1;
      } elseif (
        $data['ipa_smes_6'] <= 0
      ) {

        $ipa_smes_6 = 0;
      } else {

        $ipa_smes_6 = 0;
      }

      // Nilai Rating  ips Smester 1
      if ($data['ips_smes_1'] > 100) {

        $ips_smes_1 = 0;
      } elseif (
        $data['ips_smes_1'] > 80 && $data['ips_smes_1'] <= 100
      ) {

        $ips_smes_1 = 5;
      } elseif (
        $data['ips_smes_1'] > 60 && $data['ips_smes_1'] <= 80
      ) {

        $ips_smes_1 = 4;
      } elseif (
        $data['ips_smes_1'] > 40 && $data['ips_smes_1'] <= 60
      ) {

        $ips_smes_1 = 3;
      } elseif (
        $data['ips_smes_1'] > 20 && $data['ips_smes_1'] <= 40
      ) {

        $ips_smes_1 = 2;
      } elseif (
        $data['ips_smes_1'] > 0 && $data['ips_smes_1'] <= 20
      ) {

        $ips_smes_1 = 1;
      } elseif (
        $data['ips_smes_1'] <= 0
      ) {

        $ips_smes_1 = 0;
      } else {

        $ips_smes_1 = 0;
      }

      // Nilai Rating  ips Smester 2
      if ($data['ips_smes_2'] > 100) {

        $ips_smes_2 = 0;
      } elseif (
        $data['ips_smes_2'] > 80 && $data['ips_smes_2'] <= 100
      ) {

        $ips_smes_2 = 5;
      } elseif (
        $data['ips_smes_2'] > 60 && $data['ips_smes_2'] <= 80
      ) {

        $ips_smes_2 = 4;
      } elseif (
        $data['ips_smes_2'] > 40 && $data['ips_smes_2'] <= 60
      ) {

        $ips_smes_2 = 3;
      } elseif (
        $data['ips_smes_2'] > 20 && $data['ips_smes_2'] <= 40
      ) {

        $ips_smes_2 = 2;
      } elseif (
        $data['ips_smes_2'] > 0 && $data['ips_smes_2'] <= 20
      ) {

        $ips_smes_2 = 1;
      } elseif (
        $data['ips_smes_2'] <= 0
      ) {

        $ips_smes_2 = 0;
      } else {

        $ips_smes_2 = 0;
      }

      // Nilai Rating  ips Smester 3
      if ($data['ips_smes_3'] > 100) {

        $ips_smes_3 = 0;
      } elseif (
        $data['ips_smes_3'] > 80 && $data['ips_smes_3'] <= 100
      ) {

        $ips_smes_3 = 5;
      } elseif (
        $data['ips_smes_3'] > 60 && $data['ips_smes_3'] <= 80
      ) {

        $ips_smes_3 = 4;
      } elseif (
        $data['ips_smes_3'] > 40 && $data['ips_smes_3'] <= 60
      ) {

        $ips_smes_3 = 3;
      } elseif (
        $data['ips_smes_3'] > 20 && $data['ips_smes_3'] <= 40
      ) {

        $ips_smes_3 = 2;
      } elseif (
        $data['ips_smes_3'] > 0 && $data['ips_smes_3'] <= 20
      ) {

        $ips_smes_3 = 1;
      } elseif (
        $data['ips_smes_3'] <= 0
      ) {

        $ips_smes_3 = 0;
      } else {

        $ips_smes_3 = 0;
      }

      // Nilai Rating  ips Smester 4
      if ($data['ips_smes_4'] > 100) {

        $ips_smes_4 = 0;
      } elseif (
        $data['ips_smes_4'] > 80 && $data['ips_smes_4'] <= 100
      ) {

        $ips_smes_4 = 5;
      } elseif (
        $data['ips_smes_4'] > 60 && $data['ips_smes_4'] <= 80
      ) {

        $ips_smes_4 = 4;
      } elseif (
        $data['ips_smes_4'] > 40 && $data['ips_smes_4'] <= 60
      ) {

        $ips_smes_4 = 3;
      } elseif (
        $data['ips_smes_4'] > 20 && $data['ips_smes_4'] <= 40
      ) {

        $ips_smes_4 = 2;
      } elseif (
        $data['ips_smes_4'] > 0 && $data['ips_smes_4'] <= 20
      ) {

        $ips_smes_4 = 1;
      } elseif (
        $data['ips_smes_4'] <= 0
      ) {

        $ips_smes_4 = 0;
      } else {

        $ips_smes_4 = 0;
      }

      // Nilai Rating  ips Smester 5
      if ($data['ips_smes_5'] > 100) {

        $ips_smes_5 = 0;
      } elseif (
        $data['ips_smes_5'] > 80 && $data['ips_smes_5'] <= 100
      ) {

        $ips_smes_5 = 5;
      } elseif (
        $data['ips_smes_5'] > 60 && $data['ips_smes_5'] <= 80
      ) {

        $ips_smes_5 = 4;
      } elseif (
        $data['ips_smes_5'] > 40 && $data['ips_smes_5'] <= 60
      ) {

        $ips_smes_5 = 3;
      } elseif (
        $data['ips_smes_5'] > 20 && $data['ips_smes_5'] <= 40
      ) {

        $ips_smes_5 = 2;
      } elseif (
        $data['ips_smes_5'] > 0 && $data['ips_smes_5'] <= 20
      ) {

        $ips_smes_5 = 1;
      } elseif (
        $data['ips_smes_5'] <= 0
      ) {

        $ips_smes_5 = 0;
      } else {

        $ips_smes_5 = 0;
      }

      // Nilai Rating  ips Smester 6
      if ($data['ips_smes_6'] > 100) {

        $ips_smes_6 = 0;
      } elseif (
        $data['ips_smes_6'] > 80 && $data['ips_smes_6'] <= 100
      ) {

        $ips_smes_6 = 5;
      } elseif (
        $data['ips_smes_6'] > 60 && $data['ips_smes_6'] <= 80
      ) {

        $ips_smes_6 = 4;
      } elseif (
        $data['ips_smes_6'] > 40 && $data['ips_smes_6'] <= 60
      ) {

        $ips_smes_6 = 3;
      } elseif (
        $data['ips_smes_6'] > 20 && $data['ips_smes_6'] <= 40
      ) {

        $ips_smes_6 = 2;
      } elseif (
        $data['ips_smes_6'] > 0 && $data['ips_smes_6'] <= 20
      ) {

        $ips_smes_6 = 1;
      } elseif (
        $data['ips_smes_6'] <= 0
      ) {

        $ips_smes_6 = 0;
      } else {

        $ips_smes_6 = 0;
      }

      // Nilai Rating Tes Wawancara
      if ($data['tes_wawancara'] == 'IPA') {

        $tes_wawancara = 4;
      } else {

        $tes_wawancara = 3;
      }

      // Nilai Rating Minat Murid
      if ($data['minat_murid'] == 'IPA') {

        $minat_murid = 4;
      } else {

        $minat_murid = 3;
      }

      // Nilai Rating Saran Orang Tua
      if ($data['saran_orang_tua'] == 'IPA') {

        $saran_orang_tua = 4;
      } else {

        $saran_orang_tua = 3;
      }

      // Data Kriteria
      $kriteria = [

        // Kriteria Nilai Rating UN IPA
        [

          "nisn" => $nisn,
          "id_kriteria" => 1,
          "nilai" => $bahasa_ing_smes_4

        ],

        // Kriteria Nilai Rating UN IPS
        [

          "nisn" => $nisn,
          "id_kriteria" => 2,
          "nilai" => $un_ips

        ],

        // Kriteria Nilai Rating UN MATEMATIKA
        [

          "nisn" => $nisn,
          "id_kriteria" => 3,
          "nilai" => $un_matematika

        ],

        // Kriteria Nilai Rating TES SOAL IPA
        [

          "nisn" => $nisn,
          "id_kriteria" => 4,
          "nilai" => $tes_soal_ipa

        ],

        // Kriteria Nilai Rating TES SOAL IPS
        [

          "nisn" => $nisn,
          "id_kriteria" => 5,
          "nilai" => $tes_soal_ips

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 1
        [

          "nisn" => $nisn,
          "id_kriteria" => 6,
          "nilai" => $bahasa_indo_smes_1

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 2
        [

          "nisn" => $nisn,
          "id_kriteria" => 7,
          "nilai" => $bahasa_indo_smes_2

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 3
        [

          "nisn" => $nisn,
          "id_kriteria" => 8,
          "nilai" => $bahasa_indo_smes_3

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 4
        [

          "nisn" => $nisn,
          "id_kriteria" => 9,
          "nilai" => $bahasa_indo_smes_4

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 5
        [

          "nisn" => $nisn,
          "id_kriteria" => 10,
          "nilai" => $bahasa_indo_smes_5

        ],

        // Kriteria Nilai Rating BAHASA INDONESIA SMESTER 6
        [

          "nisn" => $nisn,
          "id_kriteria" => 11,
          "nilai" => $bahasa_indo_smes_6

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 1
        [

          "nisn" => $nisn,
          "id_kriteria" => 12,
          "nilai" => $bahasa_ing_smes_1

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 2
        [

          "nisn" => $nisn,
          "id_kriteria" => 13,
          "nilai" => $bahasa_ing_smes_2

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 3
        [

          "nisn" => $nisn,
          "id_kriteria" => 14,
          "nilai" => $bahasa_ing_smes_3

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 4
        [

          "nisn" => $nisn,
          "id_kriteria" => 15,
          "nilai" => $bahasa_ing_smes_4

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 5
        [

          "nisn" => $nisn,
          "id_kriteria" => 16,
          "nilai" => $bahasa_ing_smes_5

        ],

        // Kriteria Nilai Rating BAHASA INGGRIS SMESTER 6
        [

          "nisn" => $nisn,
          "id_kriteria" => 17,
          "nilai" => $bahasa_ing_smes_6

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 1
        [

          "nisn" => $nisn,
          "id_kriteria" => 18,
          "nilai" => $matematika_smes_1

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 2
        [

          "nisn" => $nisn,
          "id_kriteria" => 19,
          "nilai" => $matematika_smes_2

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 3
        [

          "nisn" => $nisn,
          "id_kriteria" => 20,
          "nilai" => $matematika_smes_3

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 4
        [

          "nisn" => $nisn,
          "id_kriteria" => 21,
          "nilai" => $matematika_smes_4

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 5
        [

          "nisn" => $nisn,
          "id_kriteria" => 22,
          "nilai" => $matematika_smes_5

        ],

        // Kriteria Nilai Rating MATEMATIKA SMESTER 6
        [

          "nisn" => $nisn,
          "id_kriteria" => 23,
          "nilai" => $matematika_smes_6

        ],

        // Kriteria Nilai Rating ipa SMESTER 1
        [

          "nisn" => $nisn,
          "id_kriteria" => 24,
          "nilai" => $ipa_smes_1

        ],

        // Kriteria Nilai Rating ipa SMESTER 2
        [

          "nisn" => $nisn,
          "id_kriteria" => 25,
          "nilai" => $ipa_smes_2

        ],

        // Kriteria Nilai Rating ipa SMESTER 3
        [

          "nisn" => $nisn,
          "id_kriteria" => 26,
          "nilai" => $ipa_smes_3

        ],

        // Kriteria Nilai Rating ipa SMESTER 4
        [

          "nisn" => $nisn,
          "id_kriteria" => 27,
          "nilai" => $ipa_smes_4

        ],

        // Kriteria Nilai Rating ipa SMESTER 5
        [

          "nisn" => $nisn,
          "id_kriteria" => 28,
          "nilai" => $ipa_smes_5

        ],

        // Kriteria Nilai Rating ipa SMESTER 6
        [

          "nisn" => $nisn,
          "id_kriteria" => 29,
          "nilai" => $ipa_smes_6

        ],

        // Kriteria Nilai Rating ips SMESTER 1
        [

          "nisn" => $nisn,
          "id_kriteria" => 30,
          "nilai" => $ips_smes_1

        ],

        // Kriteria Nilai Rating ips SMESTER 2
        [

          "nisn" => $nisn,
          "id_kriteria" => 31,
          "nilai" => $ips_smes_2

        ],

        // Kriteria Nilai Rating ips SMESTER 3
        [

          "nisn" => $nisn,
          "id_kriteria" => 32,
          "nilai" => $ips_smes_3

        ],

        // Kriteria Nilai Rating ips SMESTER 4
        [

          "nisn" => $nisn,
          "id_kriteria" => 33,
          "nilai" => $ips_smes_4

        ],

        // Kriteria Nilai Rating ips SMESTER 5
        [

          "nisn" => $nisn,
          "id_kriteria" => 34,
          "nilai" => $ips_smes_5

        ],

        // Kriteria Nilai Rating ips SMESTER 6
        [

          "nisn" => $nisn,
          "id_kriteria" => 35,
          "nilai" => $ips_smes_6

        ],

        // Kriteria Nilai Rating TES WAWANCARA
        [

          "nisn" => $nisn,
          "id_kriteria" => 36,
          "nilai" => $tes_wawancara

        ],

        // Kriteria Nilai Rating MINAT MURID
        [

          "nisn" => $nisn,
          "id_kriteria" => 37,
          "nilai" => $minat_murid

        ],

        // Kriteria Nilai Rating SARAN ORANG TUA
        [

          "nisn" => $nisn,
          "id_kriteria" => 38,
          "nilai" => $saran_orang_tua

        ]

      ];

      $this->Penilaian_model->EditData('tabel_penilaian_kriteria_murid', 'tabel_nilai_rating_kecocokan', $data, $kriteria);
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('penilaian');
    }
  }

  public function detail($id)
  {

    $data = [

      "judul_halaman" => "Halaman Detail Penilaian",
      "penilaian" => $this->Penilaian_model->LihatPenilaianMuridBerdasarkanId('tabel_penilaian_kriteria_murid', 'tabel_murid', $id)->row()

    ];

    $this->load->view('template/header', $data);
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    $this->load->view('penilaian/detail', $data);
    $this->load->view('template/footer');
  }

  // public function laporan($id)
  // {

  //   $data['penilaian'] = $this->Penilaian_model->LihatPenilaianMuridBerdasarkanId('tabel_penilaian_kriteria_murid', 'tabel_murid', $id)->row();

  //   $this->load->library('pdf_generator');

  //   $this->load->view('laporan/laporan_penilaian_murid', $data, FALSE);

  //   $paper_size = 'A4';
  //   $orientation = 'potrait';
  //   $html = $this->output->get_output();
  //   $this->dompdf->set_paper($paper_size, $orientation);

  //   $this->dompdf->load_html($html);
  //   $this->dompdf->set_option('isRemoteEnabled', true);
  //   $this->dompdf->render();
  //   $this->dompdf->stream('Laporan_penilaian_murid.pdf', ['attachement' => 0]);
  // }

  public function laporan()
  {

    $data['penilaian'] = $this->Penilaian_model->LihatPenilaianMurid('tabel_penilaian_kriteria_murid', 'tabel_murid')->result();

    $this->load->library('pdf_generator');

    $this->load->view('laporan/laporan_penilaian_murid', $data, FALSE);

    $paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->set_option('isRemoteEnabled', true);
    $this->dompdf->render();
    $this->dompdf->stream('Laporan_penilaian_murid.pdf', ['attachement' => 0]);
  }
}
