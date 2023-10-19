<?php

namespace App\Controllers;

use \App\Models\BookappoinmentModel;

class Vbookappointments extends BaseController
{
    public function index()
    {   
        $results = new BookappoinmentModel();
        if ($this->request->getGet('q')) {
            $q=$this->request->getGet('q');
            $data['results'] = $results->like('dname', $q)->findAll();    
        }
        else{
            $data['results'] = $results->findAll();
        }

        //echo view('common/header');
     //   echo view('common/adminnav');
        echo view('vbookappointments', $data);
        
        //echo view('common/footer');
    }

    public function create()
    {
        //echo view('common/header');
        return view('bookappointments');

    }


    public function store()
    {
        $results = new BookappoinmentModel();

        $data = ['dname' => $this->request->getPost('dname'),
        'date' => $this->request->getPost('date'),
        'availability' => $this->request->getPost('availability')];

        $results->save($data);
        return redirect()->to(base_url('public/registration'))->with('status', 'student added Successfully');
    }

    public function delete($id)
    {
        $results = new BookappoinmentModel();
        
        $results->delete($id);
        //return redirect()->to(base_url('public/student'))->with('status','Student deleted Successfully');        
    }
}
