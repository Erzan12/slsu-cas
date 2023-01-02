<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name') || 'SLSU-CAS'}}</title>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ Vite::asset('resources/js/app.js') }}"></script>
</body>
</html>