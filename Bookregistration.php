<?php

namespace App\Controllers;

use App\Models\BookingModel;
use \App\Models\BookregisterModel;

class Bookregistration extends BaseController
{

    public function index()
    {
        echo view ('bookreg');
    }
    public function index1()
    {
        $results = new BookregisterModel();
        $data['results'] = $results->findAll();

        //echo view('common/header');
        echo view('vbookreg', $data);
    }


    public function __construct(){
        helper(['form','url']);
 
     }

      public function index2($id)
    {
        $results = new BookregisterModel();
        $data['results'] = $results->where('id',$id)->findAll();
        
        echo view('vbookreg', $data);

    }

     public function store()
    {   

          $results = new BookregisterModel();


            $name = $this->request->getPost('name');
            $dob = $this->request->getPost('dob');
            $age = $this->request->getPost('age');
            $gender = $this->request->getPost('gender');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $address = $this->request->getPost('address');
            
                 
            $data = ['name'=>$name,'dob'=>$dob,'age'=>$age,'gender'=>$gender,'phone'=>$phone,'email'=>$email,'address'=>$address];
            $results->save($data);
            return redirect()->to(base_url('public/book'));
                               
    }


}
