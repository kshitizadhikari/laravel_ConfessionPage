<style>
.edit-container {
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.formko {
    width: 30vw;
    border: 2px solid black;
    border-radius: 0.75rem;
    background-color: #CCC8C8;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    padding: 20px 40px;
    margin-top: -50px;
}

.form-control {
    /* position: absolute; */
    width: 20vw;
    border: 1px solid black;
}

.form-control.date {
    width: 10rem;
}
</style>

@extends('layouts.adminLayout')
@section('admin-content')
<div class="edit-container mt-5">
    <!-- FORM KO SECTION -->
    <section class="formko bg-dark">
        <div class="h2 text-center text-primary p-3">USER EDIT FORM</div>
        <form action="{{ route('adminadminUpdate')}}" method="post"
            oninput='passwordcheck.setCustomValidity(passwordcheck.value != password.value ? "Passwords do not match." : ""), password.setCustomValidity(password.value.length <= 7 ? "Password must be atleast 8 characters long." : "")'>
            @csrf
            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
            <div class="mb-3">
                <label class="form-label text-light">Enter New Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{$data->name}}">
                <div class="form-text">@error('name') {{ $message }} @enderror</div>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Enter New Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{$data->email}}">
                <div class="form-text">@error('email') {{ $message }} @enderror</div>

            </div>
            <div class="mb-3">
                <label class="form-label text-light">Enter new Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                <div class="form-text">@error('password') {{ $message }} @enderror</div>

            </div>
            <div class="mb-3">
                <label class="form-label text-light">Re-enter new Password</label>
                <input type="password" class="form-control @error('passwordcheck') is-invalid @enderror"
                    name="passwordcheck">
                <div class="form-text">@error('passwordcheck') {{ $message }} @enderror</div>

            </div>
            <div class="mb-3">
                <label for="Role" class="form-label text-light">Select Role</label>
                <select name="role">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                    <!-- <option value="2">Therapist</option> -->
                </select>
            </div>
            <div class="btn d-flex justify-content-center">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </section>
</div>

@endsection