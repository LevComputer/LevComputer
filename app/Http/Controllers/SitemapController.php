<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Blog::all();

        return response()->view('index', ['posts' => $posts])->header('Content-Type', 'text/xml');
    }
}
