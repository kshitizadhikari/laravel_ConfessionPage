@extends('layouts.adminLayout')
@section('admin-content')


<style>
.box1 {
    height: 100vh;
    width: 100%;
    align-items: center;
    justify-content: center;
}
</style>
<!-- report -->
<div class="box1">
    <div class="row">
        <div class="col-md-12 p-4 mt-2">
            <div class="row">
                <!-- TABLES -->
                <div class="col-lg-4">
                    <!-- USER TABLE -->
                    <h2 class="title-1 m-b-25 m-t-50 text-center">REPORT TABLE</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-dark table-striped table-hover">

                            <thead>
                                <tr>
                                    <th scope="col">UserID</th>
                                    <th scope="col">ReportCount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reportCount as $user)
                                <tr>
                                    <td>{{$user->user_id}}</td>
                                    <td>{{$user->report_count}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
@endsection