@extends('layouts.auth')

@section('title', 'Log In')

@section('content')
        <div class="login">
            <h1 class="text-center mb-4 text-logo">
                <i class="fa fa-hand-spock"></i> Vulcan
            </h1>

            <div class="login-block">
                <form class="form-horizontal mb-4" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </form>

                <p class="text-center">
                    @if (config('vulcan.registration.enabled'))
                        <small><a href="{{ url('/register') }}">Register</a></small>
                        
                        <br>
                    @endif
                    
                    <small>
                        <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </small>
                </p>
            </div>
        </div>
@endsection
