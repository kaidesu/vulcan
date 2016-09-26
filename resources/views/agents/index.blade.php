@extends('layouts.app')

@section('header')
    <i class="fa fa-hand-spock-o fa-fw"></i> Agents
@stop

@section('actions')
    @if (count($agents))
        <a href="{{ url('agents/create') }}" class="btn btn-sm btn-primary">Create Agent</a>
    @endif
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (count($agents))
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Agents</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($agents as $agent)
                                <tr>
                                    <td>{{ $agent->name }}</td>
                                    <td>{{ $agent->description }}</td>
                                    <td class="text-right">
                                        <a href="{{ url('agents/'.$agent->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-agent-{{ $agent->id}}">
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
                    <h2>Create an Agent to get started!</h2>

                    <p>
                        <a href="{{ url('agents/create') }}" class="btn btn-primary">Create an Agent</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
@stop

@section('after_content')
    @if (count($agents))
        @foreach ($agents as $agent)
            <div class="modal fade" id="delete-agent-{{ $agent->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Agent</h4>
                        </div>

                        <div class="modal-body text-center">
                            <p>
                                Are you sure you wish to delete agent <b>{{ $agent->name }}</b>? This will destroy the agent with all corresponding data and <b>cannot be undone</b>.
                            </p>
                        </div>

                        <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'url' => 'agents/'.$agent->id]) !!}
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
