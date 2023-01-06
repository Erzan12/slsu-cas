<div class="sidebar-wrapper">
    <div class="position-relative d-flex justify-content-center">
        <div class="position-absolute sidebar-image-wrapper ">
            <img src="https://trace.southernleyte.org.ph/assets/img/slsu-logo.png" alt="">
            <h4 class="text-light">SLSU - CAS</h4>
        </div>
    </div>

    <nav class="sidebar-nav-wrapper">
        <a href="{{route('dashboard')}}" class="side-link @if(request()->routeIs('dashboard')) link-active @endif">Home</a>
        <a href="{{route('appointment.patient-history')}}" class="side-link @if(request()->routeIs('appointment.patient-history')) link-active @endif">Appointment History</a>
        <a href="#" class="side-link">Home</a>
    </nav>
</div>