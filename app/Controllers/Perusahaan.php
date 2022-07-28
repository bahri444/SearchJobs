<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
    public function perusahaan()
    {
        $PerusahaanModel = new PerusahaanModel();
        $data['perusahaan']=$PerusahaanModel->getPerusahaan()->getResult();
        // $DataPerusahaan = $PerusahaanModel->findAll();
        // $data = [
        //     "perusahaan" => $DataPerusahaan,
        //     "title" => "Perusahaan",
        // ];
        // print_r($data);
        return view('perusahaan', $data);
    }

    public function simpan(){
        $PerusahaanModel=new PerusahaanModel();
        $data=array(
            
        );
    }
}
