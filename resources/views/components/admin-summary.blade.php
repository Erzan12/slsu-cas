@if(auth()->user()->account_type == 1)
<div>
    <h2 class="text-center my-2">SLSU - CAS Summary</h2>
    <div class="d-flex gap-4 justify-content-center mt-4">
        <div class="card shadow">
            <div class="card-body d-flex justify-content-center align-items-end gap-1">
                <h2>{{$patients}}</h2>
            </div>
            <div class="card-footer">
                Number of Patients
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body d-flex justify-content-center align-items-end gap-1">
                <h2>{{$pendingAppointments}}</h2>
                @if($appointments > 0 )
                    <h6>/ {{$appointments}}</h6>
                @endif
            </div>
            <div class="card-footer text-break">
                Number of Pending  Appointments
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body d-flex justify-content-center align-items-end gap-1">
                <h2>{{$services}}</h2>
            </div>
            <div class="card-footer">
                Numbers of Services
            </div>
        </div>
    </div>
</div>
@endif