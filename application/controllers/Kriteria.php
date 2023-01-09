<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Kriteria_model');

	}

	public function index()
	{
		$data['judul_halaman'] = "Halaman Kriteria"; 
		$data['judul_tabel'] = "Tabel Data Kriteria";
		$data['kriteria'] = $this->Kriteria_model->ambildata('tabel_kriteria')->result(); 

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('kriteria/index', $data);
		$this->load->view('template/footer');
	}

	public function edit($id) 
	{

		$data = [

			"judul_halaman" => "Halaman Edit Kriteria",
			"judul_header" => "Form Edit Data Kriteria",
			"jenis" => ["benefit", "cost"],
			"kriteria" => $this->Kriteria_model->LihatKriteriaBerdasarkanId('tabel_kriteria', $id)->row()

		];

		$this->form_validation->set_rules('kriteria', 'Kriteria', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('bobot', 'Bobot', 'required', array(
			'required' => '%s harus diisi !'
		));

		if ( $this->form_validation->run() == FALSE ) {
		
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('kriteria/edit', $data);
			$this->load->view('template/footer');

		}else{

			$id = $this->input->post('id_kriteria');
			$kriteria = $this->input->post('kriteria');
			$jenis = $this->input->post('jenis');
			$bobot = $this->input->post('bobot');

			$data = [

				"id_kriteria" => $id,
				"kriteria" => $kriteria,
				"jenis" => $jenis,
				"bobot" => $bobot
				
			];

			$this->Kriteria_model->EditData('tabel_kriteria', $data);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('kriteria');

		}

	}

}