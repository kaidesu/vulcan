@extends('layouts.app')

@section('title', 'Quotes')

@section('actions')
    <a href="/quotes/create" class="btn btn-sm btn-light">Add Quote</a>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            
            @if ($quotes->count())
                @include('quotes::partials._table')
            @else
                <div class="jumbotron text-center">
                    <h3 class="mt-0">
                        There are currently no quotes.
                    </h3>
                </div>
            @endif
        </div>
    </div>
@endsection
