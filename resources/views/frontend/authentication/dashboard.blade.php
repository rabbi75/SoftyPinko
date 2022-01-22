@extends('frontend.layouts.master')
@section('content')
<!-- ***** Register ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    
                    @if(session('errorMsg'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ session('errorMsg') }}</li>
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ session('success') }}</li>
                            </ul>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col">
                            <h3>Hi {{ $name }}!</h3>
                            <p>Welcome to the new dashboard!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Register Us End ***** -->
@endsection
