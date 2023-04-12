@extends('layouts.layout')

@section('content')

<style>
.text-right {
    position: fixed;
    bottom: 15px;
    right: 20px;
    text-align: right;

}

.heroSection {
    margin-bottom: 22px;
}

.info1 {
    height: 70vh;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 46px;
    text-align: center;
    letter-spacing: 0.1em;

    color: #000000;
}

/* CONNECT WITH US */
.connectWithUs {
    display: flex;
    flex-direction: column;
    height: 70vh;
    align-items: center;
    justify-content: center;
    margin-top: 5rem;
}

.connectTitle {
    font-family: 'Abril Fatface';
    font-style: normal;
    font-weight: 400;
    font-size: 58px;
    line-height: 78px;
    text-align: center;
    text-transform: uppercase;
    color: black;
}

.connectText {

    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 31px;
    text-align: center;
    letter-spacing: -0.015em;
    color: #EFC687;
}
</style>
<div class="container">
    <!-- HERO SECTION -->
    <div class="heroSection">
        <div class="row">
            <div class="col">
                <div class="heroInfo">
                    <div class="heroTitle">
                        confess and<br>
                        connect
                    </div>
                    <div class="heroText">
                        Share your experiences and find empathy from others who have gone through similar struggles.
                    </div>
                    <button class="heroBtn">share your story</button>
                </div>
            </div>
            <div class="col">
                <div class="heroImg">
                    <img src="images/heroimg.png" class="img-fluid" alt="heroImage">
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO SECTION -->
</div>

<!-- BLACK STRIP -->
<div class="mainWrap1" id="about" style="height:15vh; background-color: black;"></div>
<!-- END BLACK STRIP -->

<!-- ABOUT -->
<div class="container">
    <div class="info1">
        <p>Confessing can be a transformative experience. Take <br>
            the first step towards personal growth by <br>
            sharing your story with us.</p>
    </div>
</div>

<!-- BLACK STRIP -->
<div class="mainWrap1" style="height:15vh; background-color: black;"></div>
<!-- END BLACK STRIP -->

<!-- TO Go To Connect Part -->
<div class="con" id="contact"></div>
<div class="container">
    <div class="connectWithUs">
        <div class="connectInfo">
            <div class="connectTitle">
                CONNECT WITH US
            </div>
            <div class="connectText">
                Share your experiences and find empathy from others who have gone through similar struggles.
            </div>
        </div>
        <div class="connectForm">
            <div class="row justify-content-center position-relative" style="z-index: 1;">
                <div class="col-lg-6">
                    <div class="bg rounded p-3 border border-warning">
                        <form action="{{ route('saveMessage') }}" method="post">
                            @csrf
                            <div class="row mt-0 mb-3 g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border border-warning"
                                        required="required" placeholder="Your Name" style="height: 40px;" name="name">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border border-warning"
                                        required="required" placeholder="Your Email" style="height: 40px;" name="email">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border border-warning"
                                        required="required" placeholder="Subject" style="height: 40px;" name="subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border border-warning" rows="5"
                                        required="required" placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BLACK STRIP -->
<div class="mainWrap1" style="height:15vh; background-color: black;"></div>
<!-- END BLACK STRIP -->

<!-- UP BUTTON -->
<div class="text-right">
    <a class="btn btn-lg-square rounded-circle" href="#"><img class="icons1" src="/images/arrow-up-solid.svg"></a>
</div>
@endsection