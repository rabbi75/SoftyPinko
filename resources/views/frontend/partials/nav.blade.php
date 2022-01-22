
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Softy Pinko"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('index') }}" class="active">Home</a></li>
                            <!-- <li><a href="{{ route('user-registration') }}">Register</a></li>
                            <li><a href="{{ route('user-login') }}">Login</a></li> -->
                            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                            <li><a href="{{ route('pricing-table') }}">Pricing Tables</a></li>
                            <li><a href="{{ route('blog') }}">Blog Entries</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            @if(auth()->user())
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                            @else
                            <li><a href="{{ route('user-registration') }}">Register</a></li>
                            <li><a href="{{ route('user-login') }}">Login</a></li>
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
