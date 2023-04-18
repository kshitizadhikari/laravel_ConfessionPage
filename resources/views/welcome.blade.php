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
    margin-bottom: 20px;
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
    /* height: 70vh; */
    align-items: center;
    justify-content: center;
    margin-top: 5rem;
    position: relative;
}

.conStyleText {
    position: absolute;
    z-index: 5;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 26px;
    letter-spacing: 0.34em;
    color: #FFFFFF;
}

.conText1 {
    position: absolute;
    top: -10rem;
    left: 4rem;
}

.conText2 {
    position: absolute;
    top: 7rem;
    left: 0;
    transform: rotate(-90deg);
}

.conText3 {
    position: absolute;
    top: -7rem;
    right: 5rem;
}

.conText4 {
    position: absolute;
    top: 14rem;
    left: 17rem;
    transform: rotate(-90deg);
}

.conText5 {
    position: absolute;
    top: 9rem;
    right: 3rem;
    transform: rotate(90deg);
}

.connectInfo {
    margin-top: -4rem;
    margin-bottom: 1rem;
}

.connectTitle {
    font-family: 'Abril Fatface';
    font-style: normal;
    font-weight: 400;
    font-size: 58px;
    line-height: 78px;
    text-align: center;
    text-transform: uppercase;
    color: white;
}

.connectText {
    margin-top: 1.5rem;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    text-align: center;
    letter-spacing: -0.015em;
    color: #EFC687;
}

.formBox {
    margin-top: 1.5rem;
    padding: 1rem;
    border: 2px solid #5b3c11;
}

.form-control {
    background-color: transparent;
    border-color: #EFC687;
}

.conBtn {
    display: flex;
    align-items: center;
    justify-content: center;

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
    <!-- dummy -->
    <!-- END HERO SECTION -->
</div>

<!-- BLACK STRIP -->
<div class="mainWrap1" style="height:15vh; background-color: black;">
    <div class="con" id="about"></div>
</div>
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
<div class="mainWrap1" style="height:15vh; background-color: black;">
    <div class="con" id="contact"></div>
</div>
<!-- END BLACK STRIP -->

<!-- TO Go To Connect Part -->
<div class="row" style="background: black; height:80vh;">
    <div class="container">
        <div class="connectWithUs">
            <div class="conStyleText conText1">
                <p>it's okay to BE YOURSELF !</p>
            </div>
            <div class="conStyleText conText2">
                <p>it's okay to HAVE FEELINGS !</p>
            </div>
            <div class="conStyleText conText3">
                <p>it's okay to MAKE MISTAKES !</p>
            </div>
            <div class="conStyleText conText4">
                <p>it's okay to ASK FOR HELP !</p>
            </div>
            <div class="conStyleText conText5">
                <p>it's okay to NOT BE OKAY !</p>
            </div>
            <div class="connectInfo">
                <div class="connectTitle">
                    CONNECT WITH US
                </div>
                <div class="connectText">
                    Share your experiences and find empathy from others<br> who have gone through similar struggles.
                </div>
            </div>
            <div class="connectForm">
                <div class="row justify-content-center position-relative" style="z-index: 1;">

                    <div class="col-lg-6">
                        <div class="bg rounded formBox">
                            <form action="{{ route('saveMessage') }}" method="post">
                                @csrf
                                <div class="row mt-0 mb-3 g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" required="required"
                                            placeholder="Your Name" style="height: 40px;" name="name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" required="required"
                                            placeholder="Your Email" style="height: 40px;" name="email">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" required="required"
                                            placeholder="Subject" style="height: 40px;" name="subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="4" required="required"
                                            placeholder="Message" name="message"></textarea>
                                    </div>

                                </div>
                                <div class="col-12 conBtn">
                                    <button class="primaryBtn py-2" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WHITE STRIP -->
<div class="mainWrap1" style="height:15vh; background-color: white;"></div>
<!-- END WHITE STRIP -->

<!-- UP BUTTON -->
<div class="text-right">
    <a class="btn btn-lg-square rounded-circle" href="#"><img class="icons1" src="/images/arrow-up-solid.svg"></a>
</div>
@endsection