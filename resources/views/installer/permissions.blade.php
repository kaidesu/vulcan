@extends('layouts.installer')

@section('content')
    <div class="jumbotron">
        <h1>Check Folder Permissions</h1>
        <h2>Step 3</h2>
    </div>

    <ul class="list-group">
        @foreach($permissions['permissions'] as $permission)
            <li class="list-group-item list-group-item-{{ ($permission['passes']) ? 'success' : 'danger' }}">{{ $permission['folder'] }}</li>
        @endforeach
    </ul>

    @if(! isset($permissions['error']))
        <div class="form-group pull-right">
            <a href="/install/database" class="btn btn-primary btn-lg">Install</a>
        </div>
    @endif
@endsection
