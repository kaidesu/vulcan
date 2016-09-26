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

        @include('partials.nav')

        <div class="container-fluid">
            @include('partials.sidebar')

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @hasSection('form')
                    @yield('form')
                @endif

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('header')
                            <span class="pull-right">@yield('actions')</span>
                        </h1>
                    </div>
                </div>

                @yield('before_content')

                @yield('content')

                @hasSection('form')
                    {!! Form::close() !!}
                @endif

                @yield('after_content')
            </div>
        </div>

        {{-- Scripts --}}
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.js"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
