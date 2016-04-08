@extends('layouts.master')

@section('content')

    <!-- resources/views/auth/login.blade.php -->

    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        @include('errors.formerrors')

        <div class="form-group">
            Email
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            Password
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>

@endsection
