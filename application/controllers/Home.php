<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}


	public function index()
	{
		$data = [
			"judul_halaman"	=> "Halaman Home",
			"jumlah_admin" => $this->Home_model->lihat_jumlah_admin('admin'),
			"jumlah_murid" => $this->Home_model->lihat_jumlah_murid('tabel_murid'),
			"jumlah_kriteria" => $this->Home_model->lihat_jumlah_kriteria('tabel_kriteria')
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
	}
}
