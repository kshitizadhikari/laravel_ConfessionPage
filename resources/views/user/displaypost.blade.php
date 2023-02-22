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
    </style>



    <div class="bg-light pt-4">
        <div class="container mb-5">
            <div class="row">
                <div id="left-list" class="col-2 d-flex flex-column">
                    <a href="" class="bg-second-color">
                        <span class="rounded">+</span>
                        <span>Create Group</span>
                    </a>

                    <a href="#">
                        <span class="position-relative me-auto">
                            <img src="{{asset('images/review6.png')}}" alt="">
                            <span
                                class="position-absolute top-0 start-50 translate-middle ms-2 p-1 bg-danger border border-light rounded-circle">

                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </span>
                        <span>Group 1</span>
                    </a>
                    <a href="">
                        <img src="{{asset('images/review6.png')}}" alt="">
                        <span>Group 2</span>
                    </a>
                    <a href="">
                        <img src="{{asset('images/review6.png')}}" alt="">
                        <span>Group 2</span>
                    </a>
                    <a href="">
                        <img src="{{asset('images/review6.png')}}" alt="">
                        <span>Group 2</span>
                    </a>
                </div>
                <!-- //middle part -->
                <div class="col-7">
                 
                    <!-- POSTS -->
                    <div class="posts">
                      
                       
                        <div class="post bg-white border-gray mt-4">
                            <div class=" pt-2 d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="{{asset('images/review6.png')}}" class="post-profile rounded-circle" alt="">
                                    <div class="d-flex-column">
                                    <a href="{{route('userprofile',auth()->user()->id)}}">
                                      <span class="fw-bold fs-6">{{auth()->user()->name}}</span>
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
                                 

                                       
                                    
                                        <img src="{{url($image)}}" class="img-fluid w-100 h-100" alt=""style="object-fit:cover;"  >

                                  
                                                          
                                 
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
                                        class="report-btn  bg-transparent  border-0 ms-2 text-black p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                                        <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                                        </svg>
                                    </button>

                                </div>
                            


                        <!-- COMMENT -->
                        <div class="comment h-100">
                            <div class="card">
                                <div class="card-header">
                                <p>Comments</p>

                                </div>
                                <div class="card-body">

                                    <div class=" pt-2 d-flex justify-content-between">
                                    <div class="d-flex">
                                    <img src="{{asset('images/review6.png')}}" class="post-profile rounded-circle" alt="">
                                    <div class="d-flex-column">
                                    <input type="text" style="min-width:130%" class=" form-control m-3 border-black text-black-dark rounded-pill bg-light ps-2 text-start" placeholder="Comment" name="comment">
                                    <button type="submit"></button>
                                    </div>
                                    </div>
                                
                                    </div>
                                    <div class="d-flex-column">

                                        <div class="othercomm  d-flex" style="align-items:center;gap:1rem;">
                                            <img src="{{asset('images/review6.png')}}" class="post-profile rounded-circle" alt="">
                                            <div class="d-flex-column">

                                                <div class="fw-bold fs-5">abc</div>
                                                <div class="comm" >hello this is a comment</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                    </div>

                  
                </div>

                <!-- RIGHT SECTION -->
            <div class="col">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <div class="ps-2 lh-1">
                <div class="fw-bold">Group to follow</div>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div class="">
                <img src="review6.png" height="20" width="20" class="rounded" alt="" srcset="">
              </div>
              <div class="ps-2 lh-1">
                <div class="fw-bold">Confession</div>
                <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small></div>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div class="">
                <img src="review6.png" height="20" width="20" class="rounded" alt="" srcset="">
              </div>
              <div class="ps-2 lh-1">
                <div class="fw-bold">Confession</div>
                <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small></div>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div class="">
                <img src="review6.png" height="20" width="20" class="rounded" alt="" srcset="">
              </div>
                <div class="ps-2 lh-1">
                            <div class="fw-bold">Confession</div>
                            <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small></div>
                            </div>
                        </li>
                    </ul>
                 </div>
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
   
</script>

@endsection