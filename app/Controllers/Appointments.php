<?php

namespace App\Controllers;

use App\Models\AppointmentModel; // <-- Add this line to import the AppointmentModel

class Appointments extends BaseController
{
    public function make()
    {
        return view('makeAppointment'); // view file: app/Views/make_appointment.php
    }

    public function viewSchedules()
    {
        // Fetch all appointments from the database
        $appointmentModel = new AppointmentModel();
        $appointments = $appointmentModel->findAll(); // Fetch all appointments

        // Pass the appointments data to the view
        return view('viewSchedules', ['appointments' => $appointments]);
    }
}
