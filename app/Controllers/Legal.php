<?php

namespace App\Controllers;

class Legal extends BaseController
{
    public function index()
    {
        echo view('pages/comunity/legal/terms');
        echo view('templates/footer');
    }
    public function privacy()
    {
        echo view('pages/comunity/legal/privacy');
        echo view('templates/footer');
    }
}
