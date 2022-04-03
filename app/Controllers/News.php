<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        echo view('pages/comunity/news/news');
    }
}
