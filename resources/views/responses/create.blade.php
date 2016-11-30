@extends('layouts.app')

@section('header')
    <i class="fa fa-commenting-o fa-fw"></i> Create a Response
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['route' => 'responses.store']) !!}
@stop

@section('content')
    @include('responses._form')
@endsection
