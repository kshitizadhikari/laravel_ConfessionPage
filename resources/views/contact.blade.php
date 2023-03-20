<style>
.text-right {
    position: fixed;
    bottom: 20px;
    right: 20px;

    text-align: right;

}
</style>

@extends('layouts.app')

@section('content')
<!-- test -->
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px;">
            <h3 class="d-inline-block text-primary text-uppercase">Any Questions?</h3>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="bg-dark rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle  mb-3" style="width: 50px
                        ; height: 50px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-location-arrow text-dark" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0 text text-light">Kamalpokhari, Kathmandu, Nepal</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-dark rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle  mb-3" style="width: 50px
                        ; height: 50px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-phone text-dark" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0 text text-light"></i>+977 9841756060</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-dark rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle  mb-3" style="width: 50px
                        ; height: 50px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-envelope-open text-dark" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0 text text-light">kpk@gmail.com</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
            <div class="col-lg-8">
                <div class="bg-white rounded p-5 m-5 mb-0">
                    <form action="{{ route('saveMessage') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" required="required"
                                    placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" required="required"
                                    placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" required="required"
                                    placeholder="Subject" style="height: 55px;" name="subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="5" required="required"
                                    placeholder="Message" name="message"></textarea>
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
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Kamalpokhari, Kathmandu, Nepal
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>kpk@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i></i>+977 9841756060</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                    <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Newsletter</h4>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-light border-top border-secondary py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-primary" href="#">KPK</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<div class="text-right">
    <a href="#" class="btn btn-lg btn-outline-light btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


@endsection