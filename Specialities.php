<?php

namespace App\Controllers;

class Specialities extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('specialities');
//        echo view('common/footer');
        
    }
}
