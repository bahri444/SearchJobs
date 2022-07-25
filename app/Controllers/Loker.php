<?php

namespace App\Controllers;

use App\Models\LokerModel;

class Loker extends BaseController
{
    public function loker()
    {
        $lokerModel = new LokerModel();
        $lokerData = $lokerModel->findAll();
        $data = [
            "loker" => $lokerData,
            "title" => "Loker",
        ];
        return view('loker', $data);
    }
}
