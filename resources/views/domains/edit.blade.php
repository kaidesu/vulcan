@extends('layouts.app')

@section('header')
    <i class="fa fa-graduation-cap fa-fw"></i> Edit Existing Domain
@stop

@section('actions')
    <button type="submit" class="btn btn-success btn-sm">Save</button>
@stop

@section('form')
    {!! Form::open(['method' => 'PATCH', 'url' => 'domains/'.$domain->id]) !!}
@stop

@section('content')
    @include('domains._form')
@endsection
