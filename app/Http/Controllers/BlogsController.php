<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    public function index(){
      $blogs = Blog::all();
      return view('blogs.index')->with('blogs', $blogs);
    }

    public function show($id){
      $blog = Blog::findOrFail($id);
      return view('blogs.show')->with('blog', $blog);
    }
}
