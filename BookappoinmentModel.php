<?php
namespace App\Models;  

use  \CodeIgniter\Model;

class BookappoinmentModel extends Model
{
	protected $table = 'doc_appointmentss';
	protected $primaryKey = 'd_id';

	protected $allowedFields = ['dname', 'date', 'availability'];

	public function blockTimeslot($id)
    {
        $data = [
            'availability' => 0 // set the availability status to 0 to mark the timeslot as blocked
        ];

        $this->where('d_id', $id)->update($data);
    }

}

