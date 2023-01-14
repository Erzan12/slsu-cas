<?php

namespace App\View\Components;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\View\Component;

class AdminSummary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $patients = Patient::count();
        $pendingAppointments = Appointment::where('status', 0)->count();
        $appointments = Appointment::count();
        $services = Service::count();
        return view('components.admin-summary', compact('patients', 'pendingAppointments', 'appointments', 'services'));
    }
}
