<?php

namespace App\Controllers;

use \App\Models\BookappoinmentModel;
use \App\Models\RegisterModel;
use \App\Models\Regis;


class Bookappointments extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('bookappointments');
        //echo view('common/footer');
    }

    public function index1()
    {   
        $results = new BookappoinmentModel();
        $data['results'] = $results->findAll();
        //echo view('common/header');
        
        echo view('bookappointments', $data);
        
        //echo view('common/footer');
    }

    public function create()
    {
        //echo view('common/header');
        return view('bookappointments');

    }

     public function __construct(){
        helper(['form','url']);
 
     }


    public function store()
    {
        echo view('common/header');


          $inputs = $this->validate([
            'date' => [
                    'p' => 'date',
                    'rules' => 'required',
                    'errors' => [
                        'required' =>'Please select a DATE',
                    ]
                    ],
                    'availability' => [
                        'rules' => 'required',
                        'errors' => [
                        'required' => 'Please select a SLOT'
                        ]
                        ]   
                ]);
          if(!$inputs){

                $results = new BookappoinmentModel();
                $data['results'] = $results->findAll();
                return view('bookappointments',['validation' =>$this->validator]);

            }
            else{
                
        $results = new BookappoinmentModel();

        $data = ['dname' => $this->request->getPost('dname'),
        'date' => $this->request->getPost('date'),
        'availability' => $this->request->getPost('availability')];

        $results->save($data);
        return redirect()->to(base_url('public/registration'));
    }
    }

 public function getAvailableTimeSlots()
    {
        // Get the selected date from the AJAX request
        $date = $this->request->getPost('date');

        // Check the database for bookings on the selected date
        $bookingModel = new BookingModel();
        $bookings = $bookingModel->where('date', $date)->findAll();

        // Determine which time slots are available
        $availableTimeSlots = ['time_slot_1', 'time_slot_2', 'time_slot_3', 'time_slot_4'];

        foreach ($bookings as $booking) {
            if (!empty($booking['time_slot_1'])) {
                unset($availableTimeSlots[array_search('time_slot_1', $availableTimeSlots)]);
            }

            if (!empty($booking['time_slot_2'])) {
                unset($availableTimeSlots[array_search('time_slot_2', $availableTimeSlots)]);
            }

            if (!empty($booking['time_slot_3'])) {
                unset($availableTimeSlots[array_search('time_slot_3', $availableTimeSlots)]);
            }

            if (!empty($booking['time_slot_4'])) {
                unset($availableTimeSlots[array_search('time_slot_4', $availableTimeSlots)]);
            }
        }

        // Return the available time slots as a JSON response
        return $this->response->setJSON($availableTimeSlots);
    }

    public function submitBooking()
    {
        // Get the selected date and time slot from the form submission
        $date = $this->request->getPost('date');
        $timeSlot = $this->request->getPost('time_slot');

        // Check the database for existing bookings on the selected date and time slot
        $bookingModel = new BookingModel();
        $existingBooking = $bookingModel->where('date', $date)->where($timeSlot, 1)->first();

        // If a booking already exists, show an error message
        if (!empty($existingBooking)) {
            echo 'Sorry, this time slot is already booked. Please select a different time slot.';
            return;
        }

        // Otherwise, create a new booking in the database
        $data = [
            'date' => $date,
            $timeSlot => 1
        ];

        $bookingModel->insert($data);

        echo 'Booking confirmed!';
    }

}
