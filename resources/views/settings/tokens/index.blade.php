@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-12">
            @include('settings._sidebar')
        </div>
        
        <div class="col-md-9 col-sm-12">
            <h2 class="subhead-title">Personal Access Tokens</h2>
            
            <p>
                Tokens you have generated that can be used to access the <a href="#">Vulcan AI API</a>.
            </p>
            
            <table class="table table-dark">
                <tr>
                    <td><strong>Test</strong></td>
                    <td class="text-right"><small>Never used</small></td>
                    <td class="text-right"><a href="#" class="btn btn-sm btn-primary">Edit</a> <a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
