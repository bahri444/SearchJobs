<?php

namespace App\Controllers;

use App\Controllers\LokerModel;

class Dashboard extends BaseController
{
    // public function __construct()
    // {
    //     $this->lokerModel = new LokerModel();
    // }

    public function dashboard()
    {
        // $Data1 = $this->lokerModel->getLoker();
        return view('dashboard');
    }
}
