<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class welcomeController extends Controller
{
    public function index()
    {
    	return view ('welcome', ['Post' => Post::all()->take(-3)]);
    }

    public function show($id)
    {
    	return view('showNotice', ['Post' => Post::findOrFail($id), 'Posts' => Post::all()->take(-3)]);
    }
}