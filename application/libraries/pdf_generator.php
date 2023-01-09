<?php

use Dompdf\Dompdf;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pdf_generator
{

    public function __construct()
    {

        require_once APPPATH . 'third_party/vendor/autoload.php';

        $pdf = new Dompdf();

        $CI = &get_instance();
        $CI->dompdf = $pdf;
    }
}
