<?php

namespace App\Controllers;

use \App\Models\Regis;
use \App\Models\RegisterModel;
use \App\Models\BookappoinmentModel;
use CodeIgniter\controller;


class User extends BaseController
{
    public function index()
    {
        //echo view('hoome');
      return  view('loggin');
        //echo view('common/footer');
    }
    public function __construct(){
        helper(['form','url']);
 
     }
    public function login_action(){

        $check= $this->validate([
        
           
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

        ]);
        

    if(! $check)
    {
        return view('loggin',['validation'=> $this->validator]);

    }
    else{
       
        


        $model = new Regis();
        $data = [
                 'email'=> $this->request->getVar('email'),
                  'password'=> $this->request->getVar('password'),
                 

    ];
        $model = new Regis();
        $result = $model->where('email',$this->request->getVar('email'))->
        where('password',$this->request->getVar('password'))->first();

        $session = session();

        if($result)
        {
                $session->setFlashdata('loggin');
                $session->set('user', $result['name']);
               return view ('hoome');

        }
        else{
                $session->setFlashdata('loggin','LOGIN FAILED<br>(incorrect email or password)');
                return view('loggin');
        }
        }
    }

        public function hoome()
        {
            $session = session();
            if($session->has('user'))
            {
                return view('hoome');
            }
            else
            {
                //echo 'error';
                return view('loggin');
            }
        }

        public function vbookappointments()
        {   
            $results = new RegisterModel();
            //$data['results'] = $results->findAll();

            $db = \Config\Database::connect();
            $builder = $db->table('doc_appointmentss');
            $builder->join('hospitalregiss', 'doc_appointmentss.d_id = hospitalregiss.d_id');
            $builder->select('doc_appointmentss.d_id,doc_appointmentss.dname,doc_appointmentss.date,doc_appointmentss.availability,hospitalregiss.pname,
            hospitalregiss.d_id');

            $results = $builder->get()->getResult();
            $data['results'] = $results;
            //print_r('$results');
            

            $bookappointments = new BookappoinmentModel();

            if ($this->request->getGet('q')) {
               $q=$this->request->getGet('q');
               $data['bookappointments'] = $bookappointments->where('dname', $q)->findAll();
            }
            else{
                $data['results'] = $results;
            }
            
            $session = session();
            if($session->has('user'))
            {
                //echo view('hoome');
                return view('vbookappointments', $data);

            }
            else
            {
            return view('loggin');
            }
        }

         public function viewreg()
        {
            
            $results = new RegisterModel();
            $data['results'] = $results->findAll();

            $db = \Config\Database::connect();
            $builder = $db->table('hospitalregiss');
            $builder->join('doc_appointmentss', 'hospitalregiss.d_id = doc_appointmentss.d_id');
            $builder->select('hospitalregiss.d_id,hospitalregiss.pname,hospitalregiss.dob,hospitalregiss.age,hospitalregiss.gender,hospitalregiss.email,doc_appointmentss.dname,hospitalregiss.phone,doc_appointmentss.d_id');

            $results = $builder->get()->getResult();
            $data['results'] = $results;
            

            

            $session = session();
            if($session->has('user'))
            {
                //echo view('hoome');
                return view('viewreg', $data);
            }
            else
            {
            return view('loggin');
            }
        }

         public function viewreg1($id)
        {
            
            $results = new RegisterModel();
            $data['results'] = $results->where('d_id',$id)->findAll();


            $session = session();
            if($session->has('user'))
            {
                //echo view('hoome');
                return view('viewreg1', $data);
            }
            else
            {
            return view('loggin');
            }
        }

        public function delete($id)
        {
            
            $bookappointments = new BookappoinmentModel();
            $bookappointments->delete($id);
            session()->setFlashdata('status_text','THANK YOU!');
                    return redirect()->to(base_url('public/User/vbookappointments'))
                            ->with('status_icon', 'success')
                            ->with('status','DELETED SUCCESSFULLY');
        
            
            if ($this->request->getGet('q')) {
               $q=$this->request->getGet('q');
               $data['bookappointments'] = $bookappointments->like('dname', $q)->findAll();    
            }
            else{
                $data['bookappointments'] = $bookappointments->findAll();
            }
        

            $session = session();
            if($session->has('user'))
            {
                //echo view('hoome');
                return view('vbookappointments', $data);

            }
            else
            {
            return view('loggin');
            }

        }


        public function logout(){
            
            $session = session();
            $session->destroy();
            return view('loggin');

        }
    }

    