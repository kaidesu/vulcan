@extends('layouts.installer')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Check Server Requirements</h1>
            <h2>Step 2</h2>
        </div>
    </div>

    <div class="container">
        <ul class="list-group">
            @foreach($requirements['extensions'] as $extension => $enabled)
                <li class="list-group-item list-group-item-{{ ($enabled) ? 'success' : 'error' }}">{{ $extension }}</li>
            @endforeach
        </ul>

        @if(! isset($requirements['error']))
            <div class="form-group pull-right">
                <a href="/install/permissions" class="btn btn-primary btn-lg">Check Permissions</a>
            </div>
        @endif
    </div>

@endsection
