<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return view('website.blog.index');
    }
    function details(){
        return view('website.blog.blog-detail');
    }
}
