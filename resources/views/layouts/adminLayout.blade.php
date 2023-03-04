<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart', 'bar']
});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawBasic);


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

function drawBasic() {

    var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population', ],
        ['New York City, NY', 8175000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
    ]);

    var options = {
        title: 'Population of Largest U.S. Cities',
        chartArea: {
            width: '50%'
        },
        hAxis: {
            title: 'Total Population',
            minValue: 0
        },
        vAxis: {
            title: 'City'
        }
    };

    var chart1 = new google.visualization.BarChart(document.getElementById('bargraph1'));

    chart1.draw(data, options);
}
</script>

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

    <!-- assets CSS-->
    <link href="{{ asset('assets/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{ asset('assets/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">''

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>KPK Confession</title>
    @vite(['resources/js/app.js'])
</head>


<body>
    <div class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="images/icon/logo.png" alt="KPK LOGO" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="chart.html">
                                    <i class="fas fa-chart-bar"></i>Charts</a>
                            </li>
                            <li>
                                <a href="{{route('adminadminTables')}}">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-check-square"></i>Forms</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('assets/images/icon/logo.png')}}" alt="KPK Logo" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">

                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="{{route('adminadminHome')}}">
                                    <i class="fas fa-home"></i></i>Dashboard</a>
                                <!-- <i class="fas fa-tachometer-alt"></i>Dashboard</a> -->
                            </li>
                            <li>
                                <a href="{{route('adminadminCharts')}}">
                                    <i class="fas fa-chart-bar"></i>Charts</a>
                            </li>
                            <li>
                                <a href="{{route('adminadminTables')}}">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">

                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap d-flex flex-row-reverse">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('assets/images/icon/avatar-01.jpg')}}" alt="UserImg" />
                                        </div>
                                        <div class="content">
                                            <a href="#">{{Auth::user()->name}}</a>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('assets/images/icon/avatar-01.jpg')}}"
                                                            alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('adminAccountView')}}">
                                                        <i class="fas fa-user"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="fas fa-cog"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END HEADER DESKTOP -->
                <!-- MAIN CONTENT-->
                <div class="main-content p-0">
                    <div class="section__content section__content--p20">
                        <div class="container-fluid">
                            @yield('admin-content')
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="{{ asset('assets/jquery-3.2.1.min.js')}}"></script>

        <!-- Bootstrap JS> -->
        <script src="{{ asset('assets/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{ asset('assets/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/slick/slick.min.js')}}"></script>
        <script src="{{ asset('assets/wow/wow.min.js')}}"></script>
        <script src="{{ asset('assets/animsition/animsition.min.js')}}"></script>
        <script src="{{ asset('assets/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{ asset('assets/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{ asset('assets/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{ asset('assets/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/select2/select2.min.js')}}"></script>

        <!-- Main JS-->
        <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>