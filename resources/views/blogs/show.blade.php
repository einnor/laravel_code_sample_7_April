@extends('layouts.master')

@section('content')

  <h1>{{ $blog->title }}</h1>
  <p>
    {{ $blog->body }}
  </p>
  <div class="row">
    <div class="col-xs-6">
      <a class="btn btn-primary" href="{{ $blog->id }}/edit">Edit Blog</a>
    </div>
    <div class="col-xs-6">
      {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
        {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
    </div>
  </div>


@endsection
