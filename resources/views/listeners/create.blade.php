@extends('layouts.app')

@section('header')
    <i class="fa fa-assistive-listening-systems fa-fw"></i> Create a Listener
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['url' => 'domains/'.$domain->id.'/listeners']) !!}
@stop

@section('content')
    @include('listeners._form')
@endsection
