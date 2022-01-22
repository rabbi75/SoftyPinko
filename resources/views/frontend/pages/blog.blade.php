@extends('frontend.layouts.master')
@section('content')
<!-- ***** Blog Start ***** -->
<section class="section" id="blog">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Blog Entries</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Integer molestie aliquam gravida. Nullam nec arcu finibus, imperdiet nulla vitae, placerat nibh. Cras maximus venenatis molestie.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="{{ asset('backend/img/'. $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="#">{{ $blog->title }}</a>
                        </h3>
                        <div class="text">
                        {{ $blog->description }}
                        </div>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Blog End ***** -->
@endsection
