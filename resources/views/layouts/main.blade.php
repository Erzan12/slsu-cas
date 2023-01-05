@extends('layouts.app')
@section('content')
    @include('utils.navbar')
    <div class="d-flex">
        @include('utils.sidebar')
        @yield('contents')
    </div>
@endsection