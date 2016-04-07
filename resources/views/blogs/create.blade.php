@extends('layouts.master')

@section('content')

{!! Form::open(['url' => 'blogs']) !!}

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
      {!! Form::submit('Create Blog', null, ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

@endsection
