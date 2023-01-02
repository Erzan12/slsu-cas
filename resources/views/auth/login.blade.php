@extends('layouts.app')
@section('content')
<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="card p-3 col-md-5">
            <form action="/login" method="post">
                @csrf
                <h4 class="text-center">Login User</h4>

                @error('error')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror

                <div class="form-group my-2">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection