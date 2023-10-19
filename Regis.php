<?php
namespace App\Models;
Use \CodeIgniter\Model;

class Regis extends Model
{
    protected $table = 'regis';
    protected $primarykey = 'id';
    

    protected $allowedFields = ['name','email','password','cpassword'];


    
}