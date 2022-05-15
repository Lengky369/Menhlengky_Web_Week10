<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $latestPosts = Post::orderBy('id')->paginate(10);

        return view('page.index', [
            'latestPosts' => $latestPosts
        ]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('page.show', ['post' => $post]);
    }
    public function create_post()
    {
        return view('page.create_post');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
}
