<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/user/dashboard');
        echo view('templates/footer');
    }
}
