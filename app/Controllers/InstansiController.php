<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InstansiController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('role') != 'instansi') {
            echo 'akses di tolak';
            exit;
        }
    }
    public function index()
    {
        return view('/instansi/dashboard');
    }
}
