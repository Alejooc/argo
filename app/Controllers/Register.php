<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $configF = config('App');
        $data['title']= ucfirst($configF->hotelName);

        //echo view('templates/header',$data);
        echo view('pages/register',$data);
        //echo view('templates/footer',$data);
    }
}
