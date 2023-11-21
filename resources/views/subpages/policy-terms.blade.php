<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __('cookies.title') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/index.js', 'resources/js/preloader.js', 'resources/js/nav.js'])
    <style>
        body {
            background: radial-gradient(circle at 0 100%, #20201e, #000) !important;
        }
    </style>
</head>




<body>
    <x-navigation fontClass="color--white"></x-navigation>
    <x-preloader></x-preloader>
    <div class="p-3 paragraph" style="font-style: normal">
        {{ __('cookies.policy') }}
    </div>
    @include('layout/footer')
</body>
