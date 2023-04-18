@extends('layouts.layout')

@section('content')
<style>
.card {
    border: 2px solid #000;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    overflow: hidden;
    color: white;
}

.card-title {
    font-family: 'Abril Fatface';
    font-style: normal;
    font-weight: 400;
    font-size: 3rem;
    line-height: 1rem;
    text-transform: uppercase;
    margin-top: 1rem;
    color: #5B3C11;
}

.imag {
    margin: auto;

}

.imageko {
    display: block;
    height: 100%;
}

.form-text {
    font-size: 10px;
}

.form-label {
    color: black;
    padding-right: 5px;
}

.form-control {
    width: 100%;
}

select {
    margin-top: -7px;
    border: none;
}
</style>
<div class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
    <div class="card w-100 p-4" style="max-width: 700px;">
        <div class="row g-0">
            <div class="imag col-md-6 p-5">
                <img class="imageko img-fluid" src="/images/signupimg.png">
            </div>
            <div class="col-md-6">
                <div class=" card-body">
                    <div class="text-center mt-2">
                        <h3 class="card-title">signup</h3>
                        <form class="mt-3 p-2" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-1 p-0">
                                <!-- <label for="username" class="form-label">Username </label> -->
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" name="name" aria-describedby="nameHelp">
                                <div class="form-text">@error('name') {{$message}} @enderror <br>
                                </div>
                            </div>
                            <div class="mb-1 p-0">
                                <!-- <label for="email" class="form-label">Email Address</label> -->
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="
                                    email" placeholder="Email" name="email" aria-describedby="emailHelp">
                                <div class="form-text">@error('email') {{$message}} @enderror <br>
                                </div>
                            </div>
                            <div class="mb-1 d-flex flex-row">
                                <label for="Role" class="form-label">Gender: </label>
                                <select name="gender">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="px-4"></div>
                                <label for="age" class="form-label">Age: </label>
                                <select id="age" name="age">
                                    <?php
                                        for ($i = 15; $i <= 90; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-1 d-flex flex-row">
                                <label for="Country" class="form-label">Country: </label>
                                <select name="country">
                                    <option value="Nepal">Nepal</option>
                                    <option value="India">India</option>
                                    <option value="China">China</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                            <div class="mb-1 p-0">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    id=" password" placeholder="Password" name="password" required
                                    autocomplete="new-password">
                                <div class="form-text">@error('password') {{$message}} @enderror <br>
                                </div>
                            </div>
                            <div class="mb-1 p-0">
                                <!-- <label for="password" class="form-label">Password</label> -->
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    id=" password-confirm" placeholder="Password Confirm" name="password_confirmation"
                                    required autocomplete="new-password">
                                <div class="form-text">@error('password') {{$message}} @enderror <br>
                                </div>
                            </div>
                            <button type="submit" class="primaryBtn">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection