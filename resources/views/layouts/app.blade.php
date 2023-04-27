<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="-viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font: inherit;
    }

    .container-fluid {
        height: fit-content;
    }

    .user-pic {
        width: 30px;
        border-radius: 50%;
        margin-left: 30px;
    }

    .menu-pic {
        width: 30px;
        border-radius: 50%;
        margin-left: 5px;
    }

    .line {
        border: 0;
        height: 1px;
        width: 100%;
        background: #ccc;
        margin: 15px 0 10px;

    }
    </style>
    <title>KPK Confession</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="header">
        @guest

        <nav class="navbar navbar-dark navbar-expand-lg bg-dark p-2">
            <a class="navbar-brand" href="{{route('login')}}">KPK</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto">




                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif


                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}} ">Contact Us</a>
                    </li>
                    @endif




                    @else
                    <nav class="navbar navbar-dark navbar-expand-lg bg-dark p-2">
                        <a class="navbar-brand" href="{{route('login')}}">KPK</a>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ms-auto">

                                <li class="nav-item dropdown">

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{asset(auth()->user()->img)}}" class="user-pic" alt="">
                                        <span style="font-weight:200;">{{Auth()->user()->username}}</span>

                                    </a>



                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('userprofile',auth()->user()->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                            </svg> My profile
                                        </a>
                                        <a class="dropdown-item" href="{{route('usersettings',auth()->user()->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                <path
                                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg> Settings
                                        </a>


                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box-arrow-in-right"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                                <path fill-rule="evenodd"
                                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                                @endguest
                            </ul>
                        </div>
                    </nav>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
</body>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script>
function likebtn(ae) {


    //  console.log('hello');
    var send = ae.getAttribute('value');
    $('#postid').val(send);


    var postid = $('#postid').val();
    console.log(postid);


    // var postid=$(this).closest(".likeform").find('.idpost').val();



    $.ajax({
        type: 'post',
        url: '/user/like-post',
        data: {
            postid: postid,
            _token: '{{csrf_token()}}'
        },
        success: function(response) {
            if (response.msg == "liked") {

                ae.closest('.post-btn').getElementsByClassName('postdis')[0].setAttribute('fill',
                    'lightblue');

                // send.closest(".post-btn").find('.postdis').attr('fill','lightblue');
                ae.closest('.post-btn').getElementsByClassName('likecount')[0].innerHTML = response
                    .postcount;
                // send.closest(".post-btn").find('#likecount').html(response.postcount);



            } else if (response.msg == "disliked") {

                ae.closest('.post-btn').getElementsByClassName('postdis')[0].setAttribute('fill', 'black');

                ae.closest('.post-btn').getElementsByClassName('likecount')[0].innerHTML = response
                    .postcount;



            }


        },
        error: function() {
            alert("error");
        }
    });



}

function reportbtn(ae) {




    console.log(ae);
    var send = ae.getAttribute('value');
    $('#postid').val(send);


    var postid = $('#postid').val();
    console.log(postid);



    // var postid=$(this).closest(".likeform").find('.idpost').val();



    $.ajax({
        type: 'post',
        url: '/report-post',
        data: {
            postid: postid,
            _token: '{{csrf_token()}}'
        },
        success: function(response) {
            if (response.msg == "liked") {

                ae.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill',
                    'lightblue');

                // send.closest(".post-btn").find('.postdis').attr('fill','lightblue');

                // send.closest(".post-btn").find('#likecount').html(response.postcount);



            } else if (response.msg == "disliked") {

                ae.closest('.report-btn').getElementsByClassName('reportdis')[0].setAttribute('fill',
                    'black');





            }


        },
        error: function() { //error
            alert("error");
            // console.log(JSON.stringify(error));
        }
    });

}




$('#Modalreport').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    // var btn=event.relatedTarget; // Button that triggered the modal
    var id = button.data('id'); // Extract info from data-* attributes
    var modal = $(this);
    // buttonht=btn.outerHTML;

    modal.find('#inputId').val(id);

    // modal.find('#inptag').val(buttonht);
    // console.log(id);
    // console.log(buttonht);
})

$('#postdelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);

    var id = button.data('id');

    var modal = $(this);


    modal.find('#inputid').val(id);


})

$('#commentdelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);

    var id = button.data('id');

    var modal = $(this);


    modal.find('#deletecommentid').val(id);


})

$('#replydelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);

    var id = button.data('id');

    var modal = $(this);


    modal.find('#deletereplyid').val(id);


})


$('#Modalreportcomm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    // var btn=event.relatedTarget; // Button that triggered the modal
    var id = button.data('id'); // Extract info from data-* attributes
    var modal = $(this);
    // buttonht=btn.outerHTML;

    modal.find('#commId').val(id);

    // modal.find('#inptag').val(buttonht);
    // console.log(id);
    // console.log(buttonht);
})

$('#Modalreportreply').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    // var btn=event.relatedTarget; // Button that triggered the modal
    var id = button.data('id'); // Extract info from data-* attributes
    var modal = $(this);
    // buttonht=btn.outerHTML;

    modal.find('#replyId').val(id);

    // modal.find('#inptag').val(buttonht);
    // console.log(id);
    // console.log(buttonht);
})




function report() {



    var postid = $('#inputId').val();
    var id = document.querySelector('input[name="radio"]:checked').value;




    // console.log(postid);// Extract info from data-* attributes
    // Do something with the button or the ID


    $.ajax({
        type: 'post',
        url: '/report-post',
        data: {
            postid: postid,
            report_type: id,
            _token: '{{csrf_token()}}'
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

</html>