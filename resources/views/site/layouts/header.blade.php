<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'XHYPE - Home')</title>
    <link rel="icon" href="{{ asset('assets/image/logoblack.svg')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/src/site_output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site_all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site_all.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site_style.css') }}">
    <!-- font Bebas Neue  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Manrope:wght@200..800&display=swap"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<bod class="bg-[#E7E7EC]">
    @include('flash')
