<?php

namespace App\Controllers;

class Photos extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/gallery/photos');
        echo view('templates/footer');
    }
}
