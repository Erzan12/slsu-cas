<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function create($id)
    {
        return view('patients.ratings.create', compact('id'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rate' => 'required|min:1|max:5',
        ]);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }

        $appointment = Appointment::find($request->id);
        $appointment->update([
            'status' => 3
        ]);

        Rating::create([
            'appointment_id' => $request->id,
            'rate' => $request->rate,
            'description' => $request->description,
        ]);

        return redirect(route('appointments.index'));
    }
}
