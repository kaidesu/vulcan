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
            <div class="wrapper">
                @include('partials._navbar')

                <div class="container content-body">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="h3">
                            @yield('title')
                            
                            @if (array_key_exists('subtitle', View::getSections()))
                                <small>@yield('subtitle')</small>
                            @endif
                        </h1>
                        
                        @if (array_key_exists('actions', View::getSections()))
                            <div>
                                @yield('actions')
                            </div>
                        @endif
                    </div>
                    
                    @yield('content')
                </div>
            </div>
            
            @include('partials._footer')
            
            <flash message="{{ session('flash.message') }}" level="{{ session('flash.level') ?? 'success' }}"></flash>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
    </body>
</html>
