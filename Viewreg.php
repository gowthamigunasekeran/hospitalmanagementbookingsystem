<?php

namespace App\Controllers;

use \App\Models\RegisterModel;
use \App\Models\BookappoinmentModel;
use \App\Models\Regis;


class Viewreg extends BaseController
{
    public function index()
    {
        $registration = new RegisterModel();
        $data['registration'] = $registration->findAll();
        echo view('common/adminnav');
        //echo view('common/header');
        echo view('viewreg', $data);
    }

    
    public function index1($id)
    {
        $registration = new RegisterModel(); 
        $data['registration'] = $registration->where('d_id',$d_id)->findAll();

        //echo view('common/header');
        echo view('viewreg', $data);
        
    }

    public function create()
    {
        $bookappointments = new BookappoinmentModel();
        $data['bookappointments'] = $bookappointments->findAll();
        //echo view('common/header');
        return view('registration', $data);

    }

    public function __construct(){
        helper(['form','url']);
 
     }

     public function store()
    {
        
        $inputs = $this->validate([
            'pname' => [
                'p' => 'pname',
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' =>'Please enter your name .',
                     'min_length' =>'Please enter a name with at least 10 characters.'
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
                $bookappointments = new BookappoinmentModel();
        $data['bookappointments'] = $bookappointments->findAll();
                return view('registration',[
                    'validation' =>$this->validator]);
            }
            else{

            
        $registration = new RegisterModel();
        $data = [
            'dname' => $this->request->getPost('dname'),
            'pname' => $this->request->getPost('pname'),
            'dob' => $this->request->getPost('dob'),
            'age' => $this->request->getPost('age'),
            'gender' => $this->request->getPost('gender'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'address' =>$this->request->getPost('address')];
        
            $registration->save($data);
            session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to(base_url('public/home'))
                            ->with('status_icon', 'success')
                            ->with('status','YOUR APPOINMENT IS CONFIRMED');
        
    }
}

public function code()
        {
            if (isset($_POST['checking_viewbtn'])) {
    
                $s_id = $_POST['student_id'];
                echo $return = $s_id;
            }
            else
            {
            return view('loggin');
            }
        }
}
