@extends('layouts.app')

@section('header')
    <i class="fa fa-commenting-o fa-fw"></i> Respond to "{{ $listener->for }}"
@stop

@section('actions')
        <a href="{{ url('domains/'.$listener->domain->id.'/listeners/create') }}" class="btn btn-sm btn-primary">Create Responses</a>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (count($responses))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Responses</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Respond with...</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($responses as $respond)
                                <tr>
                                    <td>{{ $respond->with }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('responses.edit', ['domainID' => $listener->domain->id, 'listenerID' => $listenerID]) }}" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-response-{{ $respond->id}}">
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
                    <h2>Create a Response to get started!</h2>

                    <p>
                        <small>
                            Listeners are mappings between a user's input and the output fulfilled by your bot.
                        </small>
                    </p>

                    <p>
                        {{-- <a href="{{ url('domains/'.$domain->id.'/listeners/create') }}" class="btn btn-primary">Create a Listener</a> --}}
                    </p>
                </div>
            @endif
        </div>
    </div>
@stop

@section('after_content')
    @if (count($responses))
        @foreach ($responses as $response)
            <div class="modal fade" id="delete-listener-{{ $respons->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Listener</h4>
                        </div>

                        <div class="modal-body text-center">
                            <p>
                                Are you sure you wish to delete response <b>{{ $response->with }}</b>? This will destroy the response with all corresponding data and <b>cannot be undone</b>.
                            </p>
                        </div>

                        <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'url' => 'domains/'.$domain->id.'/listeners/'.$listen->id]) !!}
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
