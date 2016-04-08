@extends('layouts.master')

@section('content')

{!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogsController@update', $blog->id]]) !!}
    <h1>Edit Blog : {{ $blog->title }}</h1>
    <br />
    @if($errors->any())
        <ul class="alert alert-danger" style="list-style-type:none;">
            @foreach($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <div class="form-group">
      {!! Form::label('title', 'Blog Title') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('body', 'Blog Body') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Update Blog', null, ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

@endsection
