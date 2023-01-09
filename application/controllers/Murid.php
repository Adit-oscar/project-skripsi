<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Murid extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Murid_model');
	}

	public function index()
	{

		$data = [

			"judul_halaman" => "Halaman Murid",
			"judul_tabel" => "Tabel Data Murid",
			"murid" => $this->Murid_model->ambildata('tabel_murid')->result()

		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('murid/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{

		$data = [

			"judul_halaman" => "Halaman Tambah Murid",
			"judul_header" => "Form Tambah Data Murid",
			"kelamin" => ['L', 'P']

		];

		$this->form_validation->set_rules('nisn', 'Nisn', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('asalsekolah', 'Asal Sekolah', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('hp', 'No Ponsel', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required', array(
			'required' => '%s harus diisi !'
		));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('murid/tambah', $data);
			$this->load->view('template/footer');
		} else {

			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$agama = $this->input->post('agama');
			$alamat = $this->input->post('alamat');
			$asalsekolah = $this->input->post('asalsekolah');
			$hp = $this->input->post('hp');
			$kelamin = $this->input->post('kelamin');

			$data = [

				"nisn" => $nisn,
				"nama" => $nama,
				"ttl" => $ttl,
				"agama" => $agama,
				"alamat" => $alamat,
				"asalsekolah" => $asalsekolah,
				"hp" => $hp,
				"kelamin" => $kelamin

			];

			$this->Murid_model->TambahData('tabel_murid', $data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('murid/tambah');
		}
	}

	public function edit($id)
	{

		$data = [

			"judul_halaman" => "Halaman Edit Murid",
			"judul_header" => "Form Edit Data Murid",
			"kelamin" => ['L', 'P'],
			"murid" => $this->Murid_model->LihatData('tabel_murid', $id)->row()

		];

		$this->form_validation->set_rules('nisn', 'Nisn', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('asalsekolah', 'Asal Sekolah', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('hp', 'No Ponsel', 'required', array(
			'required' => '%s harus diisi !'
		));
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required', array(
			'required' => '%s harus diisi !'
		));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('murid/edit', $data);
			$this->load->view('template/footer');
		} else {

			$id = $this->input->post('id_siswa');
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$agama = $this->input->post('agama');
			$alamat = $this->input->post('alamat');
			$asalsekolah = $this->input->post('asalsekolah');
			$hp = $this->input->post('hp');
			$kelamin = $this->input->post('kelamin');

			$data = [

				"id_siswa" => $id,
				"nisn" => $nisn,
				"nama" => $nama,
				"ttl" => $ttl,
				"agama" => $agama,
				"alamat" => $alamat,
				"asalsekolah" => $asalsekolah,
				"hp" => $hp,
				"kelamin" => $kelamin

			];

			$this->Murid_model->EditData('tabel_murid', $data);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('murid');
		}
	}

	public function hapus($id)
	{

		$this->Murid_model->HapusData('tabel_murid', $id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('murid');
	}

	public function laporan()
	{

		$data['murid'] = $this->Murid_model->ambildata('tabel_murid')->result();

		$this->load->library('pdf_generator');

		$this->load->view('laporan/laporan_murid', $data, FALSE);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->set_option('isRemoteEnabled', true);
		$this->dompdf->render();
		$this->dompdf->stream('Laporan_murid.pdf', ['attachement' => 0]);
	}
}
