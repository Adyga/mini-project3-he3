<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog');
    }
    public function detailblog()
    {
        return view('detailblog');
    }
    public function wineblog()
    {
        return view('wineblog');
    }
    public function coffeeblog()
    {
        return view('coffeeblog');
    }
    public function offtheroadblog()
    {
        return view('offtheroadblog');
    }
    public function architectureblog()
    {
        return view('architectureblog');
    }
    public function photoappblog()
    {
        return view('photoappblog');
    }
    public function photographyblog()
    {
        return view('photographyblog');
    }
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function addblog()
    {
        $blog = new Blog;
        $blog = Blog::create(['user_id' => '1', 'review' => 'finally', 'rate' => '3', 'category_id' => '2']);
    }
    public function create()
    {
        return view ('coffeeblog');
    }

}
