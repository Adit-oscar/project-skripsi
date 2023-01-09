<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{

		$data = [

			"judul_halaman" => "Halaman Admin",
			"judul_tabel" => "Tabel Data Admin",
			"admin" => $this->Admin_model->ambildata('admin')->result()

		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{

		$data = [

			"judul_halaman" => "Halaman Tambah Admin",
			"judul_header" => "Form Tambah Admin"

		];

		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s harus diisi !'
		));

		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s harus diisi !'
		));

		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s harus diisi !'
		));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('admin/tambah', $data);
			$this->load->view('template/footer');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');

			$data = [

				"username" => $username,
				"password" => $password,
				"nama" => $nama

			];

			$this->Admin_model->TambahData('admin', $data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin');
		}
	}

	public function edit($id)
	{

		$data = [

			"judul_halaman" => "Halaman Edit Admin",
			"judul_header" => "Form Edit Admin",
			"admin" => $this->Admin_model->LihatData('admin', $id)->row()

		];

		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s harus diisi !'
		));

		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s harus diisi !'
		));

		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s harus diisi !'
		));

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('admin/edit', $data);
			$this->load->view('template/footer');
		} else {

			$data = [

				"id_admin" => $this->input->post('id_admin'),
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password'),
				"nama" => $this->input->post('nama')

			];

			$this->Admin_model->EditData('admin', $data);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin');
		}
	}

	public function hapus($id)
	{

		$this->Admin_model->HapusData($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	}
}
