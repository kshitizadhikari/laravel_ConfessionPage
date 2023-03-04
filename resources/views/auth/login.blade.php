@extends('layouts.app')

@section('content')
<style>
.container {
    height: 90vh;
}

.card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    overflow: hidden;
    color: white;
}

.form-control {
    width: 15rem;
}

.imag {
    margin: auto;

}

.imageko {
    display: block;
    height: 100%;
}
</style>

<div class="container d-flex justify-content-center align-items-center">

    <div class="card w-100" style="max-width: 600px;">
        @if(Session::has('fail'))
        <div class="alert alert-danger m-0" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <div class="row g-0">
            <div class="imag col-md-6 p-5">
                <img class="imageko img-fluid" src="/images/cat1.svg">
            </div>
            <div class="col-md-6 bg-dark">
                <div class=" card-body">
                    <div class="text-center mt-2">
                        <h3 class="card-title text-info">Login Form</h3>
                        <form class="mt-5 p-2" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3 p-0">
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
                            <div class="mb-3 p-0">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>

                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection