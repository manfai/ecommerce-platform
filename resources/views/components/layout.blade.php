<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>
<body class="bg-base-100">
       
  
    @if(!\Request::is('*/login') && !\Request::is('*/register')) 
        <p class="bg-deep-purple-accent-400 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
        Get free delivery on orders over $100
        </p>
       <x-header />
    @endif

    <!-- ==== Page Content ==== -->
    {{ $slot }}


    @if(!\Request::is('*/login') && !\Request::is('*/register')) 
        <x-footer />
    @endif

    @stack('scripts')
    @livewireScripts
</body>
</html>