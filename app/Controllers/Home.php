<?php

namespace App\Controllers;

class Home extends BaseController
{
    // default Controller
    // public function index()
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        return view('home/index');
    }
    public function tentang()
    {
        return view('home/tentang');
    }
}
