<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\post_like;
use App\Models\post_report;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $posts=Post::latest()->paginate(5);
        if($request->ajax())
        {
            $view=view('data',compact('posts'))->fragment('content');
            return response()->json(['html'=>$view]);
            
        }
      
      
        $randomposts=DB::table('Posts')->inRandomOrder()->take(8)->get();
        $pposts=DB::table('post_likes')->select('post_id')->groupBy('post_id')->havingRaw('count(*) > 1')->orderByDesc(DB::raw('count(*)'))->take(8)->get();
        
      
        

         return view('user.userDashboard',compact('posts','randomposts','pposts'));
        

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
                $imageurl=$imagefullname;
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
            $randomposts=DB::table('Posts')->inRandomOrder()->take(8)->get();
            return view('user.displaypost',compact('post'),compact('randomposts'));
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
            // dd($images);
            $image=array();
        if( $files=$req->file('file')){
           

             //'folderkoname','kun bhitra rakhne ho'
             foreach($files as $file)
             {
                $imagename=time().rand(1000,99999);
                $extension=strtolower($file->getClientOriginalExtension());
                $imagefullname=$imagename.".".$extension;
                $uploadspath="public/uploads/";
                $imageurl=$imagefullname;
                $file->move($uploadspath,$imagefullname);
                $image[]=$imageurl;
                
             }
            
            }
                $arrmeg=array_merge($images,$image);

             $data->title=$req->postTitle;
             $data->post=$req->post;
             $data->user_id=$req->user_id;
             $data->img=implode('|',$arrmeg);
             $data->save();
            return redirect()->route('login');
        }


        public function deleteimage($img,$postid){
            
           
            $data=Post::find($postid);
            $postdata=Post::where('id',$postid)->first();
            $images=explode('|',$data->img);
            $combinedimg=array();
            
            foreach($images as $image)
            {
                
                if($image==$img){
                    unlink("public/uploads/".$image);
                    
                   
                    
                    if(count($images)==1){
                        Post::find($postid)->update([
                            'id'=>$postid,
                            'title'=>$postdata->title,
                            'post'=>$postdata->post,
                            'userid'=>$postdata->user_id,
                            'img'=>null
                        ]);
                    }
                }
                else{
                    
                $combinedimg[]=$image;
            
                    Post::find($postid)->update([
                        'id'=>$postid,
                        'title'=>$postdata->title,
                        'post'=>$postdata->post,
                        'userid'=>$postdata->user_id,
                        'img'=>implode('|',$combinedimg)
                    ]);
            }
        }
        $post=Post::where('id',$postid)->first();
        return redirect()->back();

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

//report post
        public function reportPost(Request $request){
           
            if($request->ajax())
            {
                $data=$request->all();
                
                 $reporter=Post::find($data['postid']);
                
                $postsearch=post_report::where('post_id',$data['postid'])->where('user_id',auth()->user()->id);            
                if($postsearch->count()<1)
                {
                    
                    
                    post_report::create([
                        'post_id' => $data['postid'],
                        'user_id' => auth()->user()->id,
                        'ruser_id'=>$reporter['user_id'],
                        'report_type'=>$data['report_type']
                        
                    ]);
                    
                             return response()->json(array('msg' =>'liked'));
                         }
                         else{
                             $postsearch->delete();
                             return response()->json(array('msg' =>'disliked'));
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
           
          
            $data->delete();
            return redirect()->back();
        }

        public function changeavatar($id)
        {
           
               
            $path="pp/pp-";
            $exten="png";
               
            // $data=User::find($id);
          
            User::find(auth()->user()->id)->update([
                'img'=>$path.$id.".".$exten,
            ]);
            return redirect()->back();
            
        }

       
       
        public function profilepage($id){
            
           $data=User::find($id);
        //    dd($data);
         
            return view('user.profile',['posts' => Post::all()],compact('data'));
        }

        
    // public function dashboard(){
    //     return view('user.userDashboard');
    // }


}