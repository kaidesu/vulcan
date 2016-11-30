@extends('layouts.app')

@section('header')
    <i class="fa fa-graduation-cap fa-fw"></i> Edit Existing Listener
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['method' => 'PATCH', 'url' => 'listeners/'.$listener->id]) !!}
@stop

@section('content')
    @include('listeners._form')
@endsection
