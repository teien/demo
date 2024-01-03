<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog');
    }
    public function show($page)
    {
        // Hiển thị view blog.show và truyền bài viết vào view
        return view('blog.' . $page);
    }
}
