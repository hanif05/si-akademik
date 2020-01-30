@extends('layouts.frontApp')

@section('content')
<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <h2>
                            We Rank the Best <br>
                            Courses on the Web
                        </h2>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward than the building and launch
                            of
                            the space telescope known as the Hubble.
                        </p>
                        <div class="search_course_wrap">
                            <form action="" class="form_box d-flex justify-content-between w-100">
                                <input type="text" placeholder="Search Courses" class="form-control" name="username" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Search Courses'">
                                <button type="submit" class="btn search_course_btn">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->
<section class="feature_area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4">
                <div class="single_feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="lnr lnr-book"></span>
                    </div>
                    <div class="desc">
                        <h4>New Classes</h4>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward building and launch.
                        </p>
                    </div>
                </div>
                <div class="single_feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="fa fa-trophy"></span>
                    </div>
                    <div class="desc">
                        <h4>Top Courses</h4>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward building and launch.
                        </p>
                    </div>
                </div>
                <div class="single_feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-screen"></span>
                    </div>
                    <div class="desc">
                        <h4>Full E-Books</h4>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward building and launch.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Feature Area =================-->

<!--================ Start Department Area =================-->
<div class="department_area section_gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="dpmt_courses">
                    <div class="row">
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon1.png" alt="">
                                </div>
                                <h4>Languages</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon2.png" alt="">
                                </div>
                                <h4>Business</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon3.png" alt="">
                                </div>
                                <h4>Literature</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon4.png" alt="">
                                </div>
                                <h4>Software</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon5.png" alt="">
                                </div>
                                <h4>Design</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon6.png" alt="">
                                </div>
                                <h4>Coaching</h4>
                            </div>
                        </div>
                        <!-- single course -->
                        <div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{ asset('asset/front') }}/img/dpmt/icon7.png" alt="">
                                </div>
                                <h4>Development</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="dpmt_right">
                    <h1>Over 2500 Courses from 5 Platform</h1>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is
                        time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                    <p>It’s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that
                        it is time to buy that first telescope exciting is time to buy that first.</p>
                    <a href="#" class="primary-btn text-uppercase">Explore Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Department Area =================-->

<!--================ Start Popular Courses Area =================-->
<div class="popular_courses lite_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Popular Courses</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single course -->
            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="{{ asset('asset/front') }}/img-fluid w-100" src="{{ asset('asset/front') }}/img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="{{ asset('asset/front') }}/img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#"><i class="lnr lnr-user"></i>355</a>
                                </span>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a>
                                </span>
                            </div>
                            <div>
                                <span class="price">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single course -->
            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="{{ asset('asset/front') }}/img-fluid w-100" src="{{ asset('asset/front') }}/img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="{{ asset('asset/front') }}/img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price df_color1">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single course -->
            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="{{ asset('asset/front') }}/img-fluid w-100" src="{{ asset('asset/front') }}/img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="{{ asset('asset/front') }}/img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single course -->
            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="{{ asset('asset/front') }}/img-fluid w-100" src="{{ asset('asset/front') }}/img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="{{ asset('asset/front') }}/img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price df_color2">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Popular Courses Area =================-->

<!--================ Start Fact Area =================-->
<div class="fact_area overlay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Facts that Make us Unique</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon1.png" alt="">
                    </div>
                    <h4>Expert Mentors</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
                        consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon2.png" alt="">
                    </div>
                    <h4>25000+ Courses</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon3.png" alt="">
                    </div>
                    <h4>Student Membership</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
                        consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon4.png" alt="">
                    </div>
                    <h4>Lifetime Access</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec tetur adipisicing elit sed do eiusmod.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon5.png" alt="">
                    </div>
                    <h4>Source File Included</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec tetur adipisicing elit sed do eiusmod.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="{{ asset('asset/front') }}/img/f-icons/icon6.png" alt="">
                    </div>
                    <h4>Live Support</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
                        amet consec.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Fact Area =================-->

<!--================ Start Testimonial Area =================-->
<div class="section_gap testimonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="active_testimonial owl-carousel" data-slider-id="1">
                    <!-- single testimonial -->
                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="{{ asset('asset/front') }}/img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>

                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="{{ asset('asset/front') }}/img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>

                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="{{ asset('asset/front') }}/img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>

                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="{{ asset('asset/front') }}/img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>
                </div>

                <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="{{ asset('asset/front') }}/img-fluid" src="{{ asset('asset/front') }}/img/testimonial/t1.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="{{ asset('asset/front') }}/img-fluid" src="{{ asset('asset/front') }}/img/testimonial/t2.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="{{ asset('asset/front') }}/img-fluid" src="{{ asset('asset/front') }}/img/testimonial/t3.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="{{ asset('asset/front') }}/img-fluid" src="{{ asset('asset/front') }}/img/testimonial/t4.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Testimonial Area =================-->

<!--================ Start Registration Area =================-->
<div class="section_gap registration_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Register Now</h1>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                            exciting to think about setting up your own viewing station.</p>
                    </div>
                    <div class="col clockinner1 clockinner">
                        <h1 class="days">150</h1>
                        <span class="smalltext">Days</span>
                    </div>
                    <div class="col clockinner clockinner1">
                        <h1 class="hours">23</h1>
                        <span class="smalltext">Hours</span>
                    </div>
                    <div class="col clockinner clockinner1">
                        <h1 class="minutes">47</h1>
                        <span class="smalltext">Mins</span>
                    </div>
                    <div class="col clockinner clockinner1">
                        <h1 class="seconds">59</h1>
                        <span class="smalltext">Secs</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="register_form">
                    <h3>Courses for Free</h3>
                    <p>It is high time for learning</p>
                    <form class="form_area" id="myForm" action="mail.html" method="post">
                        <div class="row">
                            <div class="col-lg-12 form_group">
                                <input name="name" placeholder="Your Name" required="" type="text">
                                <input name="name" placeholder="Your Phone Number" required="" type="tel">
                                <input name="email" placeholder="Your Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                required="" type="email">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="primary-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Registration Area =================-->

<!--================ Start Events Area =================-->
<div class="events_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Upcoming Events</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        @if ($post)    
            <div class="row">
                @foreach ($post as $item)
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="single_event">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-5">
                                        <div class="event_thumb">
                                            <img src="{{ $item->getTumbnail() }}" alt="" style="width:263px;height:220px">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="event_details">
                                            <p>{{ $item->created_at->format('d M, yy') }} 
                                                <strong>
                                                    ({{ $item->created_at->diffForHumans() }})
                                                </strong>
                                            </p>
                                            <h4>
                                                <a href="{{ route('single.blog', $item->slug) }}"> {{ $item->title   }}</a>
                                            </h4>
                                            <p>{!! str_limit($item->content, 200) !!}.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
<!--================ End Events Area =================-->
@endsection