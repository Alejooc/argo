<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/comunity/team/team');
        echo view('templates/footer');
    }
}
