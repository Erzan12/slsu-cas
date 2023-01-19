@extends('layouts.main')
@section('contents')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="card shadow p-3 col-lg-6">
            <h4>Update Schedule</h4>
            <form action="{{route('schedules.update', ['schedule' => $schedule->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group my-2">
                <label for="service_id">Service Type</label>
                    <select name="service_id" id="service_id" class="form-select my-2">
                        <option value="" selected>Please select one</option>
                        @foreach ($services as $service)
                            <option value="{{$service->id}}" @selected(old('service_id') ?? $schedule->service_id == $service->id)>{{$service->name}}</option>    
                        @endforeach
                    </select>
                    @error('service_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group my-2 d-flex gap-2">
                    <div class="group-item">
                        <label for="time_start">Time Start</label>
                        <input type="time" name="time_start" id="time_start" class="form-control my-2" value="{{$schedule->time_start ?? old('time_start')}}">
                        @error('time_start')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="group-item">
                        <label for="time_end">Time End</label>
                        <input type="time" name="time_end" id="time_end" class="form-control my-2" value="{{$schedule->time_end ?? old('time_end')}}">
                        @error('time_end')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group my-2">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control my-2" value="{{$schedule->date ?? old('date')}}">
                    @error('date')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const today = new Date().toISOString().split("T")[0]
    const datepicker = document.getElementById('date');
    datepicker.min =today
</script>
@endsection