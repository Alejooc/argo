<?php

namespace App\Controllers;

class Photos extends BaseController
{
    public function index()
    {
        echo view('pages/gallery/photos');
    }
}
