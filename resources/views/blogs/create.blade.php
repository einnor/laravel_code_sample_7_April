@extends('layouts.master')

@section('content')

{!! Form::open(['url' => 'blogs']) !!}

    <h1>Create Blog</h1>
    <br />

    @include('errors.formerrors')

    @include('partials.blogform', ['submitButtonText' => 'Create Blog'])

{!! Form::close() !!}

@endsection
