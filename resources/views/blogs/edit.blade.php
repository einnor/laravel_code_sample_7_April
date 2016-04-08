@extends('layouts.master')

@section('content')

{!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogsController@update', $blog->id]]) !!}
    <h1>Edit Blog : {{ $blog->title }}</h1>
    <br />
    @include('errors.formerrors')

    @include('partials.blogform', ['submitButtonText' => 'Edit Blog'])

{!! Form::close() !!}

@endsection
