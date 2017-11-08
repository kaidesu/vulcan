@extends('layouts.app')

@section('title', 'Modules')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Version</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>
                                    @if (Route::has($module['slug'].'.index'))
                                        <a href="{{ route($module['slug'].'.index') }}">{{ $module['name'] }}</a>
                                    @else
                                        {{ $module['name'] }}
                                    @endif
                                </td>
                                <td>{{ $module['version'] }}</td>
                                <td>{{ $module['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
