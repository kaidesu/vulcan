@extends('layouts.app')

@section('header')
    <i class="fa fa-hand-spock-o fa-fw"></i> Edit Existing Agent
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['method' => 'PATCH', 'url' => 'agents/'.$agent->id]) !!}
@stop

@section('content')
    @include('agents._form')
@endsection
