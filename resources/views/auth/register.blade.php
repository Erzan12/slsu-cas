@extends('layouts.app')
@section('content')
<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="col-md-6 col-lg-10 p-8">
            <div class="d-flex justify-content-center">
                <div class="register-image">
                    <img src="https://user.southernleyte.org.ph/files/slsu-logo.png" alt="">
                </div>
            </div>
            <h3 class="text-center mt-3">Register Patient</h3>
            <div class="card form-wrapper">
                <form action="{{route('authenticate')}}" method="post" class="p-3 mt-3 gap-3">
                    @csrf
                   
    
                    @error('error')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{$message}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                <div class="d-flex gap-2 w-100">
                    <div class="form-group my-2">
                        <label for="First Name">First Name</label><span class="text-danger">*
                        <input class="form-control" type="text" name="firstname" id="firstname">
                    </div>
                    <div class="form-group my-2">
                        <label for="Middle Name">Middle Name</label>
                        <input class="form-control" type="text" name="middlename" id="middlename">
                    </div>
                    <div class="form-group my-2">
                        <label for="Last Name">Last Name</label><span class="text-danger">*
                        <input class="form-control" type="text" name="lastname" id="lastname">
                    </div>
                </div>

                    <div class="form-group my-2">
                        <label for="email">Email Address</label><span class="text-danger">*
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="form-group my-2">
                  <label for="gender"
                    >Gender <span class="text-danger">*</span></label
                  >
                  <select
                    name="gender"
                    id="gender"
                    class="form-select"
                  >
                    <option value="">Select one</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
            </div>
            <div>
                    
                <div class="form-group my-2">
                        <label for="address">(Barangay)</label><span class="text-danger">*
                        <input class="form-control" type="text" name="address" id="barangay">
                    </div>
                    <div class="form-group my-2">
                        <label for="address">(Municipality/City)</label><span class="text-danger">*
                        <input class="form-control" type="text" name="address" id="municipality">
                    </div>
                    <div class="form-group my-2">
                        <label for="address">(Province)</label><span class="text-danger">*
                        <input class="form-control" type="text" name="address" id="province">
                    </div>
                    
                    
                    <div>
                    <label for="address">Avatar:</label>
                    </div>
                    <div>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    </div>
                    
                </form>
            </div>
            <div class="d-grid my-2">
                        <button class="submit btn btn-primary">Register</button>
                    </div>
        </div>
        </div>
    </div>
</div>
@endsection