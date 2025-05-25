<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/heroSection');
        echo view('front/footer');
    }
}
