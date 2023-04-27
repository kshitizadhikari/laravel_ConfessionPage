<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Commentreport;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function commentstore(Request $req){
        Comment::create([               
            'comment'=>$req->comment,
            'post_id' =>$req->postid,
            'user_id' => $req->userid
        ]);
        $postid=$req->postid;
        $data=Comment::where('post_id',$postid)->get();
        return redirect()->back()->with(['comments' => Comment::all()]);
    }


    public function reportcomment(Request $request){
           
     


    if($request->ajax())
    {
        $data=$request->all();
        
         $reporter=Comment::find($data['comment_id']);
        
        $postsearch=Commentreport::where('comment_id',$data['comment_id'])->where('user_id',auth()->user()->id);            
        if($postsearch->count()<1)
        {
            
            
            Commentreport::create([
                'comment_id' => $data['comment_id'],
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

public function deletecomment($id){
    
        $data=Comment::find($id);
       
      
        $data->delete();
        return redirect()->back();
    
}
}



    

