<?php

namespace App\Controllers;

use App\Models\AppointmentModel;

class AppointmentController extends BaseController
{
    public function book()
    {   
        
        $date = $this->request->getPost('date');
        $time = $this->request->getPost('time');
        // $day = $this->request->getPost('day');

        $appointmentModel = new AppointmentModel();
        $appointmentModel->save([
            'appointment_date' => $date,
            'appointment_time' => $time,
            // 'appointment_day' => $day,
        ]);

        // return redirect()->to('');
        return view('successfullBook');

    }



    



}



// public function viewSchedules()
    // {
    //     $appointmentModel = new \App\Models\AppointmentModel(); // adjust to your actual model
    //     $appointments = $appointmentModel->findAll(); // or use where() if filtering

    //     return view('viewSchedules', ['appointments' => $appointments]);
    // }
