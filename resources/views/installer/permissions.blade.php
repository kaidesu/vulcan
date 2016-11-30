@extends('layouts.installer')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Check Folder Permissions</h1>
            <h2>Step 3</h2>
        </div>
    </div>

    <div class="container">
        <ul class="list-group">
            @foreach($permissions['permissions'] as $permission)
                <li class="list-group-item list-group-item-{{ ($permission['passes']) ? 'success' : 'danger' }}">{{ $permission['folder'] }}</li>
            @endforeach
        </ul>

        @if(! isset($permissions['error']))
            <form action="/install" method="post">
                {!! csrf_field() !!}

                <div class="form-group pull-right">
                    <button type="submit" class="btn btn-primary btn-lg">Install</a>
                </div>
            </form>
        @endif
    </div>
@endsection
