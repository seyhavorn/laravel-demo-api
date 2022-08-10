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
<div class=" tw-flex tw-justify-center tw-align-middle tw-mt-3">
    @if(session('message'))
        <div id="alert-border-2"
             class="tw-w-1/2 tw-flex tw-p-4 tw-mb-4 tw-text-sm tw-text-blue-700 tw-bg-blue-100 tw-rounded-lg dark:tw-bg-blue-200 dark:tw-text-blue-800"
             role="alert">
            <svg class="tw-inline tw-flex-shrink-0 tw-mr-3 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                      clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="tw-font-medium">Info alert!</span> {{session('message')}}
            </div>
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
