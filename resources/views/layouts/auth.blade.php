<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vulcan Server</title>

        <link rel="stylesheet" href="{{ asset('css/darkly.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        {{-- Scripts --}}
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
