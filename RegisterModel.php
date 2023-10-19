<?php
namespace App\Models;
Use \CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'hospitalregiss';
    protected $primarykey = 'id';

    protected $allowedFields = ['id','pname','dob','age','gender','phone','email','address'];
    
}