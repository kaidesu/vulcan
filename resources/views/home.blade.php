@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7 col-sm-12 ml-auto mr-auto">
            <div class="mb-3">
                <post-message></post-message>
            </div>
            
            <messages></messages>
        </div>
    </div>
@endsection
