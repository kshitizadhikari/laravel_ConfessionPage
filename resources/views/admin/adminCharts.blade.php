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
    <div class="col-md-12 p-4 mt-5 ">
        <div class="overview-wrap">
            <h2 class="title-1 ">Charts</h2>
        </div>
    </div>

    <div class="col-md-12 p-4">
        <div class="row">
            <!-- BARGRAPH -->
            <div class="col-lg-12">
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
        </div>
        <div class="row"></div>
        <!-- PIE-CHART -->
        <div class="col-lg-12">
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

</div>

</div>
</div>

@endsection