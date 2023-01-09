<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function laporan_murid()
    {

        $this->load->library('dompdf_gen');

        $data = [
            "judul_halaman" => "Halaman Laporan Murid"
        ];

        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_murid');

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan_murid.pdf', ['attachement' => 0]);
    }

    public function laporan_penilaian_murid()
    {

        $this->load->library('dompdf_gen');

        $data = [
            "judul_halaman" => "Halaman Laporan Murid"
        ];

        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_penilaian_murid');

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan_penilaian_murid.pdf', ['attachement' => 0]);
    }

    public function laporan_hasil()
    {
        $data = [
            "judul_halaman" => "Halaman Laporan Hasil"
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('laporan/laporan_hasil');
        $this->load->view('template/footer');
    }
}

/* End of file Laporan.php */