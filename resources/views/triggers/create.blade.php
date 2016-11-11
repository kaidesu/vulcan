@extends('layouts.app')

@section('header')
    <i class="fa fa-assistive-listening-systems fa-fw"></i> Create a Trigger
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['url' => 'domains/'.$domain->id.'/triggers']) !!}
@stop

@section('content')
    @include('triggers._form')
@endsection
