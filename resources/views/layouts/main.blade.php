@extends('layouts.app')
@section('content')
    @include('utils.navbar')
    <div class="d-flex">
        @include('utils.sidebar')
        <div class="p-3 w-100 overflow-x-hidden overflow-y-auto">
            @yield('contents')
        </div>
    </div>
@endsection