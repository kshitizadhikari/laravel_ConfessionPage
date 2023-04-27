@extends('layouts.layout')

@section('content')
<style>
.loginCard {
    overflow: hidden;
}

.card {
    border: 2px solid #000;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    overflow: hidden;
    color: white;
}

.form-control {
    width: 15rem;
}

.imag {
    margin: auto;
    overflow: hidden;

}

.imageko {
    display: block;
    height: 100%;
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

.form-control {
    background: #E8E8E8;
}
</style>

<div class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="card w-100" style="max-width: 600px;">
        @if(Session::has('fail'))
        <div class="alert alert-danger m-0" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <div class="row  loginCard g-0">
            <!-- IMAGE PART -->
            <div class="imag col-md-6 p-5">
                <img class="imageko img-fluid" src="/images/koalaMeditate.png">
            </div>
            <!-- FORM PART -->
            <div class="col-md-6 cardKo">
                <div class=" card-body">
                    <div class="text-center mt-5">
                        <h3 class="card-title">login</h3>
                        <form class="mt-5 p-2" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-1 p-0">
                                <!-- <label for="email" class="form-label">Email Address</label> -->
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="
                                    email" placeholder="Email" name="email" aria-describedby="emailHelp">
                                <div class="form-text">@error('email') {{$message}} @enderror <br>
                                </div>
                            </div>

                            <div class="mb-1 p-0">
                                <!-- <label for="password" class="form-label">Password</label> -->
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    id=" password" placeholder="Password" name="password" required
                                    autocomplete="new-password">
                                <div class="form-text">@error('password') {{$message}} @enderror <br>
                                </div>
                            </div>
                            <!-- <div class="mb-1 p-0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-dark" for="remember">
                                        Remember Me
                                    </label>

                                </div>
                            </div> -->
                            <button class="primaryBtn">login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection