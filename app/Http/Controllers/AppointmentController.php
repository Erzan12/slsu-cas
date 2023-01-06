<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function patientHistory()
    {
        return view('patients.appointment-history');
    }
}
