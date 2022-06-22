<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="">
    @include('layouts.navbar')
</div>
<div class="container">
    @if(session('message'))
        <div
            class="tw-p-4 tw-mb-4 tw-text-sm tw-text-blue-700 tw-bg-blue-100 tw-rounded-lg dark:tw-bg-blue-200 dark:tw-text-blue-800"
            role="alert">
            <span class="tw-font-medium">Info alert!</span> {{session('message')}}
        </div>
    @endif
</div>

<div class="tw-container tw-m-auto">
    @yield('content')
</div>

@stack('scripts')

<script src="{{asset('js/app.js')}}"></script>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
