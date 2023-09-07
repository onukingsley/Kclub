@extends('layout')
@section('extracss')
    <link rel="stylesheet" href="{{asset('Disco//css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Disco//css/font-awesome.min.css')}}">
    <!--Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('Disco//css/owl.carousel.min.css')}}">
    <!-- Animated CSS -->
    <link rel="stylesheet" href="{{asset('Disco//css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('Disco//css/meanmenu.css')}}">
    <!-- magnific popup Css -->
    <link rel="stylesheet" href="{{asset('Disco//css/magnific-popup.css')}}">
    <!-- Theme CSS-->
    <link rel="stylesheet" href="{{asset('Disco//css/default.css')}}">
    <link rel="stylesheet" href="{{asset('Disco//css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('Disco//css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Disco//css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('Disco//img/favicon.webp')}}">
@endsection
    <!-- Hero Section -->
@section('navbar')
    @include('partials.navbar')
@endsection
@section('main')
    <div class="page-header" id="home">
        <div class="header-caption">
            <div class="header-caption-contant">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-caption-inner">
                                <h1>Events</h1>
                                <p><a href="#"> Home </a> // Events</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- Event Section -->
    <div class="event-area inner-padding2">
        <div class="container">
            <div class="row">
                <div class="col-12 foo">
                    <div class="section-title-area">
                        <h2 class="section-title">Upcoming Event</h2>
                        <div class="section-divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="left-box">
                        <div class="event-feature2">
                            <img src="{{asset('Disco/img/event-latest.webp')}}" alt="responsive img">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="right-box">
                        <div class="short-content">
                            <h4 class="event-name">{{$event->event_name}}</h4>
                            <p>{{$event->description}}</p>
                        </div>
                        <div class="upcoming">
                            <span class="is-countdown"></span>
                            <div data-countdown="{{$event->event_date}}"></div>
                        </div>
                        <div class="event-fee2">${{$event->ticketing}}</div>
                        <div class="event-btn-area">
                            <a href="/stripe/{{$event->id}}" class="btn btn-default btn-sm-field">Buy Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Event Section -->
    <!-- Popular Blog Section  -->
    <div class="popular-event-area inner-padding3">
        <div class="container">
            <div class="row">
                <div class="col-12 foo">
                    <div class="section-title-area">
                        <h2 class="section-title">Popolar Next Event</h2>
                        <div class="section-divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 foo">
                    <div class="popular-event">
                        <div class="event-feature2">
                            <img src="{{asset('Disco/img/popular-event-1.webp')}}" alt="responsive img">
                        </div>
                        <a href="#" class="event-name">demo title of upcoming event</a>
                        <div class="date-sticker2">10 December, 2021</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 foo">
                    <div class="popular-event">
                        <div class="event-feature2">
                            <img src="{{asset('Disco/img/popular-event-2.webp')}}" alt="responsive img">
                        </div>
                        <a href="#" class="event-name">demo title of upcoming event</a>
                        <div class="date-sticker2">10 December, 2021</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 foo">
                    <div class="popular-event">
                        <div class="event-feature2">
                            <img src="{{asset('Disco/img/popular-event-3.webp')}}" alt="responsive img">
                        </div>
                        <a href="#" class="event-name">demo title of upcoming event</a>
                        <div class="date-sticker2">10 December, 2021</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 foo">
                    <div class="popular-event">
                        <div class="event-feature2">
                            <img src="{{asset('Disco/img/popular-event-4.webp')}}" alt="responsive img">
                        </div>
                        <a href="#" class="event-name">demo title of upcoming event</a>
                        <div class="date-sticker2">10 December, 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Blog Section -->
    <!-- Footer Section -->

    <!-- Ends Footer Section -->
    <!-- Copyright Section -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="footer-copyright">&copy; Disco, 2021. Made with ❤️ by <a href="http://hasthemes.com/" target="_blank">HasThemes.</a></p>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="footer-social-link">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
    <!-- Ends Copyright Section -->
    <!-- Scripts -->
@section('extrastyle')
    <script src="{{asset("Disco/js/jquery-3.6.0.min.js")}}"></script>
    <script src="{{asset("Disco/js/jquery-migrate-3.3.2.min.js")}}"></script>
    <script src="{{asset("Disco/js/popper.js")}}"></script>
    <script src="{{asset("Disco/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("Disco/js/scrollreveal.min.js")}}"></script>
    <script src="{{asset("Disco/js/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("Disco/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("Disco/js/meanmenu.js")}}"></script>
    <script src='{{asset("Disco/js/countdown.js")}}'></script>
    <!-- Magnific Popup js -->
    <script src="{{asset("Disco/js/jquery.magnific-popup.min.js")}}"></script>
    <!-- Isotope Js -->
    <script src="{{asset("Disco/js/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("Disco/js/isotope_custom.js")}}"></script>
    <!-- Masonary Js -->
    <script src="{{asset("Disco/js/masonry.pkgd.min.js")}}"></script>
    <!-- jquery gridrotator js -->
    <script src="{{asset("Disco/js/modernizr-3.11.2.min.js")}}"></script>
    <script src="{{asset("Disco/js/jquery.gridrotator.js")}}"></script>
    <script src="{{asset("Disco/js/theme.js")}}"></script>
    @endsection
</body>


<!-- Mirrored from htmldemo.net/disco/disco/event.blade.php by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 14 Aug 2023 15:53:13 GMT -->
</html>
