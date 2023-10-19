<?php namespace App\Controllers;

use \App\Models\Regis;

use CodeIgniter\Controller;


class Usee extends BaseController
{
    public function index() 
    {
        return view('reg');
        
    }
    public function __construct(){
        helper(['form','url']);
 
     }
    public function reg()
    {
        
        $check= $this->validate([
            'name' => [
                'label' => 'name',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' =>'Please enter your name .',
                     'min_length' =>'Please enter a name with at least 3 characters.'
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
                
                'password' => [
                    'label' => 'password',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                    'required' => 'Please enter a password.',
                     'min_length' => 'Please enter a password with at least 3 characters.'
                    ]
                    ],
                    'cpassword' => [
                        'label' => 'cpassword',
                        'rules' => 'required|matches[password]',
                        'errors' => [
                        'required' => 'Please enter password again.',
                         'min_length' => 'Please enter a cpassword with at least 3 characters.'
                        ]
                        ],
                    
                



            ]);
       


    
        if(! $check)
        {
            return view('reg',['validation'=> $this->validator]);

        }
        else{
           
            


            $model = new Regis();
            $data = ['name'=> $this->request->getVar('name'),
                     'email'=> $this->request->getVar('email'),
                      'password'=> $this->request->getVar('password'),
                      'cpassword'=> $this->request->getVar('cpassword'),

        ];
       


           $model->insert($data);
           session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to('loggin')
                            ->with('status_icon', 'success')
                            ->with('status',' REGISTERED SUCCESSFULLY');
           
        }
    }
}

?>