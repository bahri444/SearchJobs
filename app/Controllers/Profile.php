<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PencakerModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pencakerModel = new PencakerModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $dataUsers = $this->userModel->findAll();
        $dataPencaker = $this->pencakerModel->getPencaker();
        $data = [
            'users' => $dataUsers,
            'pencaker_join' => $dataPencaker,
            'title' => 'Pencaker Profile'
        ];
        // dd($data);
        return view('/pencaker/profile', $data);
    }
}
