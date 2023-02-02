<style>
.container {
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    column-gap: 10px;
    height: fit-content;
    width: 100%;
    border: 1px solid white;
    overflow: hidden;

}

.sidebar {
    width: 20%;
    border: 2px solid black;
    height: 80%;
}

.list-sideitems {
    padding: 10px;
}

.sideitem {
    padding: 10px;
    text-align: left;
    font-size: 1.3em;
}

.mainPart {
    width: 80%;
    border: 2px solid black;
    height: 80%;
}

.mainGrid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-template-rows: 200px 300px;
    grid-auto-flow: row;
    border: 2px solid orange;
    padding: 10px;
    grid-gap: 10px;
}

.item {
    border: 2px solid white;
    border-radius: 20px;
    text-align: center;
}


.piechart {
    grid-area: 2 / 1 / 4 / 5;
}

.tableko {
    border: 2px solid gold;
    padding: 20px;
}
</style>

@extends('layouts.app')
@section('content')

<div class="container pt-3">
    <!-- LEFT SECTION BEGIN -->
    <div class="sidebar">
        <div class="list-sideitems">
            <div class="sideitem">
                <a href="#" class="list-group-item">Dashboard</a>
            </div>
            <div class="sideitem">
                <a href="#" class="list-group-item">Admin Table</a>
            </div>
            <div class="sideitem">
                <a href="#" class="list-group-item">User Table</a>
            </div>
            <div class="sideitem">
                <a href="#" class="list-group-item">Therapist Table</a>
            </div>

        </div>
    </div>
    <!-- LEFT SECTION END -->

    <!-- MAIN SECTION BEGIN -->
    <div class="mainPart">
        <div class="heading p-3">
            <h1>Overview</h1>
        </div>
        <div class="mainGrid">
            <div class="item posts">
                <div class="text">

                    <h4> Posts</h4>
                </div>
            </div>
            <div class="item user">
                <div class="text">
                    <h4>{{ $userCount}} Users</h4>
                </div>
            </div>
            <div class="item reports">
                <div class="text">
                    <h4>1234 Reports</h4>
                </div>
            </div>
            <div class="item therapists">
                <div class="text">
                    <h4>1234 Therapists</h4>
                </div>
            </div>
            <div class="item piechart">Piechart .. Bargraph</div>
        </div>
        <!--  ADMIN TABLE  -->
        <div class="tableko admin mt-3">
            <h2 class="text-center">Admin Table</h2>
            <table class=" table table-dark table-striped">
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
        </div>
        <!--  USER TABLE  -->
        <div class="tableko user mt-3">
            <h2 class="text-center">User Table</h2>
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
                        <td><a href="{{route('adminedit', $user->id)}}">Edit</a></td>
                        <td><a href="{{route('admindelete', $user->id)}}">Delete</a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- MAIN SECTION END -->

    @endsection