<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\PencakerModel;
use App\Models\UserModel;

class Kartu extends BaseController
{
    public function __construct()
    {
        $this->pnckrModel = new PencakerModel();
        $this->userMod = new UserModel();
    }
    public function index()
    {
        $dt = $this->pnckrModel->getPencaker();
        // $dt2 = $this->userMod->getResult->getUser();
        $data = [
            'title' => 'cetak kartu',
            'pnckr' => $dt,
            // 'user' => $dt2
        ];
        // dd($data);
        return view('pencaker/kartu', $data);
    }
}
