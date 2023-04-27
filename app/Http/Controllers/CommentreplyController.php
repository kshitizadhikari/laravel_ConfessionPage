<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentreply;
use App\Models\replyreport;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CommentreplyController extends Controller
{
    public function replystore(Request $req,$commentid){
        
        Commentreply::create([
            'comment_id'=>$commentid,
            'user_id' => auth()->user()->id,
            'message' =>$req->reply
        ]);
        // $postid=$req->postid;
        // $data=Comment::where('post_id',$postid)->get();
        return redirect()->back()->with(['reply' => Commentreply::all()]);
    }


    public function reportreply(Request $request){
           
     


        if($request->ajax())
        {
            $data=$request->all();
            
             $reporter=Commentreply::find($data['reply_id']);
            
            $postsearch=replyreport::where('reply_id',$data['reply_id'])->where('user_id',auth()->user()->id);            
            if($postsearch->count()<1)
            {
                
                
                replyreport::create([
                    'comment_id' => $reporter['comment_id'],
                    'reply_id' => $data['reply_id'],
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

    public function deletereply($id){
    
        $data=Commentreply::find($id);
       
      
        $data->delete();
        return redirect()->back();
    
}
}
