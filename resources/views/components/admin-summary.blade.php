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
            <a href="{{route('patients.list')}}" class="stretched-link"></a>
        </div>

        <div class="card shadow">
            <div class="card-body d-flex justify-content-center align-items-end gap-1">
                <h2>{{$services}}</h2>
            </div>
            <div class="card-footer text-break">
                Number of Specialists
            </div>
            <a href="{{route('specialists.index')}}" class="stretched-link"></a>
        </div>

        <div class="card shadow">
            <div class="card-body d-flex justify-content-center align-items-end gap-1">
                <h2>{{$services}}</h2>
            </div>
            <div class="card-footer">
                Numbers of Services
            </div>
            <a href="{{route('services.index')}}" class="stretched-link"></a>
        </div>
    </div>
</div>
@endif