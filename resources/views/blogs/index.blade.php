@extends('layouts.master')

@section('content')

  <h1>My Blogs</h1>
  @foreach($blogs as $blog)
    <!-- <h3><a href='/blogs/{{ $blog->id }}'>{{ $blog->title }}</a></h3> -->
    <h3><a href="{{ action('BlogsController@show', [$blog->id]) }}">{{ $blog->title }}</a></h3>
    <p>
      {{ $blog->body }}
    </p>
  @endforeach

@endsection
