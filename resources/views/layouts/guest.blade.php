<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

        <style type="text/css" media="screen">
            html,
            body {
                height: 100%;
            }

            body {
                display: flex;
                align-items: center;
            }

            .form-signin {
                width: 100%;
                max-width: 450px;
                margin: auto;
            }
            .form-signin .checkbox {
                font-weight: 400;
            }
            .form-signin .form-control {
                position: relative;
                box-sizing: border-box;
                height: auto;
                font-size: 16px;
            }
            .form-signin .form-control:focus {
                z-index: 2;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('public/js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="form-signin">
            {{ $slot }}
        </div>
    </body>
</html>
