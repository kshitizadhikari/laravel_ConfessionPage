@extends('layouts.app')

@section('content')

    <style>
    .bg-second-color {
        background-color: grey;
    }

    #left-list {
        margin-left: 20px;

    }

    #left-list a {
        text-decoration: none;
        padding: 5px;
        color: #000;
        font-size: 13px;
        margin-bottom: 5px;
    }

    #left-list img {
        width: 20px;
        height: 20px;
        border-radius: 5px;
    }

    .profile {
        width: 25px;
        height: 25px;
        border-radius: 5px;
    }

    .border-gray {
        border-style: solid;
        border-color: rgb(221, 221, 221);
        border-width: 1px;

    }

    .text-gray-dark {
        color: rgb(177, 177, 177);
    }

    .hover-dark:hover {
        background-color: rgb(233, 233, 233);
        border-radius: 5px;
    }

    .post-profile {
        width: 55px;
        height: 55px;
        padding: 7px;
    }

    /* .left-btn {
        border-bottom-left-radius: 12px;
        border-top-left-radius: 12px;
    }

    .right-btn {
        border-bottom-right-radius: 12px;
        border-top-right-radius: 12px;
    } */
    textarea{
        resize:none;
    }
    input[type="file"]{
        display:none;
    }

    .chooseimg{
        color:white;
        height:30px;
        width:100px;
        background-color:gray;
        font-size:10px;
        display:flex;
        justify-content:center;
        align-items:center;
      

    }
    .chooseimg:hover{
        cursor:pointer;
    }
    .post-image{
        display:grid;
        grid-template-columns:auto auto;
        /* grid-template-rows: repeat(1, 1fr); */
    }
/*     
    .left-line::before{
        content:"";
        background-color:rgb(170,170,170);
        position: absolute;
        min-height:100%;
        width:1px;
        left:270px;
    } */
 
    </style>



    <div class="bg-light pt-4">
        <div class="container mb-5">
            <div class="row">
                <div id="left-list" class="col-2 d-flex flex-column">
                   

                  
                    <a href="{{route('login')}}" class="mt-3">
                    <!-- <span class="position-relative me-auto"> -->
                       <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                        <!-- <span
                            class="position-absolute top-0 start-50 translate-middle ms-2 p-1 bg-danger border border-light rounded-circle">

                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </span> -->
                    <span class="fs-6 fw-bold ms-3">Home</span>
                </a>
                <a href="{{route('userprofile',auth()->user()->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg>
                    <span class="fs-6 fw-bold ms-3">Profile</span>
                </a>
                   
                </div>
                <!-- //middle part -->
                <div class="col-7">
                 
                    <!-- POSTS -->
                    <div class="posts">
                    @php
                                        $postusername=App\Models\User::where('id',$post->user_id)->first();
                                        @endphp
                       
                        <div class="post bg-gray border-gray shadow-lg mt-4">
                            <div class=" pt-2 d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="{{asset($postusername->img)}}" class="post-profile rounded-circle" alt="">
                                    <div class="d-flex-column">
                                    <a href="{{route('userprofile',$postusername->id)}}">
                                  
                                      <span class="fw-bold fs-6">{{$postusername->username}}</span>
                                      </a>

                                    </div>
                                </div>
                               
                            </div>
                            <div class="post-body pt-2 ps-3">
                                <div class="post-title fw-bold">
                                    <a href="" class="text-decoration-none text-black">
                                        {{$post->title}}
                                    </a>
                                </div>
                                <div class="post-text pt-1">
                                    {{$post->post}}
                                </div>
                            </div>
                            @if(!empty($post->img))
                            <div class="post-image pt-2">
                            @php
                                $images=explode('|',$post->img)
                                @endphp
                                        @foreach($images as $image)
                                 

                                       
                                    
                                        <img src="{{url('public/uploads/'.$image)}}"value="{{url('public/uploads/'.$image)}}" data-id="{{url('public/uploads/'.$image)}}"  data-bs-toggle="modal" data-bs-target="#displayimg" class="img-fluid w-100 h-100 gallery-items" alt="" style="object-fit:cover;" >

                                  
                                                          
                                 
                                    @endforeach                           
                                 </div>
                                 @endif
                           
                                 <span  class="likeform">
                                    <input type="hidden" class="idpost" name="postid" id="postid" value="{{$post['id']}}">
                                    
                                  
                                    <button type="submit"
                                        class="left-btn post-btn bg-transparent border-0 text-black p-4">
                                        @php
                                        $postlike=App\Models\post_like::where('user_id',auth()->user()->id)->where('post_id',$post['id'])->get();
                                        $postcount=App\Models\post_like::where('post_id',$post['id'])->count();
                                        $comments=App\Models\Comment::where('post_id',$post['id'])->latest()->get();
                                        
                                        $postreport=App\Models\post_report::where('user_id',auth()->user()->id)->where('post_id',$post['id'])->get()

                                        
                                        @endphp
                                      
                                          
                                      
                                     
                                                                                                                                               
                                            @if($postlike->count()>0)
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" id="postdis" fill="lightblue"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path  d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg> <span id="likecount">{{$postcount}}</span> Like
                                    
                                        @else
                                  

                                      
      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" id="postdis" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path  d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg> <span id="likecount">{{$postcount}}</span> Like

                                      
                                        @endif
                                      
                                        

                                    </button>
                                    </span>
                                    <button type="button"
                                        class="  bg-transparent  border-0 ms-2 text-black p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                    </svg> {{count($comments)}} Comments
                                    </button>
                                    @if($postreport->count()>0)
                                    
                                    <button type="submit"
                                        class="report-btn  bg-transparent  border-0 ms-2 text-black p-1 my-modal-trigger" value="{{$post['id']}}" data-id="{{$post['id']}}"data-bs-toggle="modal" data-bs-target="#Modalreport" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="reportdis" fill="lightblue" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                     <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                    </svg>
                                    </button>
                                    @else
                                    <button type="submit"
                                        class="report-btn  bg-transparent  border-0 ms-2 text-black p-1 my-modal-trigger" value="{{$post['id']}}" data-id="{{$post['id']}}"  data-bs-toggle="modal" data-bs-target="#Modalreport" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="reportdis" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                     <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                    </svg>
                                    </button>
                                    @endif
                                    <small class="ms-4 text-body  mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi me-1 bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>{{$post->created_at->diffForHumans()}}</small>

                                </div>
                            


                        <!-- COMMENT -->

                        <div class="comment h-80">
                            

                            <div class="flex items-center justify-center shadow-lg my-5">
                                <form action="{{route('comment')}}" method="post" enctype="multipart/form-data" class="w-full max-w-xl bg-gray rounded-lg px-4  pb-4" >
                                        @csrf
                                    <div class="flex flex-wrap -mx-3 mv-6">
                                            <h5 class="px-4 pt-3 pb-2 text-gray-200 text-lg">Add a new Comment</h5>
                                        <div class="w-full md:w-full px-3 mb-2 mt-2">
                                            <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="postid" value="{{$post->id}}">
                                            <textarea class="bg-gray-100 rounded border-gray-400 leading-normal w-100 h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white border border-secondary" placeholder="type your comment" name="comment" required></textarea>
                                        </div>
                                            <div class="-mr-1">

                                                <input type="submit" class="bg-white text-gray-700 font-medium py-1 px-4  border border-gray-400 rounded-lg tracking-wide mr-1 ms-3" value="Post comment">
                                            </div>
                                    </div>

                                </form>
                              

                        </div>
                        @foreach($comments as $comment)
                        @php
                        $commentusername=App\Models\User::where('id',$comment->user_id)->first();
                        @endphp
                      
                                    

                                     
                                    <div class=" comment-container shadow-lg pt-1 pb-2 mb-3" style="border:1px solid rgba(0,0,0,0.3); border-radius:0.5rem;">
                                        <div class="comment-card">
                                            <div class="comment-title">
                                                <img src="{{asset($commentusername->img)}}" class="post-profile rounded-circle"  alt="">
                                               
                                                    <strong>{{$commentusername->username}}</strong>
                                                    <small class="ms-4 text-body"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-clock me-1" viewBox="0 0 16 16">
                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                    </svg>{{$comment->created_at->diffForHumans()}}</small>
                                                  
                                                <div class="comment-body fs-6"style="margin-left:60px">

                                                    <span class="me-2">{{$comment->comment}}</span>
                                                </div>
                                              
                                                
                                                
                                            </div>
                                            <div class="comment-footer d-flex gap-2 fs-6 justify-content-end p-2 me-3 ">
                                           
                                            
                                            <div class="btn btn-transparent p-0" onclick="reply('{{$comment->id}}','{{$commentusername->username}}')">Reply</div>
                                            <div class="">
                                            <button type="submit"
                                        class=" bg-transparent  border-0 ms-2 text-black p-0 my-modal-trigger" value="{{$comment->id}}" data-id="{{$comment->id}}"data-bs-toggle="modal" data-bs-target="#Modalreportcomm" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentcolor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                     <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                    </svg>
                                    </button>
                                        @if($comment->user_id==auth()->user()->id)
                                    <button type="submit"
                                        class=" bg-transparent  border-0 ms-2 text-black p-0 my-modal-trigger" value="{{$comment->id}}" data-id="{{$comment->id}}"data-bs-toggle="modal" data-bs-target="#commentdelete" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                    @endif
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- reply section -->
                                    @php
                                    $replies=App\Models\Commentreply::where('comment_id',$comment->id)->get();
                                    @endphp
                                    @foreach($replies as $reply)
                                    

                                        <div class=" comment-container shadow-lg pt-1 pb-2 ms-5 mb-3" style="border:1px solid rgba(0,0,0,0.3); border-radius:0.5rem;">
                                            <div class="comment-card">
                                                <div class="comment-title">
                                                    <img src="{{asset($reply->user->img)}}" class="post-profile rounded-circle"  alt="">
                                               
                                                     <strong>{{$reply->user->username}}</strong>
                                                     <small class="ms-4 text-body"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-clock me-1" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                     <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                     </svg>{{$reply->created_at->diffForHumans()}}</small>
                                                  
                                                    <div class="comment-body fs-6"style="margin-left:60px">

                                                      <span class="me-2">{{$reply->message}}</span>
                                                 </div>
                                              
                                                
                                                
                                                </div>
                                                    <div class="comment-footer d-flex gap-2 fs-6 justify-content-end p-2 me-3 ">
                                           
                                                    
                                                <div class="btn btn-transparent p-0" onclick="reply('{{$comment->id}}','{{$reply->user->username}}')">Reply</div>
                                          
                                    <button type="submit"
                                        class=" bg-transparent  border-0 ms-2 text-black p-0 my-modal-trigger" value="{{$reply->id}}" data-id="{{$reply->id}}"data-bs-toggle="modal" data-bs-target="#Modalreportreply" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentcolor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                     <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                    </svg>
                                    </button>
                                    @if($reply->user_id==auth()->user()->id)
                                    <button type="submit"
                                        class=" bg-transparent  border-0 ms-2 text-black p-0 my-modal-trigger" value="{{$reply->id}}" data-id="{{$reply->id}}"data-bs-toggle="modal" data-bs-target="#replydelete" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
                                    </button>
                                    @endif
                                             </div>
                                             
                                         </div>
                                        </div>
                                    @endforeach
                                     
                                        <!-- reply form -->
                                        <div class="reply shadow-lg p-2 mb-4" id="reply-form-{{$comment->id}}" style="display:none;">
                                        <img src="{{asset(auth()->user()->img)}}" class="post-profile rounded-circle"  alt="">
                                               <strong>{{auth()->user()->username}}</strong>
                                            
                                               <form action="{{route('replies',$comment->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                               <textarea id="reply-form-{{$comment->id}}-text" class="bg-gray-100 rounded border-gray-400 leading-normal w-100 h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white border border-secondary"  name="reply"  required></textarea>
                                               <input type="submit" class="bg-white text-gray-700 font-medium py-1 px-4  border border-gray-400 rounded-lg tracking-wide mr-1 ms-3" value="Reply">

                                               </form>
                                               
                                            </div>
                                            <hr>
                                    
                              
                                    @endforeach
                                    
                                    
                                    
                                    <!-- </div> -->
                                    
                                    <!-- </div> -->
                        </div>
                        

                       

                       
                     
                    </div>      

                  
                </div>

                <!-- RIGHT SECTION -->
                <div class="col">
                <ul class="list-group shadow-lg">
                    <li class="list-group-item d-flex justify-content-center ">
                        <div class="ps-2 lh-1">
                            <div class="fw-bold fs-5">Random Posts</div>
                        </div>
                    </li>
                    @foreach($randomposts as $rpost )
                    @php
                    $postuserimg=App\Models\User::where('id',$rpost->user_id)->first();
                    @endphp
                    <li class="list-group-item d-flex">
                        <div class="">
                            <img src="{{asset($postuserimg->img)}}" height="30" width="30" class="rounded" alt="" srcset="">
                        </div>
                        <div class="ps-2">
                          <a href="{{url('user/display/post/'.$rpost->id)}}" > <div class="titles fw-bold text-black">{{$rpost->title}}</div></a>
                            <div class="text-secondary fw-light"><small>{{$rpost->post}}</small>
                            </div>
                        </div>
                    </li>

                    @endforeach
                   
                 
                </ul>
            </div>
      </div>

  </div>
  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script>
  
   $('.post-btn').click(function(e)
   { 
    // e.preventDefault();
    var postid=$(this).closest(".likeform").find('.idpost').val();
   var self=this;
    //  alert(postid);
   
$.ajax({
    type:'post',
    url:'/user/like-post',
    data:{
        postid:postid,_token:'{{csrf_token()}}'
    },
    success:function(response){
       if(response.msg=="liked")
       {
        
        // $('#likecount').html()={{$postcount}};
       $(self).closest(".post-btn").find('#postdis').attr('fill','lightblue');
    // alert(response.postcount);
    // $(self).closest(".post-btn").find('#postdis').removeClass('notliked');
    //    $(self).closest(".post-btn").find('#postdis').addClass('liked');
        $(self).closest(".post-btn").find('#likecount').html(response.postcount);
        
        
        }
        else if(response.msg=="disliked"){
            
            $(self).closest(".post-btn").find('#postdis').attr('fill','black');
            // $(self).closest(".post-btn").find('#postdis').removeClass('liked');
            // $(self).closest(".post-btn").find('#postdis').addClass('notliked');
            $(self).closest(".post-btn").find('#likecount').html(response.postcount);

        }
        

    },
    error:function(){
        alert("error");
    }
});
   
    }
   );
   


 function  reply(commentid,user){
    // alert(commentid);
    // alert(user);
    var x=document.getElementById(`reply-form-${commentid}`);
    var input=document.getElementById(`reply-form-${commentid}-text`);
if(x.style.display==="none")
{
    x.style.display="block";
    input.innerText=`@${user} `;
    
}
else{
    x.style.display="none";
}

   }


   function reportcomm(){
    var comid = $('#commId').val();
    
    var id = document.querySelector('input[name="radio"]:checked').value;
    

    
  

    $.ajax({
        type:'post',
        url:'/report-comment',
        data:{
            comment_id:comid,
            report_type:id,
            _token:'{{csrf_token()}}'
        },
        success: function(response) {
            if (response.msg == "liked") {

                //   tag.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill','lightblue');
                alert("lik");

                // send.closest(".post-btn").find('.postdis').attr('fill','lightblue');

                // send.closest(".post-btn").find('#likecount').html(response.postcount);



            } else if (response.msg == "disliked") {

                // tag.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill','black');
                alert("dis");





            }


        },
        error: function() { //error
            alert("error");
            // console.log(JSON.stringify(error));
        }
    });



    
   }


   function reportreply(){
    var replyid = $('#replyId').val();
    
    var id = document.querySelector('input[name="radio"]:checked').value;
 
    

    $.ajax({
        type:'post',
        url:'/report-reply',
        data:{
            reply_id:replyid,
            report_type:id,
            _token:'{{csrf_token()}}'
        },
        success: function(response) {
            if (response.msg == "liked") {

                //   tag.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill','lightblue');
                alert("lik");

                // send.closest(".post-btn").find('.postdis').attr('fill','lightblue');

                // send.closest(".post-btn").find('#likecount').html(response.postcount);



            } else if (response.msg == "disliked") {

                // tag.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill','black');
                alert("dis");





            }


        },
        error: function() { //error
            alert("error");
            // console.log(JSON.stringify(error));
        }
    });



    
   }

   



</script>
@include('modal.reportcomment')
@include('modal.report')
@include('modal.reportreply')
@include('modal.deletecomm')
@include('modal.deletereply')
@include('modal.imagedisplay')
@endsection