@extends('layouts.auth')

@section('content')
    <div class="col-md-6">
        <div class="panel panel-default">
            <h2>Please Log In</h2>

            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="picard@starfleet.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
        </div>
    </div>

@endsection
