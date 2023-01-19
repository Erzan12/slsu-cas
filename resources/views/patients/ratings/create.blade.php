@extends('layouts.main')
@section('contents')

<div class="container">
    <div class="row justify-content-center my-4">
        <h4 class="text-center">Rate your appointment</h4>
        <div class="card shadow p-3 col-lg-4">
            <form action="{{route('ratings.store', ['id' => $id])}}" method="post">
                @csrf
                <div class="form-group d-flex justify-content-center mb-2">
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5"/>
                        <label for="star5" title="5">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="4">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="3">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="2">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="1">1 star</label>
                    </div>
                    @error('rate')
                        <small class="text-danger">{{$message}}</small>    
                    @enderror
                </div>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Tell us what is in your mind..."></textarea>
                <div class="form-group mt-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection