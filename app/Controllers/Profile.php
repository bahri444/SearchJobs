<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PencakerModel;
use App\Models\LamaranModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pencakerModel = new PencakerModel();
        $this->lamaranModel = new LamaranModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $dataUsers = $this->userModel->findAll();
        $lmr = $this->lamaranModel->getlamaran()->getResultArray();
        $dataPencaker = $this->pencakerModel->getPencaker();
        $data = [
            'users' => $dataUsers,
            'pencaker_join' => $dataPencaker,
            'lamaran' => $lmr,
            'title' => 'Pencaker Profile'
        ];
        // dd($data);
        return view('/pencaker/profile', $data);
    }
}
