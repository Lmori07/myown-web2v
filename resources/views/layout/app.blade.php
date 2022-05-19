<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
          <!-- ====== Navbar Section Start -->
             <x-layout.navbar></x-layout.navbar>
          <!-- ====== Navbar Section End -->

             {{ $slot }}

           <!-- ====== Footer Section Start -->
             <x-layout.footer></x-layout.footer>
           <!-- ====== Footer Section End -->
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
