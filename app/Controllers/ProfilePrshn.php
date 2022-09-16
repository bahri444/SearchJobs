<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PerusahaanModel;
use App\Models\UserModel;

class ProfilePrshn extends BaseController
{
    public function __construct()
    {
        $this->perusahaanModel = new PerusahaanModel();
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $dataUsers = $this->userModel->findAll();
        $dataPrs = $this->perusahaanModel->getPerusahaan();
        session();
        $data = [
            'user' => $dataUsers,
            'join_prs' => $dataPrs,
            'title' => 'Profile Perusahaan'
        ];
        // dd($data);

        return view('/instansi/profilePrshn', $data);
    }
}
