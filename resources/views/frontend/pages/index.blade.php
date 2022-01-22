@extends('frontend.layouts.master')
@section('content')
<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>We provide the best <strong>strategy</strong><br>to grow up your <strong>business</strong></h1>
                    <p>Softy Pinko is a professional Bootstrap 4.0 theme designed by Template Mo
                    for your company at absolutely free of charge</p>
                    <a href="#features" class="main-button-slider">Discover More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                            </div>
                            <h5 class="features-title">Modern Strategy</h5>
                            <p>Customize anything in this template to fit your website needs</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                            </div>
                            <h5 class="features-title">Best Relationship</h5>
                            <p>Contact us immediately if you have a question in mind</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                            </div>
                            <h5 class="features-title">Ultimate Marketing</h5>
                            <p>You just need to tell your friends about our free templates</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->
@endsection
