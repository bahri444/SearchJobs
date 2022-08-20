<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokerModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->lokerModel = new LokerModel();
        if ($this->session->get('role') != 'admin') {
            echo 'akses di tolak';
            exit;
        }
    }
    public function index()
    {
        // $data['loker'] = $this->LokerModel->countLoker();
        // dd($data);
        return view('admin/dashboard');
    }
}
