@extends('layouts.app')

@section('content')
<style>
.titles:hover {
    text-decoration: underline;

}

.post {
    resize: none;
}

/* input[type="radio"]
    {
        display:none;
    } */
.bg-second-color {
    background: #EFC687;
}
</style>




<div class="bg-light pt-4">
    <div class="container mb-5">
        <div class="row">
            <div id="left-list" class="col-2 d-flex flex-column">
                <a href="#" class="bg-second-color text-center mt-4">

                    <span class="text-black fw-bold " data-bs-toggle="modal" data-bs-target="#Modalpost">Create
                        Post</span>

                </a>
                <div class="shadow-lg mt-3 ">


                    <a href="{{route('login')}}" class="mt-3">
                        <!-- <span class="position-relative me-auto"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                        </svg>
                        <!-- <span
                            class="position-absolute top-0 start-50 translate-middle ms-2 p-1 bg-danger border border-light rounded-circle">

                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </span> -->
                        <span class="fs-6 fw-bold ms-3">Home</span>
                    </a>
                    <a href="{{route('userprofile',auth()->user()->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                        <span class="fs-6 fw-bold ms-3">Profile</span>
                    </a>
                </div>


            </div>
            <!-- //middle part -->




            <div class="col-7">
                <!-- USER POST -->
                <!-- <div class="new border border-gray shadow-lg">
                    
                    
                   
                    
                    
                    <img src="{{asset(auth()->user()->img)}}" class="post-profile rounded-circle" alt="">
                    <label for="Post">Do you want to share something ?</label>
                    
                    <div class="content">
                      
               
                  

                   
                    <form action="{{route('usersavePost')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                
                                <input type="text" style="min-width:90%"
                                    class="  m-3 border border-darker text-black-dark rounded-pill bg-light ps-2 p-1 text-start"
                                    placeholder="Title" name="postTitle">

                                <textarea style="min-width:90%"
                                    class=" post  m-3  border border-dark text-black-dark  rounded bg-light ps-2 text-start"
                                    placeholder="Enter Text" name="post" rows="8" cols="20"> </textarea>
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

                            <input type="submit" class="bg-secondary  text-gray-700  font-medium py-1 px-4  border border-gray-400 rounded-pill tracking-wide mr-1 ms-3" value="Create Post">
                            </div>
                        </div>
                    </form>
                
                    </div>
                    </div> -->


                <!-- POSTS -->
                <div class="posts" id="postadd">
                    @include('data')
                </div>

                <div class="ajax-load text-center" style="display:none;">
                    <div class="spinner-border text-secondary mt-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

            </div>

            <!-- RIGHT SECTION -->
            <div class="col mt-4">
                <ul class="list-group shadow-lg ">
                    <li class="list-group-item d-flex justify-content-center bg-second-color ">
                        <div class="ps-2 lh-1 ">
                            <div class="fw-bold  fs-5">Popular Posts</div>
                        </div>
                    </li>
                    @foreach($pposts as $ppost )
                    @php
                    $postinfo=App\Models\Post::where('id',$ppost->post_id)->first();
                    $userimg=App\Models\User::where('id',$postinfo->user_id)->first();
                    $popost=$postinfo->post;
                    if(strlen($popost)>50):

                    $stringcuts=substr($popost,0,50);
                    $endpoints=strrpos($stringcuts,' ');
                    $popost=$endpoints?substr($stringcuts,0,$endpoints):substr($stringcuts,0);
                    $popost=$popost.'..........';
                    else:
                    $popost=$postinfo->post;

                    endif;

                    @endphp

                    <li class="list-group-item d-flex">
                        <div class="">
                            <img src="{{asset($userimg->img)}}" height="25" width="25" class="rounded" alt="" srcset="">
                        </div>
                        <div class="ps-2">
                            <a href="{{url('user/display/post/'.$ppost->post_id)}}">
                                <div class="titles fw-bold text-black">{{$postinfo['title']}}</div>
                            </a>
                            <div class="text-secondary fw-light"><small>{{$popost}}</small>

                            </div>
                        </div>
                    </li>

                    @endforeach


                </ul>
                <ul class="list-group shadow-lg mt-4">
                    <li class="list-group-item d-flex justify-content-center bg-second-color ">
                        <div class="ps-2 lh-1">
                            <div class="fw-bold fs-5">Random Posts</div>
                        </div>
                    </li>
                    @foreach($randomposts as $rpost )
                    @php
                    $postuserimg=App\Models\User::where('id',$rpost->user_id)->first();
                    $randpost=$rpost->post;
                    if(strlen($randpost)>40):

                    $stringcut=substr($randpost,0,35);
                    $endpoint=strrpos($stringcut,' ');
                    $randpost=$endpoint?substr($stringcut,0,$endpoint):substr($stringcut,0);
                    $randpost=$randpost.'...........';
                    else:
                    $randpost=$rpost->post;

                    endif;
                    @endphp
                    <li class="list-group-item d-flex">
                        <div class="">
                            <img src="{{asset($postuserimg->img)}}" height="25" width="25" class="rounded" alt=""
                                srcset="">
                        </div>
                        <div class="ps-1">
                            <a href="{{url('user/display/post/'.$rpost->id)}}">
                                <div class="titles fw-bold text-black">{{$rpost->title}}</div>
                            </a>

                            <div class="text-secondary fw-light"><small>{{$randpost}}</small>
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
    function loadmoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: 'get',
                beforeSend: function() {
                    $(".ajax-load").show();
                }
            })
            .done(function(data) {
                console.log(data);
                if (data.html == "") {
                    $(".ajax-load").html("No more post found");
                    return;
                }


                $('.ajax-load').hide();
                $("#postadd").append(data.html);

            })
            .fail(function(jqXHR, ajaxOptions, throwError) {
                alert("server not responding....");
            })
    }
    var page = 1;
    $(window).scroll(function() {

        if ($(window).scrollTop() + $(window).height() + 1 >= $(document).height()) {
            page++;
            loadmoreData(page);
        }
    })
    </script>
    @include('modal.createpost')
    @endsection