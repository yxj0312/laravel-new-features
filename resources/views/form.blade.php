<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/libs.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="container" style="padding-top:40px">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            <div class="content ">
                <div class="title m-b-md">
                    Laravel
                    <span class="fa fa-address-book"></span> 
                </div>
            </div>
            
            @component('partials.form_field')
                @slot('name')
                    Hello World
                @endslot
            @endcomponent
            @component('partials.form_field')
                @slot('name')
                    Hello World Again
                @endslot
            @endcomponent
            @component('partials.form_field')
            @endcomponent
        </div>
    </body>
</html>
