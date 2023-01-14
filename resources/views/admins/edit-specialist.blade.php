@extends('layouts.main')
@section('contents')


         
    <div class="row justify-content-center my-3">
        <div class="col-md-6 col-lg-10 p-8">
            <div class="d-flex justify-content-center">
            
            </div>
            <h3 class="text-left mt-3">Edit Specialst</h3>
            <div class="card form-wrapper p-2">
            
            
          @foreach ($specialists as $specialist)
                    <h6 class="text mt-3">Information</h6>
                    
                    <div class="form-group my-2">
                    
                        <label for="employee_id">Employee ID Number: {{ $specialist->employee_id }}</label><span class="text-danger">
            
                    </div>
                       
                  
                <div class="row row-cols-1 row-cols-lg-3">
                
                    <div class="form-group col">
                        <label for="first_Name">First Name</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->first_name }}" type="text" name="first_name" id="firstname"  value="{{old('first_name')}}">
                       
                    </div>
                   
                    <div class="form-group col">
                        <label for="last_Name">Last Name</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->last_name }}" type="text" name="last_name" id="lastname"  value="{{old('last_name')}}">
                       
                    </div>
            
                </div>
                
                <div class="form-group my-2">
                        <label for="contact_number">Contact Number</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->contact_number }}" type="number" name="contact_number" id="contact_number"  value="{{old('contact_number')}}">
                        
                    </div>

                    <div class="form-group my-2">
                        <label for="email">Email Address</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->email }}" type="text" name="email" id="email"  value="{{old('email')}}">
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Position</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->position }}" type="text" name="email" id="email"  value="{{old('email')}}">
                        
                    </div>
                    
                  
                </div>
            
                <h6 class="text mt-3">Address</h6>
                    
                <div class="form-group my-2">
                        <label for="barangay">(Barangay)</label><span class="text-danger">*
                        <input class="form-control"value = "{{ $specialist->barangay }}" type="text" name="barangay" id="barangay"  value="{{old('barangay')}}">
                       
                    </div>
                    <div class="form-group my-2">
                        <label for="municipality">(Municipality/City)</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->municipality }}" type="text" name="municipality" id="municipality"  value="{{old('municipality')}}">
                        
                    </div>
                    <div class="form-group my-2">
                        <label for="province">(Province)</label><span class="text-danger">*
                        <input class="form-control" value = "{{ $specialist->province }}"  type="text" name="province" id="province"  value="{{old('province')}}">
                        
                    </div>
                   
                                  
                    <div class="d-grid my-2">
                        <button class="submit btn btn-primary">Save</button>
                    </div>
                
                </form>
            </div>
        </div>
        </div>
    </div>
  @endforeach
</div>

@endsection