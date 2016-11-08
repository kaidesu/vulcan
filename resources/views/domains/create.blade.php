@extends('layouts.app')

@section('header')
    <i class="fa fa-graduation-cap fa-fw"></i> Create a Domain
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['url' => 'domains']) !!}
@stop

@section('content')
    @include('domains._form')
@endsection
