<?php

namespace App\Controllers;

use \App\Models\Regis;
use CodeIgniter\controller;


class Hoome extends BaseController
{
    public function index()
    { 
        echo view('common/adminnav');
        echo view('hoome');
        //return  view('hmp');
        //echo view('common/footer');
    }
}