<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $title="Home";
        echo view('pages/user/dashboard',compact('title'));
    }
}
