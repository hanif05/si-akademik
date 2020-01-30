<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('asset/front') }}/img/favicon.png" type="image/png">
    <title>EduSmart Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset/front') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('asset/front') }}/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('asset/front') }}/css/style.css">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    @include('layouts.includes.f_header')    
    <!--================ End Header Menu Area =================-->
    @yield('content')
    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                            required="" type="email">
                            <button class="click-btn btn btn-default">
                                <span>subscribe</span>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved | This template is
                    made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('asset/front') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('asset/front') }}/js/popper.js"></script>
    <script src="{{ asset('asset/front') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/front') }}/js/stellar.js"></script>
    <script src="{{ asset('asset/front') }}/js/countdown.js"></script>
    <script src="{{ asset('asset/front') }}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('asset/front') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('asset/front') }}/js/owl-carousel-thumb.min.js"></script>
    <script src="{{ asset('asset/front') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('asset/front') }}/vendors/counter-up/jquery.counterup.js"></script>
    <script src="{{ asset('asset/front') }}/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('asset/front') }}/js/gmaps.min.js"></script>
    <script src="{{ asset('asset/front') }}/js/theme.js"></script>
</body>

</html>