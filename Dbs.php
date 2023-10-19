<?php

namespace App\Controllers;

use \App\Models\BookappoinmentModel;
//use \App\Models\RegisterModel;



class Dbs extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $model = new BookappoinmentModel($db);

        echo '<pre>';
        print_r($model->getPosts());
        echo '<pre>';        
    }
} 