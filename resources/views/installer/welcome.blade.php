@extends('layouts.installer')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Welcome!</h1>
            <h2>This won't take long at all, so let's get started!</h2>
        </div>
    </div>

    <div class="container">
        <p class="text-center">
            <a href="/install/environment" class="btn btn-primary btn-lg">Configure Environment</a>
        </p>
    </div>
@endsection
