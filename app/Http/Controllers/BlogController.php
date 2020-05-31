<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        // dd($blogs);
        return view ('newblog', compact('blogs'));
        // return view ('newblog-single', compact('blogs'));

    }
}
