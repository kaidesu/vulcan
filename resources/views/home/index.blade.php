@extends('layouts.home')

@section('content')
    <div id="search-wrapper">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="text-center">
                    <h1><i class="fa fa-hand-spock-o fa-2x" aria-hidden="true"></i></h1>
                </div>

                <form action="//google.com/search" method="get">
                    <div class="input-group">
                        <input name="q" type="text" class="form-control" autofocus>

                        <span class="input-group-addon">
                            <button type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
