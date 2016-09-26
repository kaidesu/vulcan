@extends('layouts.app')

@section('header')
    <i class="fa fa-hand-spock-o fa-fw"></i> Create an Agent
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['url' => 'agents']) !!}
@stop

@section('content')
    @include('agents._form')
@endsection
