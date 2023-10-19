<?php
namespace App\Models;
Use \CodeIgniter\Model;

class Registerc extends Model
{
    protected $table = 'hospitalregis';
    protected $primarykey = 'id';
    

    protected $allowedFields = ['name','date','age','gender','phone','email','address'];


    
}
?>