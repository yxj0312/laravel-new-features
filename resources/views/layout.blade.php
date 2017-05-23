{{-- Basic layout used for all pages shown to the user --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>New Features of Laravel 5.4 and Vue 2.0</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/libs.css') }}" rel="stylesheet">
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
        <div class="content">
            <div id='app'>
                <example></example>
            </div>
            @hasSection('page_content')
                <div class="title m-b-md">
                    @yield('content')
	            </div>
	        @endif
	        @hasSection('page_link')
	            <div class="links">
	                @yield('link')
	            </div>
            @endif
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>