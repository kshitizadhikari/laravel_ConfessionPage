@extends('layouts.adminLayout')
@section('admin-content')

<div class="row">
    <div class="col-md-12 p-4 ">
        <div class="overview-wrap">
            <h2 class="title-1">Tables</h2>
        </div>
    </div>

    <div class="col-md-12 p-4">
        <div class="row">
            <!-- TABLES -->
            <div class="col-lg-12">
                <!-- ADMIN TABLE -->
                <h2 class="title-1 m-b-25 text-center">ADMIN TABLE</h2>
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
                            @foreach($admins as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>#</td>
                                <td>#</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$admins->appends(['users' => $users->currentPage(), 'allPosts' => $allPosts->currentPage()])->links()}}
                </div>
                <!-- USER TABLE -->
                <h2 class="title-1 m-b-25 m-t-50 text-center">USER TABLE</h2>
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
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('admineditUser', $user->id)}}">Edit</a></td>
                                <td><a href="{{route('admindeleteUser', $user->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->appends(['admins' => $admins->currentPage(), 'allPosts' => $allPosts->currentPage(),])->links()}}

                </div>
                <!-- POST TABLE -->
                <h2 class="title-1 m-b-25 m-t-50 text-center">POST TABLE</h2>
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
                                <td><a href="{{route('admindeleteUser', $post->id)}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$allPosts->appends(['admins' => $admins->currentPage(), 'users' => $users->currentPage(),])->links()}}

                </div>
            </div>

        </div>
    </div>

    @endsection