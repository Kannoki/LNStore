<!doctype html>
<html lang="en">
    <head>
        <title>Gnoma</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('assets/images/ElainaChibi.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
            integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
            integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
            @livewireStyles
        </head>

    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="/"><img class="logo-navbar" src="{{ asset('assets/images/Book.png') }}" alt=""><span
                        class="sr-only">(current)</span></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Store</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="/store">Booklist</a>
                                <a class="dropdown-item" href="/cart">Cart</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><img class="profile_edit" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}">{{Auth::user()->name}}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a>
                                        <a class="dropdown-item" href="{{ route('admin.products') }}">Products</a>
                                        <a class="dropdown-item" href="{{ route('admin.contact') }}">Contact</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><img class="profile_edit" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}">{{Auth::user()->name}}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="{{ route('user.dashboard') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('register')}}">Register</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </nav>
        </header>

        {{ $slot }}

        <footer class="container page-footer font-small blue pt-4 bg-footer">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <img class="logo-footer" src="{{ asset('assets/images/Book.png') }}" alt="Gnoma">
                        <a href="mailto:Huy225dn@gmail.com" class="block" aria-describedby="a11y-external-message">
                            heythere@Gnoma.com
                        </a>
                        <address><span><i class="fas fa-map-marker-alt"></i></span> 155 Yên Khê 2, Phường Thanh Khê Đông,
                            Quận
                            Thanh Khê, TP.Đà Nẵng</address>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Information</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="About.php">About Us</a>
                            </li>
                            <li>
                                <a href="Contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="Store.php">Store</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Follow Us</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Facebook</a>
                            </li>
                            <li>
                                <a href="#!">Twitter</a>
                            </li>
                            <li>
                                <a href="#!">Instagram</a>
                            </li>
                            <li>
                                <a href="#!">Youtube</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright
                <span>Gnoma</span>
            </div>
            <!-- Copyright -->

        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets/Js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/Js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/Js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/Js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('assets/Js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/Js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/Js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/Js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/Js/functions.js') }}"></script>
        <script src="{{ asset('assets/Js/main.js') }}"></script>
        @livewireScripts
    </body>
</html>