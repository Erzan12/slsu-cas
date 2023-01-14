<div class="sidebar-wrapper">
    <div class="position-relative d-flex justify-content-center">
        <div class="position-absolute sidebar-image-wrapper ">
            <img src="https://trace.southernleyte.org.ph/assets/img/slsu-logo.png" alt="">
            <h4 class="text-light">SLSU - CAS</h4>
        </div>
    </div>

    <nav class="sidebar-nav-wrapper">
        <a href="{{route('dashboard')}}" class="side-link @if(request()->routeIs('dashboard')) link-active @endif">Home</a>

        {{-- Add inside all the link related for patient --}}
        @if(auth()->user()->account_type == 3)
            <a href="{{route('appointment.patient-history')}}" class="side-link @if(request()->routeIs('appointment.patient-history')) link-active @endif">Appointment History</a>
        @endif

        {{-- Add inside all the link related for admin --}}
        @if(auth()->user()->account_type == 1)
            <a href="{{route('specialists.index')}}" class="side-link @if(request()->routeIs('specialists.*')) link-active @endif">Manage Specialist</a>
        @endif

        {{-- Add inside all the link related for speciaslit --}}
        @if(auth()->user()->account_type == 2)
            <a href="{{route('schedules.index')}}" class="side-link @if(request()->routeIs('schedules.*')) link-active @endif">My Schedules</a>
        @endif
    </nav>
</div>