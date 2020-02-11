<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'caption'=> ['required'],
            'image'=> ['required','image']
        ]);

        return $data;
        
        auth()->user()->posts()->create($data);

        
    }



    
}
