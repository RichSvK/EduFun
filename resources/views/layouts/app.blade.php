<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <style>
        body{
            background-color: #eff4ee;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    
    {{-- Agar footer selalu menempel di bawah tanpa fixed-bottom sehingga tidak menutupi konten --}}
    <div class="d-flex flex-wrap align-content-between" style="min-height:98vh">
        @yield('content')
        @include('components.footer')
    </div>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>