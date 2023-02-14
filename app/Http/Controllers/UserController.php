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
        $posts=Post::latest()->get();
        return view('user.userDashboard',compact('posts'));

    }

     public function userDashboard()
    {
        return view('user/userDashboard', ['posts' => Post::all()]);
    }

    public function savePost(Request $request)
    {
            
        $request->validate([
            'postTitle'=>'required',
            'post'=>'required'
        ]);
        $image=array();
        if( $files=$request->file('file')){
           

             //'folderkoname','kun bhitra rakhne ho'
             foreach($files as $file)
             {
                $imagename=time().rand(1000,99999);
                $extension=strtolower($file->getClientOriginalExtension());
                $imagefullname=$imagename.".".$extension;
                $uploadspath="public/uploads/";
                $imageurl=$uploadspath.$imagefullname;
                $file->move($uploadspath,$imagefullname);
                $image[]=$imageurl;
             }
            
            }
            Post::create([
                'title' => $request->postTitle,
                'post' => $request->post,
                'user_id' => $request->user_id,
                'img'=>implode('|',$image)
            ]);
     
        return redirect()->back()->with(['posts' => Post::all()]);
    
  
    }

    public function deletePost($id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function displaypost($id){
        
            $post=Post::where('id',$id)->first();
            return view('user.displaypost',compact('post'));
    }

    // public function dashboard(){
    //     return view('user.userDashboard');
    // }
}