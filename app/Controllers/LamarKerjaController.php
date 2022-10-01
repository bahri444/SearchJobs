<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\LamaranModel;
use App\Models\LokerModel;
use App\Models\PerusahaanModel;
use App\Models\PencakerModel;

class LamarKerjaController extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->lamaranModel = new LamaranModel();
        // $this->lokerModel = new LokerModel();
        // $this->perusahaanModel = new PerusahaanModel();
        // $this->pencakerModel = new PencakerModel();
    }

    public function index()
    {
        $dtUser = $this->userModel->findAll();
        // $dtlkr = $this->lokerKodel->findAll();
        // $dtprs = $this->perusahaanModel->findAll();
        // $dtpnckr = $this->pencakerModel->findAll();
        $dtlmr = $this->lamaranModel->getlamaran()->getResult();
        $data = [
            // 'users' => $dtlkr,
            // 'users' => $dtprs,
            // 'users' => $dtpnckr,
            'users' => $dtUser,
            'lamarans' => $dtlmr,
            'title' => 'Lamar Kerjaan'
        ];
        // dd($data);
        return view('/pencaker/lamarKerja', $data);
    }
    public function tambah()
    {
        return redirect()->to('');
    }
}
