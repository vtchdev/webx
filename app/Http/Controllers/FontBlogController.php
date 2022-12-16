<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blogcategory;

class FontBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->with('blogcategory')->paginate(10);

        return view('pages.blog', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::with('blogcategory')->findOrFail($id);

        return view('pages.blog-show', compact('blog'));
    }



    public function welcomeblog()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->with('blogcategory')->paginate(4);

        return view('welcome', compact('blogs'));
    }

}
