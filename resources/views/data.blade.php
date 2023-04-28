


@fragment('content')

@if(count($posts)>0)

                        @foreach($posts as $post)

                        @php
                        $postusername=App\Models\User::where('id',$post->user_id)->first();
                        $comments=App\Models\Comment::where('post_id',$post['id'])->get();
                        $postlen=$post->post;
                        
                 
                        @endphp
                        
                        <div class="post bg-white border-gray mt-4 shadow-lg">
                            <div class=" pt-2 d-flex justify-content-between">
                        
                                <div class="d-flex">
                                    <img src="{{asset($postusername->img)}}" class="post-profile rounded-circle" alt="">
                                    <div class="d-flex-column">
                                        <a href="{{route('userprofile',$postusername->id)}}">
                                        
                                            <span class="fw-bold fs-6 text-black titles text-capitalize">{{$postusername->username}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-2 text-gray-darker" >
                                    @if($postusername->id==auth()->user()->id)
                                <!-- <a id="edit-post" href="{{route('usereditPost',$post['id'])}}" >

                                        <button class="btn   p-1" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        </button>
                                        </a>
                                      
                                    <a href="{{route('userdeletePost',$post['id'])}}">

                                        <button class="btn  p-1" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 14 14">
                                            <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </a> --> 
                                <nav class="navbar navbar-dark navbar-expand-lg  p-1">
                       

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg></span>

            </a>



            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a id="edit-post" class="dropdown-item" href="{{route('usereditPost',$post['id'])}}" >
           
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg> Edit
                                       
                </a>
                <a class="dropdown-item text-danger" data-id="{{$post['id']}}"  data-bs-toggle="modal" data-bs-target="#postdelete">
               
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> Delete
                                 
                </a>
            </div>
        </li>

       
    </ul>
</div>
</nav>
                                @endif
                                </div>
                            </div>
                            <div class="post-body pt-2 ps-3">
                           
                                <div class="post-title fw-bold fs-5">
                                    <a href="{{url('user/display/post/'.$post->id)}}" class="text-black">
                                       <span class="titles text-capitalize"> {{$post['title']}} </span>
                                    </a>
                                </div>

                               @if(strlen($postlen)>200)
                               @php
                               $stringcut=substr($postlen,0,200);
                               $endpoint=strrpos($stringcut,' ');
                               $postlen=$endpoint?substr($stringcut,0,$endpoint):substr($stringcut,0);
                               @endphp
                                <div class="post-text p-1">
                                   {{$postlen}}...<a href="{{url('user/display/post/'.$post->id)}}" class="text-black fw-bold">Read More</a>
                                </div>
                                @else
                            
                                <div class="post-text p-1">
                                    {{$postlen}}
                                </div>
                                @endif
                            </div>
                            @if(!empty($post['img']))
                            <div class="post-image pt-2 " >
                                @php
                                $images=explode('|',$post['img'])
                                @endphp
                                
                                @foreach($images as $image)
                                 

                                       
                                    
                                        <img src="{{url('public/uploads/'.$image)}}"value="{{url('public/uploads/'.$image)}}" data-id="{{url('public/uploads/'.$image)}}"  data-bs-toggle="modal" data-bs-target="#displayimg" class="img-fluid w-100 h-100 gallery-items" alt="" style="object-fit:cover;" >

                                  
                                                          
                                 
                                    @endforeach
                              
                            </div>
                            @endif
                           
                            <div class="post-footer pt-3 py-4 d-flex align-items-center">
                                <div class="btn-group ps-2 " role="group">
                                    <span  class="likeform">
                                    <input type="hidden" class="idpost" name="postid" id="postid" >
                                   
                                    
                                  
                                    <button type="submit"
                                        class="left-btn post-btn bg-transparent border-0 text-black p-1" value="{{$post['id']}}" onclick="likebtn(this)">
                                        @php
                                        $postlike=App\Models\post_like::where('user_id',auth()->user()->id)->where('post_id',$post['id'])->get();
                                        $postcount=App\Models\post_like::where('post_id',$post['id'])->count();

                                        $postreport=App\Models\post_report::where('user_id',auth()->user()->id)->where('post_id',$post['id'])->get()
                                     
                                        
                                        @endphp
                                      
                                          
                                      
                                     
                                                                                                                                               
                                            @if($postlike->count()>0)
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="postdis" fill="lightblue"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path  d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg> <span class="likecount">{{$postcount}}</span> Like
                                    
                                        @else
                                  

                                      
      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="postdis" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path  d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg> <span class="likecount">{{$postcount}}</span> Like

                                      
                                        @endif
                                      
                                        

                                    </button>
                                    </span>
                                 
                                    <button type="button"
                                        class="  bg-transparent  border-0 ms-2 text-black p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                    </svg> {{Count($comments)}} Comments
                                    </button>
                                  
                                    @if($postreport->count()>0)
                                    <button type="submit" disabled
                                        class="report-btn  bg-transparent  border-0 ms-2 text-black p-1 my-modal-trigger"  >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="reportdis" fill="lightblue" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                     <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                    </svg>
                                    </button>
                                    @else
                                    <button type="submit"
                                        class="report-btn  bg-transparent  border-0 ms-2 text-black p-1 my-modal-trigger" value="{{$post['id']}}" data-id="{{$post['id']}}"  data-bs-toggle="modal" data-bs-target="#Modalreport">
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
                            </div>
                        </div>
                        @endforeach
                        
                        @endif
                        @include('modal.report')
                        @include('modal.postdelete')
                        @include('modal.imagedisplay')
                        @endfragment

                      
                        
     




 