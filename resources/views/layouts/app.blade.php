<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vulcan</title>

        <link rel="stylesheet" href="{{ asset('css/flatly.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <div id="wrapper">
            @include('partials.nav')

            @include('partials.sidebar')

            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Scripts --}}
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.js"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
