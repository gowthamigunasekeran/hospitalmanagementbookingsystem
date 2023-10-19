<?php
namespace App\Models;
Use \CodeIgniter\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primarykey = 'id';
    

    protected $allowedFields = ['name','phone','email','message'];


    
}