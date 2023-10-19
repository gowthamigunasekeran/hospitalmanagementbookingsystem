<?php namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dname', 'date', 'time_slot_1', 'time_slot_2', 'time_slot_3', 'time_slot_4'];
}