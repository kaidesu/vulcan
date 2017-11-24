<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vulcan | @yield('title')</title>
        
        {{-- Meta Tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div id="app">
            <main v-cloak>
                @include('partials._sidebar')
                
                <div class="page-content column">
                    @include('partials._header')
                    
                    <div class="page-content__main container-fluid">
                        @yield('content')
                    </div>
                    
                    @include('partials._footer')
                </div>
            </main>
        </div>
        
        {{-- Scripts --}}
        <script src="js/app.js"></script>
        <script defer src="{{ asset('js/fontawesome.js') }}"></script>
    </body>
</html>
