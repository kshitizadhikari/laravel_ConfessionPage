@extends('layouts.app')

@section('content')





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
                <!-- USER POST -->
                <div class="new border border-gray">
                    <form action="{{route('usersavePost')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <img src="{{asset(auth()->user()->img)}}" class="profile rounded-circle" alt="">
                                <label for="Post">Do
                                    you want to share something ?</label>
                                <input type="text" style="min-width:90%"
                                    class="  m-3 border border-dark text-black-dark rounded-pill bg-light ps-2 text-start"
                                    placeholder="Title" name="postTitle">

                                <textarea style="min-width:90%"
                                    class="  m-3  border border-dark text-black-dark bg-light ps-2 text-start"
                                    placeholder="Enter Text" name="post" rows="10" cols="30"> </textarea>
                                <input type="hidden" value="{{ auth()->user()->id}}" name="user_id">
                            </div>
                        </div>
                        <div class="post-img ps-3">
                            <input type="file" name="file[]" id="file" multiple>

                            <label for="file" class="chooseimg me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                </svg>Choose a Picture</label>
                        </div>
                        <div class="row text-gray-darker pt-4 pb-2 ps-3 pe-4 ">
                            <div class="col text-center">

                                <button type="submit" class="border border-none w-100 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                    </svg>Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- POSTS -->
                <div class="posts" id="postadd">
                    @include('data')
                </div>

                <div class="ajax-load text-center" style="display:none;">
                    <img src="{{asset('images/loading-circle.gif')}}" alt="">
                    <p>Loading posts....</p>
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
                            <div class="fw-bold">Group</div>
                            <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="">
                            <img src="review6.png" height="20" width="20" class="rounded" alt="" srcset="">
                        </div>
                        <div class="ps-2 lh-1">
                            <div class="fw-bold">Group</div>
                            <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="">
                            <img src="review6.png" height="20" width="20" class="rounded" alt="" srcset="">
                        </div>
                        <div class="ps-2 lh-1">
                            <div class="fw-bold">Group</div>
                            <div class="text-secondary fw-light"><small> Lorem ipsum dolor sit amet........</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
      </div>

  </div>
  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script>


function loadmoreData(page) {
    $.ajax({
        url:'?page='+page,
        type:'get',
        beforeSend:function(){
            $(".ajax-load").show();
        }
    })
    .done(function(data){
        
        if(data.html=="")
        {
            $(".ajax-load").html("No more post found");
            return;
        }
        $('.ajax-load').hide();
        $("#postadd").append(data.html);
    })
    .fail(function(jqXHR,ajaxOptions,throwError){
        alert("server not responding....");
    })
   }
   var page=1;
   $(window).scroll(function(){
   
    if($(window).scrollTop()+$(window).height()>$(document).height()){
        page++;
        loadmoreData(page);
    }
})
</script>

@endsection