<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Http\Controllers\Controller;
class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store','update','destroy', 'edit']]);
    }


    public function index(){
      $blogs = Blog::latest()->get();
      return view('blogs.index')->with('blogs', $blogs);
    }

    public function create(){
      return view('blogs.create');
    }

    public function store(BlogRequest $request){
      $input = Request::all();
      Blog::create($input);
      return redirect('blogs');
    }

    public function show($id){
      $blog = Blog::findOrFail($id);
      return view('blogs.show')->with('blog', $blog);
    }

    public function edit($id){
      $blog = Blog::findOrFail($id);
      return view('blogs.edit')->with('blog', $blog);
    }

    public function update(BlogRequest $request, $id){
      $blog = Blog::findOrFail($id);
      $blog->update($request->all());
      return redirect('blogs');
    }

    public function destroy($id){
      //
    }
}
