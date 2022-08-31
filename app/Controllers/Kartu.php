<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;
use Dompdf\Dompdf;
use Dompdf\Options;

class Kartu extends BaseController
{
    public function index()
    {
        return view('pencaker/kartu');
    }
    public function download(){
        $dompdf = new Dompdf(array('enable_remote' => true));
            
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pencaker/kartu'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        return redirect()->to(base_url('pencaker/download'));
    }
}
