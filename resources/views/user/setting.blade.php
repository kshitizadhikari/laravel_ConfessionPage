@extends('layouts.app')

@section('content')


<div class="row mt-5">
    <div class="col-md-10 col-11 mx-auto">
        <div class="row">
            <!-- left side navbar -->
            <div class="col-lg-3 col-md-4 d-md-block">
                <div class="card bg-common card-left">
                    <div class="card-body">
                        <nav class="nav d-md-block d-none">
                            <a data-bs-toggle='tab' class="nav-link active" aria-current="page" href="#profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person mr-1" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>Profile
                            </a>
                            <a data-bs-toggle='tab' class="nav-link" aria-current="page" href="#account">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person mr-1" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>Account Settings
                            </a>
                            <a data-bs-toggle='tab' class="nav-link" href="#security">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person mr-1" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>Security
                            </a>


                        </nav>
                    </div>
                </div>
            </div>

            <!-- right-panel -->
            <div class="col-lg-9 col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-fill">
                            <li class="nav-item">
                                <a data-bs-toggle='tab' class="nav-link active" aria-current="page" href="#profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle='tab' class="nav-link" aria-current="page" href="#account">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>Account Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle='tab' class="nav-link" href="#security">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>Security
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- right part -->
                    <div class="card-body tab-content border-0">
                        <div class="tab-pane active" id="profile">
                            <h6>PROFILE INFORMATION</h6>
                            <hr>

                            <img src="{{asset(auth()->user()->img)}}" class="post-profile rounded-circle" alt="">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalAvatar"
                                class="btn btn-primary">Change Avatar</a>

                            <form action="{{route('usereditprofile.edit')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{auth()->user()->id}}">

                                <div class="mb-3">
                                    <label class="form-label">FULL NAME</label>
                                    <input type="text" class="form-control" name="names" placeholder="Name"
                                        value="{{auth()->user()->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email" placeholder="Name"
                                        value="{{auth()->user()->email}}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">AGE</label>
                                    <input type="text" class="form-control" name="age" value="{{auth()->user()->age}}"
                                        placeholder="age">
                                </div>
                                <input type="hidden" class="form-control" name="password" value="{{auth()->user()->password}}"
                                   >

                                <div class="mb-3">
                                    <label class="form-label">GENDER</label>
                                    <select name="gender" class="form-control" value="{{auth()->user()->gender}}">

                                        
                                        <option value="male">MALE</option>
                                        <option value="female">FEMALE</option>
                                        <option value="other">OTHER</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="gender" value="{{auth()->user()->gender}}"> -->


                                </div>
                                <div class="mb-3">
                                    <label class="form-label">COUNTRY</label>
                                    <input type="text" class="form-control" name="country" placeholder="Country"
                                        value="{{auth()->user()->country}}">

                                </div>

                                <br>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>

                        </div>
                        <div class="tab-pane" id="account">
                            <h6>ACCOUNT SETTINGS</h6>
                            <hr>
                            <form action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->username}}"
                                        id="exampleFormControlInput1" readonly>
                                </div>
                            </form>
                            <label for="exampleFormControlInput1" class="form-label text-danger">Delete
                                Account</label>
                            <p class="text-muted">
                                Once you delete your account,there is no going back.Please be certain
                            </p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalDelete"
                                class="btn btn-danger">Delete Account</a>



                        </div>

                        <div class="tab-pane" id="security">
                            <h6>SECURITY</h6>
                            <hr>

                            <form action="{{route('userchangepassword')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{auth()->user()->id}}">
                                <input type="hidden" class="form-control" name="names" value="{{auth()->user()->name}}">
                                <input type="hidden" class="form-control" name="age" value="{{auth()->user()->age}}">
                                <input type="hidden" class="form-control" name="email" value="{{auth()->user()->email}}">
                                <input type="hidden" class="form-control" name="gender" value="{{auth()->user()->gender}}">
                                <input type="hidden" class="form-control" name="country" value="{{auth()->user()->country}}">
                                <input type="hidden" class="form-control" name="pass" value="{{auth()->user()->password}}">




                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" name="oldpass" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="newpass" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="passconfirm" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
@include('modal.deleteuser')
@include('modal.avatarchange')

@endsection