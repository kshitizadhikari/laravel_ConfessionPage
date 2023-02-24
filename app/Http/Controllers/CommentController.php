<?php

namespace App\Http\Controllers;
use App\Models\Comment;

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
        return redirect()->back()->with(['comm' => Comment::all()]);
    }
}
