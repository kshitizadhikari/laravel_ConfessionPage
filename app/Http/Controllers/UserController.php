<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use GuzzleHttp\Promise\Create;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user/userHome', ['posts' => Post::all()]);
    }

     public function userDashboard()
    {
        return view('user/userDashboard', ['posts' => Post::all()]);
    }

    public function savePost(Request $request)
    {
        Post::create([
            'title' => $request->postTitle,
            'post' => $request->post,
            'user_id' => $request->user_id,
        ]);

        return view('user/userDashboard');
    }

    public function deletePost()
    {
        echo "hello";
    }
}