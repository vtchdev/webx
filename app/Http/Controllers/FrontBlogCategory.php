<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogcategory;
use App\Models\Blog;

class FrontBlogCategory extends Controller
{
    public function index()
    {
        $blogcategories = Blogcategory::orderBy('updated_at', 'DESC')->with('blog')->paginate(10);

        return view('pages.blog-category', compact('blogcategories'));
    }

    public function show($id)
    {
        $blogcategory = Blogcategory::findOrFail($id);

        return view('pages.blog-category', compact('blogcategory'));
    }
}
