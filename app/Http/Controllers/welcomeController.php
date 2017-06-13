<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class welcomeController extends Controller
{
    public function index()
    {
    	return view ('welcome', ['Posts' => Post::all()]);
    }

    public function show()
    {
    	return view('showNotice');
    }
}