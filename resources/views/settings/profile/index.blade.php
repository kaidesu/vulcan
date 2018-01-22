@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-12">
            @include('settings._sidebar')
        </div>
        
        <div class="col-md-9 col-sm-12">
            <h2 class="subhead-title">Profile</h2>
            
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
@endsection
