<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentreply;
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
}
