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
                    
                    <form id="contact" action="{{ route('registration') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Full Name" >
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="E-Mail Address" >
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" >
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="confirm_password">Confirm Password</label>
                                    <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Enter your confirm password" >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Register</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Register Us End ***** -->
@endsection
