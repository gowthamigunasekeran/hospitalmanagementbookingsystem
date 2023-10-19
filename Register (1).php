<?php

namespace App\Controllers;

use \App\Models\Registerc;


class Register extends BaseController
{
    public function index()
    {
        
        echo  view('register');
    }
    public function __construct(){
        helper(['form','url']);
 
     }

     public function store()
    {
        
        $inputs = $this->validate([
            'name' => [
                'p' => 'name',
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' =>'Please enter your name .',
                     'min_length' =>'Please enter a name with at least 10 characters.'
                ]
                ],
                'date' => [
                    'p' => 'date',
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' =>'Please enter your date of birth',
                         'min_length' =>'Please enter a name with at least 5 characters.'
                    ]
                    ],
                'age' => [
                    'p' => 'branch',
                    'rules' => 'required|min_length[2]',
                    'errors' => [
                    'required' => 'Please enter a age.',
                     'min_length' => 'Please enter a age with at least  2 characters.'
                    ]
                    ],
                    'gender' => [
                        'p' => 'branch',
                        'rules' => 'required|min_length[1]',
                        'errors' => [
                        'required' => 'Please select a gender',
                         'min_length' => 'Please enter a gender with at least  1 characters.'
                        ]
                        ],
                'phone' => [
                    'p' => 'branch',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                    'required' => 'Please enter a phone number.',
                     'min_length' => 'Please enter a phone number with at least 10 characters.'
                    ]
                    ],
                'email' => [
                    'p' => 'E-mail',
                    'rules' => 'required|valid_email',
                    'errors' => [
                    'required' =>'Please enter your e-mail address.',
                    'valid_email' =>'Please enter a valid e-mail address.'
                ]
                ],
                
                'address' => [
                    'p' => 'Address',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                    'required' => 'Please enter a address',
                     'min_length' => 'Please enter a subject with at least 10 characters.'
                    ]
                    ],
                



            ]);

            if(!$inputs){
                return view('register',[
                    'validation' =>$this->validator]);
            }
            else{

            
        $register = new Registerc();
        
            $name = $this->request->getPost('name');
            $date = $this->request->getPost('date');
            $age = $this->request->getPost('age');
            $gender = $this->request->getPost('gender');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $address = $this->request->getPost('address');
           
         
            $mail = \Config\Services::email();
                    $mail->setFrom('keerthiraghu0104@gmail.com');
                    $mail->setTo($email);
                    $mail->setSubject('Your appoinment is confirmed');
                    $mail->setMessage($name);
                 
                    $data = ['name'=>$name,'date'=>$date,'age'=>$age,'gender'=>$gender,'phone'=>$phone,'email'=>$email,'address'=>$address];
                    $register->save($data);
        

                    if($mail->send()){
                        session()->setFlashdata('success','your message has been sent successfully.');
                      
                    }else{
                        session()->setFlashdata('error',' sorry your message could not be sent.');
                      

                    }
                   
                   
            session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to(base_url('public/register'))
                            ->with('status_icon', 'success')
                            ->with('status','YOUR APPOINMENT IS CONFIRMED');
                            
       }
}
}