<?php

namespace App\Controllers;
use \App\Models\Contact;

class Contactus extends BaseController
{
    public function index()
    {
       echo view('common/header');
       echo view('contactus');
       echo view('common/footer');
    }
    
    public function __construct(){
        helper(['form','url']);
 
     }



    public function store()
    {        
        echo view('common/header');
        
        $inputs = $this->validate([
            'name' => [
                'label' => 'name',
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' =>'Please enter your name .',
                     'min_length' =>'Please enter a name with at least 10 characters.'
                ]
                ],
                'phone' => [
                    'label' => 'branch',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                    'required' => 'Please enter a phone number.',
                     'min_length' => 'Please enter a phone number with at least 10 characters.'
                    ]
                    ],
                'email' => [
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email',
                    'errors' => [
                    'required' =>'Please enter your e-mail address.',
                    'valid_email' =>'Please enter a valid e-mail address.'
                ]
                ],
                
                'message' => [
                    'label' => 'Message',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                    'required' => 'Please enter a message',
                     'min_length' => 'Please enter a subject with at least 10 characters.'
                    ]
                    ],
                



            ]);

            if(!$inputs){


                return view('contactus',[
                    'validation' =>$this->validator]);

            }
            else{

            
        $contactus = new Contact();
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'message' =>$this->request->getPost('message')];
        
        $contactus->save($data);
        session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to(base_url('public/contactus'))
                            ->with('status_icon', 'success')
                            ->with('status','Your response is received');
        }
    }
}