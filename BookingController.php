<?php namespace App\Controllers;

use App\Models\BookingModel;
use \App\Models\BookregisterModel;

use CodeIgniter\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookingModel = new BookingModel();
        $bookingModel = $bookingModel->findAll();
        
        $data = ['bookingModel' =>$bookingModel];
        echo view('vbook', $data);

    }

    public function index1()
    {
        echo view('book');

    }


    public function submitBooking()
    {
        // Get the selected date and time slot from the form submission
        $dname = $this->request->getPost('dname');
        $date = $this->request->getPost('date');
        $timeSlot = $this->request->getPost('time_slot');

        // Check the database for existing bookings on the selected date and time slot
        $bookingModel = new BookingModel();
        $existingBooking = $bookingModel->where('date', $date)->where($timeSlot, 1)->first();

        // If a booking already exists, show an error message
        if (!empty($existingBooking)) {
            session()->setFlashdata('status_text','SORRY!');
                    return redirect()->to(base_url('public/book'))
                            ->with('status','THIS SLOT IS ALREADY BOOKED');
        }

        // Otherwise, create a new booking in the database
        $data = [
            'dname' =>$dname,
            'date' => $date,
            $timeSlot => 1
        ];

        $bookingModel->insert($data);
        return redirect()->to(base_url('public/bookreg'));


    }


}
