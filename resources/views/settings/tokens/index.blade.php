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
            
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
@endsection
