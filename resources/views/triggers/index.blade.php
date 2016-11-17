@extends('layouts.app')

@section('header')
    <i class="fa fa-assistive-listening-systems fa-fw"></i> Triggers
@stop

@section('actions')
    @if (count($triggers))
        <a href="{{ url('domains/'.$domain->id.'/triggers/create') }}" class="btn btn-sm btn-primary">Create Trigger</a>
    @endif
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (count($triggers))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Triggers</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Trigger</th>
                                <th class="text-center">Responses</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($triggers as $trigger)
                                <tr>
                                    <td>{{ $trigger->trigger }}</td>
                                    <td class="text-center">
                                        <span class="badge badge-info">{{ $trigger->responses->count() }}</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url('domains/'.$domain->id.'triggers/'.$trigger->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-trigger-{{ $trigger->id}}">
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
                    <h2>Create a Trigger to get started!</h2>

                    <p>
                        <small>
                            Triggers are mappings between a user's input and the output fulfilled by your bot.
                        </small>
                    </p>

                    <p>
                        <a href="{{ url('domains/'.$domain->id.'/triggers/create') }}" class="btn btn-primary">Create a Trigger</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
@stop

@section('after_content')
    @if (count($triggers))
        @foreach ($triggers as $trigger)
            <div class="modal fade" id="delete-trigger-{{ $trigger->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Trigger</h4>
                        </div>

                        <div class="modal-body text-center">
                            <p>
                                Are you sure you wish to delete trigger <b>{{ $trigger->trigger }}</b>? This will destroy the trigger with all corresponding data and <b>cannot be undone</b>.
                            </p>
                        </div>

                        <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'url' => 'triggers/'.$trigger->id]) !!}
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
