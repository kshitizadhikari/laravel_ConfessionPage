@extends('layouts.adminLayout')
@section('admin-content')

<style>
.container {
    margin-top: 20px;
}

.card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    overflow: hidden;
    color: white;
}

.form-input {
    display: flex;
}

.form-control {
    width: 15rem;
}
</style>
<div class="row">

    <div class="col-md-12 p-4 mt-5">
        <div class="container">
            <div class="card w-100" style="max-width: 100%;">
                <div class="row g-0 bg-dark">
                    <div class="text-center mt-2 p-4">
                        <h3 class="card-title text-info">Admin
                            Profile</h3>
                    </div>
                    <div class="col-md-7">
                        <div class=" card-body">
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Name : </label>
                                <label class="form-label p-2">{{Auth::user()->name}}</label>
                            </div>
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Username : </label>
                                <label class="form-label p-2">{{Auth::user()->username}}</label>
                            </div>
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Email : </label>
                                <label class="form-label p-2">{{Auth::user()->email}}</label>
                            </div>
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Age : </label>
                                <label class="form-label p-2">{{Auth::user()->age}}</label>
                            </div>
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Gender : </label>
                                <label class="form-label p-2">{{Auth::user()->gender}}</label>
                            </div>
                            <div class="mb-3 p-0 form-input">
                                <label class="form-label p-2">Country : </label>
                                <label class="form-label p-2">{{Auth::user()->country}}</label>
                            </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label p-2">Profile Picture : </label>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection