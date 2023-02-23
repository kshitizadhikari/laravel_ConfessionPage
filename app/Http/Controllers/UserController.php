<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\post_like;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
        $images=explode('|',$data->img);
        foreach($images as $image)
        {

            if(file_exists($image)){
                unlink($image);
            }
        }
        
        $data->delete();
        return redirect()->back();
    }

    public function displaypost($id){
        
            $post=Post::where('id',$id)->first();
            return view('user.displaypost',compact('post'));
    }
        
        public function editpost($id){
            $data=Post::find($id);
            return view('user.editpost',compact('data'));
        }

        public function updatepost(Request $req){

            $data=Post::find($req->id);
            
        $images=explode('|',$data->img);
        foreach($images as $image)
        {

            if(file_exists($image)){
                unlink($image);
            }
        }
        $image=array();
        if( $files=$req->file('file')){
           

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


             $data->title=$req->postTitle;
             $data->post=$req->post;
             $data->user_id=$req->user_id;
             $data->img=implode('|',$image);
             $data->save();
            return redirect()->route('login');
        }


       


        public function likePost(Request $request){
           
            if($request->ajax())
            {
                $data=$request->all();
                
                
                $postsearch=post_like::where('post_id',$data['postid'])->where('user_id',auth()->user()->id);            
                if($postsearch->count()<1)
                {
                    
                    
                    post_like::create([
                        'post_id' => $data['postid'],
                        'user_id' => auth()->user()->id,
                        
                    ]);
                    $postcount=post_like::where('post_id',$data['postid'])->count();
                             return response()->json(array('msg' => 'liked' , 'postcount'=>$postcount));
                         }
                         else{
                             $postsearch->delete();
                             $postcount=post_like::where('post_id',$data['postid'])->count();
                             return response()->json(array('msg' => 'disliked' , 'postcount'=>$postcount));
                         }
                    
                         
            }
              
        }

            // setting


             public function setting($id){
                $data=User::find($id);
               
                return view('user.setting',compact('data'));
        }
       
        public function editprofile(Request $req){
            $data=User::find($req->id);
            $data->name=$req->names;
            $data->email=$req->email;
            $data->password=$req->password;
            $data->age=$req->age;
            $data->gender=$req->gender;
            $data->country=$req->country;
           
            $data->save();
           return redirect()->route('login');
        }

        public function changepass(Request $req){
            $data=User::find($req->id);
           
            $passwordstatus=Hash::check($req->oldpass,auth()->user()->password);
            if($passwordstatus){
                if($req->newpass==$req->passconfirm)
                {

                    $data->name=$req->names;
                    $data->email=$req->email;
                    $data->password=Hash::make($req->newpass);
                    $data->age=$req->age;
                    $data->gender=$req->gender;
                    $data->country=$req->country;
                    
                    $data->save();
                    return redirect()->route('login');
                }
                else{
                    return redirect()->back();

                }
            }
            else{
                return redirect()->back();
            }
        }


        public function deleteuse($id)
        {
            $data=User::find($id);
            dd($data);
           
            $data->delete();
            return redirect()->back();
        }
       
        public function profilepage(){
           
            return view('user.profile',['posts' => Post::all()]);
        }

        
    // public function dashboard(){
    //     return view('user.userDashboard');
    // }


}