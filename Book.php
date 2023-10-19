<?php namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('book');

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
