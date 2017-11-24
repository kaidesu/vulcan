<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vulcan | @yield('title')</title>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        {{-- Scripts --}}
        <script defer src="{{ asset('js/fontawesome.js') }}"></script>
    </head>
    
    <body>
        @include('partials._sidebar')
        
        <div class="page-content column">
            <div class="page-content__header">
                <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <span class="navbar-text">
                            <span class="fas fa-bars fa-fw"></span>
                        </span>
                    </nav>
                    
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <span class="navbar-text">
                            Breadcrumbs
                        </span>
                    </nav>
                </header>
            </div>
            
            <!-- Content -->
            <div class="page-content__main container-fluid pt-4 pl-4 pb-4 pr-4">
                @yield('content')
            </div>
            
            <footer class="page-content__footer">
                <p><a href="#">Link</a> <a href="#">Link</a> <a href="#">Link</a> <a href="#">Link</a></p>
                <p>Copyright</p>
            </footer>
        </div>
        
        <!-- Scripts -->
        <script src="assets/js/theme.js"></script>
    </body>
</html>




        

    

    {{-- <body>
        <div id="app" v-cloak>
            <div class="wrapper">
                @include('partials._navbar')

                <div class="container content-body">
                    
                    <div class="row">
                        <div class="col">
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
                </div>
            </div>
            
            <flash message="{{ session('flash.message') }}" level="{{ session('flash.level') ?? 'success' }}"></flash>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
    </body>
</html> --}}
