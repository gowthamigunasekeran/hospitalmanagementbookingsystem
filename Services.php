<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        echo view('common/header');
        //echo view('common/header1');
        echo view('laboratory');
        echo view('common/footer');
    }

    public function index1()
    {
        echo view('common/header');
        //echo view('common/header1');
        echo view('xray');
        echo view('common/footer');
    }
    public function index2()
    {
        echo view('common/header');
        //echo view('common/header1');
        echo view('master');
        echo view('common/footer');
    }
    public function index3()
    {
        echo view('common/header');
        //echo view('common/header1');
        echo view('physio');
        echo view('common/footer');
    }


}
