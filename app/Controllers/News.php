<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/comunity/news/news');
        echo view('templates/footer');
    }
}
