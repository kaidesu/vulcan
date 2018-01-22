@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-12">
            @include('settings._sidebar')
        </div>
        
        <div class="col-md-9 col-sm-12">
            <h2 class="subhead-title">Change Email</h2>
            
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Update Email</button>
            </form>
            
            <h2 class="subhead-title mt-5">Change Password</h2>
            
            <form>
                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input type="password" name="old_password" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="new_password">New Password Password</label>
                    <input type="password" name="new_password" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="confirm_new_password">Confirm New Password</label>
                    <input type="password" name="confirm_new_password" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Update Password</button>
                <a href="#" class="btn btn-link">I forgot my password</a>
            </form>
        </div>
    </div>
@endsection
