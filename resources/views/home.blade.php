@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron text-center">
        <h3 class="mb-0 mt-0">{{ $quote }}</h3>
    </div>
@endsection
