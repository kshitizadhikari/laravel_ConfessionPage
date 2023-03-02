<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart', 'bar']
});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawBarChart);


function drawChart() {

    var data = google.visualization.arrayToDataTable([

        ['Gender', 'Count'],
        <?php echo $pieChartData; ?>
    ]);

    var options = {
        title: '',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}

function drawBarChart() {
    var data = google.visualization.arrayToDataTable([
        ["Country", "Population", {
            role: "style"
        }],
        <?php echo $barChartData; ?>
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        },
        2
    ]);

    var options = {
        title: "Population of User in Different Countries",
        width: 600,
        height: 400,
        bar: {
            groupWidth: "95%"
        },
        legend: {
            position: "none"
        },
    };
    var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
    chart.draw(view, options);
}
</script>

@extends('layouts.adminLayout')
@section('admin-content')

<div class="row">
    <div class="col-md-12 p-4">
        <div class="overview-wrap">
            <h2 class="title-1">overview</h2>
        </div>
    </div>
</div>
<div class="row m-t-25">
    <!-- USERS -->
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{$userCount}}</h2>
                        <span>USERS</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- POSTS -->
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <h2>{{$postCount}}</h2>
                        <span>POSTS</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- LIKES -->
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                        <h2>{{$likeCount}}</h2>
                        <span>LIKES</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- REPORTS -->
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>$1,060,386</h2>
                        <span>REPORTS</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- BARGRAPH -->
    <div class="col-lg-6">
        <div class="au-card recent-report">
            <div class="au-card-inner">
                <h3 class="title-2 tm-b-5">Users and Countries</h3>
                <div class="row no-gutters w-75">
                    <div id="barchart_values" class="ms-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PIE-CHART -->
    <div class="col-lg-6">
        <div class="au-card chart-percent-card">
            <div class="au-card-inner">
                <h3 class="title-2 tm-b-5">Gender Pie-Chart</h3>
                <div class="row no-gutters">
                    <div id="piechart" class="ms-5" style="width: 100%; height: 347px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- TABLES -->
    <div class="col-lg-9">
        <!-- ADMIN TABLE -->
        <h2 class="title-1 m-b-25">ADMIN TABLE</h2>
        <div class="table-responsive table--no-card">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allUser as $user)
                    @if($user->role == 1)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>#</td>
                        <td>#</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            {{$allUser->links()}}
        </div>
        <!-- USER TABLE -->
        <h2 class="title-1 m-b-25 m-t-50">USER TABLE</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allUser as $user)
                    @if($user->role == 0)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('admineditUser', $user->id)}}">Edit</a></td>
                        <td><a href="{{route('admindeleteUser', $user->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            {{$allUser->links()}}

        </div>
        <!-- POST TABLE -->
        <h2 class="title-1 m-b-25 m-t-50">POST TABLE</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Post</th>
                        <th scope="col">User_ID</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allPosts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->post}}</td>
                        <td>{{$post->user_id}}</td>
                        <td><a href="{{route('admindeletePostAdmin', $post->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$allPosts->links()}}
        </div>
    </div>
    <!-- COUNTRIES -->
    <div class="col-lg-3">
        <h2 class="title-1 m-b-25">Countries</h2>
        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
            <div class="au-card-inner">
                <div class="table-responsive">
                    <table class="table table-top-countries">
                        <tbody>
                            @foreach($userCountry as $val)
                            <tr>
                                <td>{{$val["country"]}}</td>
                                <td class="text-right">{{$val["count"]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-account-calendar"></i>26 April, 2018
                </h3>
                <button class="au-btn-plus">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
            <div class="au-task js-list-load">
                <div class="au-task__title">
                    <p>Tasks for John Doe</p>
                </div>
                <div class="au-task-list js-scrollbar3">
                    <div class="au-task__item au-task__item--danger">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--primary">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">02:00 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--success">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">03:30 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--danger js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                </div>
                <div class="au-task__footer">
                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-comment-text"></i>New Messages
                </h3>
                <button class="au-btn-plus">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
            <div class="au-inbox-wrap js-inbox-wrap">
                <div class="au-message js-list-load">
                    <div class="au-message__noti">
                        <p>You Have
                            <span>2</span>

                            new messages
                        </p>
                    </div>
                    <div class="au-message-list">
                        <div class="au-message__item unread">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">John Smith</h5>
                                        <p>Have sent a photo</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>12 Min ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item unread">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Nicholas Martinez</h5>
                                        <p>You are now connected on message</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>11:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Purus feugiat finibus</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Sunday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item js-load-item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item js-load-item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Purus feugiat finibus</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Sunday</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__footer">
                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                    </div>
                </div>
                <div class="au-chat">
                    <div class="au-chat__title">
                        <div class="au-chat-info">
                            <div class="avatar-wrap online">
                                <div class="avatar avatar--small">
                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                </div>
                            </div>
                            <span class="nick">
                                <a href="#">John Smith</a>
                            </span>
                        </div>
                    </div>
                    <div class="au-chat__content">
                        <div class="recei-mess-wrap">
                            <span class="mess-time">12 Min ago</span>
                            <div class="recei-mess__inner">
                                <div class="avatar avatar--tiny">
                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                </div>
                                <div class="recei-mess-list">
                                    <div class="recei-mess">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit non iaculis</div>
                                    <div class="recei-mess">Donec tempor, sapien ac viverra
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="send-mess-wrap">
                            <span class="mess-time">30 Sec ago</span>
                            <div class="send-mess__inner">
                                <div class="send-mess-list">
                                    <div class="send-mess">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit non iaculis</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="au-chat-textfield">
                        <form class="au-form-icon">
                            <input class="au-input au-input--full au-input--h65" type="text"
                                placeholder="Type a message">
                            <button class="au-input-icon">
                                <i class="zmdi zmdi-camera"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.
            </p>
        </div>
    </div>
</div>

@endsection