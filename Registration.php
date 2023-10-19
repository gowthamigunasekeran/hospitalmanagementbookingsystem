<?php

namespace App\Controllers;

use \App\Models\BookappoinmentModel;
use \App\Models\RegisterModel;

class Registration extends BaseController
{
    public function index()
    {
        $results = new RegisterModel();
        $data['results'] = $results->findAll();

        //echo view('common/header');
        echo view('results', $data);
    }


    public function create()
    {
        $bookappointments = new BookappoinmentModel();
        $data['bookappointments'] = $bookappointments->findAll();
        //echo view('common/header');
        return view('results', $data);

    }

    public function __construct(){
        helper(['form','url']);
 
     }

     public function store()
    {   

        $inputs = $this->validate([
            'pname' => [
                'p' => 'pname',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' =>'Please enter your name .',
                     'min_length' =>'Please enter a name with at least 3 characters.'
                ]
                ],
                'dob' => [
                    'p' => 'dob',
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
                $results = new BookappoinmentModel();
                $data['results'] = $results->findAll();
                return view('results',['validation' =>$this->validator]);
            }
            else{


        $results = new RegisterModel();


            $d_id = $this->request->getPost('d_id');
            $pname = $this->request->getPost('pname');
            $dob = $this->request->getPost('dob');
            $age = $this->request->getPost('age');
            $gender = $this->request->getPost('gender');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $address = $this->request->getPost('address');
            
            $message = "Dear," .$pname. " Age: " .$age;
            $message .= "\r\nWe hope this email finds you well. This is a message to inform you that your appoinment is booked.\r\n"; 
            $message .= "Thank you for your attention.\r\n";
            $message .= "Best regards,\r\n";
            $message .= "BEST HOSPITAL team." .$d_id;



            $mail = \Config\Services::email();
                    $mail->setFrom('franklinceraya30@gmail.com');
                    $mail->setTo($email);
                    $mail->setSubject('Your appoinment is confirmed');
                    $mail->setMessage($message);

                 
                    $data = ['d_id'=>$d_id,'pname'=>$pname,'dob'=>$dob,'age'=>$age,'gender'=>$gender,'phone'=>$phone,'email'=>$email,'address'=>$address];
                    $results->save($data);
                    
                    if($mail->send()){
                        session()->setFlashdata('success','your message has been sent successfully.');
                      
                    }else{
                        session()->setFlashdata('error',' sorry your message could not be sent.');
                      

                    }
        
            session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to(base_url('public/home'))
                            ->with('status_icon', 'success')
                            ->with('status','YOUR APPOINMENT IS CONFIRMED');
        
    }
}


}
