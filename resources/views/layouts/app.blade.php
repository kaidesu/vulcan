<!DOCTYPE html>
    <html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vulcan | @yield('title')</title>

        {{-- Styles --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        {{-- Scripts --}}
        <script defer src="{{ asset('js/fontawesome.js') }}"></script>
    </head>

    <body>
        <div id="app" v-cloak>
            @include('partials._navbar')

            <div class="container wrapper">
                <div class="row">
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                    
                    <div class="col-md-3">
                        @include('partials._sidebar')
                    </div>
                </div>
            </div>
            
            <flash message="{{ session('flash.message') }}" level="{{ session('flash.level') ?? 'success' }}"></flash>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
