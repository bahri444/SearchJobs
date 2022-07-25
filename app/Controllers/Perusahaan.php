<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
    public function perusahaan()
    {
        $PerusahaanModel = new PerusahaanModel();
        $DataPerusahaan = $PerusahaanModel->findAll();
        $data = [
            "perusahaan" => $DataPerusahaan,
            "title" => "Perusahaan",
        ];
        // print_r($data);
        return view('perusahaan', $data);
    }
}
