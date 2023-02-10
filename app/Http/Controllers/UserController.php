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
        $posts=Post::all();
        return view('user.userDashboard',compact('posts'));

    }

     public function userDashboard()
    {
        return view('user/userDashboard', ['posts' => Post::all()]);
    }

    public function savePost(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'post'=>'required'
        ]);
        if($request->hasFile('file')){
            $image=$request->file('file');
             //'folderkoname','kun bhitra rakhne ho'
            
            $response=$image->store('images','public');
            Post::create([
                'title' => $request->postTitle,
                'post' => $request->post,
                'user_id' => $request->user_id,
                'img'=>$response
            ]);
        }
        else{

            Post::create([
                'title' => $request->postTitle,
                'post' => $request->post,
                'user_id' => $request->user_id,
                'img'=>null, 
                
            ]);
        }
        return redirect()->back()->with(['posts' => Post::all()]);
  
    }

    public function deletePost($id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    // public function dashboard(){
    //     return view('user.userDashboard');
    // }
}