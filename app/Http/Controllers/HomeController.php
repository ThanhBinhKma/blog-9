<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function posts()
    {
        return view('posts.index');
    }

    public function author()
    {
        return view('author.index');
    }
}
