@extends('layouts.app')
@section('content')
    @yield('navbar')
    <div class="content-container">
        @yield('sidebar')
        @yield('content')
    </div>
@endsection