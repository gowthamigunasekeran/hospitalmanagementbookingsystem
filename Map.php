<?php

namespace App\Controllers;
use \App\Models\Contact;

class Map extends BaseController
{
    public function map()
{
    echo view('map_view');
}
}
