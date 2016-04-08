@extends('layouts.master')

@section('content')

<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    @include('errors.formerrors')

    <div class="form-group">
        Name
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Register</button>
    </div>
</form>

@endsection
