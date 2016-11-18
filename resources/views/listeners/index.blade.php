@extends('layouts.app')

@section('header')
    <i class="fa fa-assistive-listening-systems fa-fw"></i> Listeners
@stop

@section('actions')
    @if (count($listeners))
        <a href="{{ url('domains/'.$domain->id.'/listeners/create') }}" class="btn btn-sm btn-primary">Create Listener</a>
    @endif
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (count($listeners))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Listeners</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Listener</th>
                                <th class="text-center">Responses</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listeners as $listener)
                                <tr>
                                    <td>{{ $listener->listener }}</td>
                                    <td class="text-center">
                                        <span class="badge badge-info">{{ $listener->responses->count() }}</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url('domains/'.$domain->id.'listeners/'.$listener->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-listener-{{ $listener->id}}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="jumbotron text-center">
                    <h2>Create a Listener to get started!</h2>

                    <p>
                        <small>
                            Listeners are mappings between a user's input and the output fulfilled by your bot.
                        </small>
                    </p>

                    <p>
                        <a href="{{ url('domains/'.$domain->id.'/listeners/create') }}" class="btn btn-primary">Create a Listener</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
@stop

@section('after_content')
    @if (count($listeners))
        @foreach ($listeners as $listener)
            <div class="modal fade" id="delete-listener-{{ $listener->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Listener</h4>
                        </div>

                        <div class="modal-body text-center">
                            <p>
                                Are you sure you wish to delete listener <b>{{ $listener->listener }}</b>? This will destroy the listener with all corresponding data and <b>cannot be undone</b>.
                            </p>
                        </div>

                        <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'url' => 'listeners/'.$listener->id]) !!}
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@stop
