@extends('layouts.app')

@section('header')
    <i class="fa fa-commenting fa-fw"></i> Chat
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('partials.chat')
        </div>
    </div>
@endsection
