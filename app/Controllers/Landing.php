<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        $data['title']= ucfirst('a');

        //echo view('templates/header',$data);
        echo view('pages/landing');
        echo view('templates/footer',$data);
    }
}
