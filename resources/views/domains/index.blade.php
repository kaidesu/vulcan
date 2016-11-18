@extends('layouts.app')

@section('header')
    <i class="fa fa-graduation-cap fa-fw"></i> Domains
@stop

@section('actions')
    @if (count($domains))
        <a href="{{ url('domains/create') }}" class="btn btn-sm btn-primary">Create Domain</a>
    @endif
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (count($domains))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Domains</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-center">Listeners</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($domains as $domain)
                                <tr>
                                    <td>{{ $domain->name }}</td>
                                    <td>{{ $domain->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('domains/'.$domain->id.'/listeners') }}" class="btn btn-primary btn-xs"><i class="fa fa-assistive-listening-systems fa-fw" aria-hidden="true"></i> Manage Listeners <span class="badge">{{ $domain->listeners->count() }}</span></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url('domains/'.$domain->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-domain-{{ $domain->id}}">
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
                    <h2>Create a Domain to get started!</h2>

                    <p>
                        <small>
                            Domains allow you to group related listeners together for easy organization.
                        </small>
                    </p>

                    <p>
                        <a href="{{ url('domains/create') }}" class="btn btn-primary">Create a Domain</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
@stop

@section('after_content')
    @if (count($domains))
        @foreach ($domains as $domain)
            <div class="modal fade" id="delete-domain-{{ $domain->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Domain</h4>
                        </div>

                        <div class="modal-body text-center">
                            <p>
                                Are you sure you wish to delete domain <b>{{ $domain->name }}</b>? This will destroy the domain with all corresponding data and <b>cannot be undone</b>.
                            </p>
                        </div>

                        <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'url' => 'domains/'.$domain->id]) !!}
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
