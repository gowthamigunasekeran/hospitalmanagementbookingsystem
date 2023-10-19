<?php
namespace App\Models;
Use \CodeIgniter\Model;

class BookregisterModel extends Model
{
    protected $table = 'hospitalregis';
    protected $primarykey = 'id';

    protected $allowedFields = ['name','dob','age','gender','phone','email','address'];
    
}