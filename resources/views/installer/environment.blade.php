@extends('layouts.installer')

@section('content')
    <div class="jumbotron">
        <h1>Configure Environment</h1>
        <h2>Step 1</h2>
    </div>

    <form action="/install/environment" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <textarea class="form-control" rows="15" name="env">{{ $env }}</textarea>
        </div>

        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary btn-lg">Check Requirements</a>
        </div>
    </form>


@endsection