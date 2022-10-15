<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokerModel; //import LokerModel
use App\Models\LamaranModel; //import LamaranModel
use Countable;

class InstansiController extends BaseController
{
    protected $lokerModel; //inisialisasi variable loker Model
    protected $lamaranModel; //inisialisasi Variable lamaran model

    public function __construct()
    {
        $this->lokerModel = new LokerModel(); //load data loker for count
        $this->lamaranModel = new LamaranModel(); //load data lamaran for count
        $this->session = \Config\Services::session();
        $this->session = \Config\Services::count();
        if (session()->get('role') != 'instansi') {
            echo 'akses di tolak';
            exit;
        }
    }
    public function index()
    {
        $loks = $this->lokerModel->countDtFilters();
        $lam = $this->lamaranModel->countDtFilters();
        $data = [
            'lok' => count($loks),
            'lm' => count($lam),
        ];
        // dd($data);
        return view('/instansi/dashboard', $data); //return data to view
    }
}
