@extends('website.index')
@section('website_main_section')
    <style>
        .owl-carousel .item {
            height: 10rem;
            /*background: #4DC7A0;*/
            padding: 1rem;
        }
        .owl-carousel .item h4 {
            color: #FFF;
            font-weight: 400;
            margin-top: 0rem;
        }
    </style>

    <!-- content start -->

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center coursetitle">
        <div class="container">
            <div class="breadcrumb-inner">
                <h4 class="">Academic</h4>
                <h2 class="page-title">{{$department->department_name}}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- chairperson section -->
    <div class="main-blog-area pd-top-100 pd-bottom-90 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="bg-base color-white text-line-height">Welcome to {{$department->department_name}}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 pd-10">
                    <div class="course-details-page">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="thumb">
{{--                                    <img src="{{asset('/assets/images/dean.jpg')}}" alt="img">--}}
                                    <img src='{{URL::asset("img/backend/teacher_staff/$department->teacher_id")}}.jpg' alt="img">
                                </div>
                            </div>
                            <div class="col-lg-8 align-self-center">
                                <div class="details">
                                    <h3 class="mb-1">Chairperson Message</h3>
                                    <hr>
                                    <h4 class="name">{{$department->teacher_name}}</h4>
                                    <p class="faculty-name">{{$department->faculty_name}}</p>
                                    <p class="designation">Chairperson</p>
                                    <p class="department-name">{{$department->department_name}}</p>

                                    <ul class="social-media style-base pt-4">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="line-height: 32px;"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="line-height: 32px;"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="line-height: 32px;"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="line-height: 32px;"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="row pd-top-20">
                            <div class="col-lg-12">
                                @if(isset($message))
                                <p class="text-justify">{{$message->chairperson}}...</p>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <div class="align-self-lg-end text-right pd-top-20">
                                    <a class="btn btn-border-base b-animate-3 text-right" href="">Read More</a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-3 col-12 pd-10">
                    <div class="td-sidebar pd-10 bg-gray">
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">{{$department->department_name}}</h4>
                            <ul class="catagory-items">
                                <li><a href="/frontend/department_wise_faculty/{{$department->id}}"><i class="fa fa-angle-right"></i>Faculty member</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Academic > Program</a></li>
                                <li><a href="/frontend/department_wise_tution/{{$department->id}}"><i class="fa fa-angle-right"></i>Tution Fees</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Publications</a></li>
                                <li><a href="/frontend/student_advisor/{{$department->id}}"><i class="fa fa-angle-right"></i>Student Advisor</a></li>
                                <li><a href="/frontend/former_head/{{$department->id}}"><i class="fa fa-angle-right"></i>Former Head</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Officer</a></li>
                                <li><a href="/frontend/schollership/{{$department->id}}"><i class="fa fa-angle-right"></i>Schollership</a></li>
                                <li><a href="/frontend/activities/{{$department->id}}"><i class="fa fa-angle-right"></i>Activities</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Awards & Honours</a></li>
                                <!-- Awards & Honours> Research Award, Service Award, Teaching Award -->
                                <li><a href="#"><i class="fa fa-angle-right"></i>Annoucement</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Alumni</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Lab Facilities</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>
    <!-- end chairperson section -->



    <!-- start news & event section -->
    <div class="blog-area pd-top-70 pd-bottom-70 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 ">
                    <div class="section-title text-left ">
                        <!-- <h5 class="sub-title">Latest News</h5> -->
                        <h2 class="title text-before-left">Latest News</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="section-title text-right ">
                        <!-- <h5 class="sub-title">Latest News</h5> -->
                        <h2 class="title text-before-right">Latest Notice</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="news scroller">
{{--                            @php--}}
{{--                               // dd($news);--}}
{{--                            @endphp--}}
                            @if($news->isNotEmpty())
                                @foreach($news as $news_list)
                                    <div class="row individual_news">
                                        <div class="col-md-2 float-left">
{{--                                            <img src="{{asset('/assets/images/News_test.jpg')}}" alt="">--}}
                                            <img src='{{URL::asset("$news_list->image")}}' alt="">
                                        </div>
                                        <div class="col-md-10 float-right ml-6">
                                            <h5 class="text-left news-title"><a href="">{{$news_list->title}}</a>
                                            </h5>
                                            <hr>
{{--                                            <p><i class="fa fa-calendar"></i> {{$news_list->created_at}}</p>--}}
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h5 class="text-center news-title">NO NEWS TO SHOW</h5>
                            @endif

                        </div>
                        <div class="text-right mg-top-25">
                            <a class="btn btn-border-base b-animate-3 " href="">Read All News</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 pd-bottom-40">
                    <div class="news-slider slider-control-square owl-carousel">
                        @if($notice->isNotEmpty())
                            @foreach($notice as $notice_list)
                                <div class="col-md-12 no-padding-margin">
                                    <div class="single-blog-inner">
                                        <div class="thumb">
                                            <img src="{{asset('/assets/frontend/assets/img/blog/1.png')}}" alt="img">
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">{{$notice_list->title}}</a>
                                            </h4>
                                            <p>{{$notice_list->Notice}}</p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i> &nbsp;{{$notice_list->created_at}} </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h5 class="text-center news-title">NO Notice TO SHOW</h5>
                        @endif

                    </div>
                    <div class="text-right mgtop">
                        <a class="btn btn-border-base b-animate-3 " href="">Read All Notice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--News & event section end-->


    <!-- faculty-members -->
    <div class="faculty-members pd-top-70 pd-bottom-70">
        <div class="container">
            <div class="row text-center mg-bottom-40">
                <div class="col-lg-12">
                    <h1 class="title ">Faculty Member</h1>
                    <p>Our honorable faculty members. They are continuously contributing.</p>
                </div>
            </div>
            <div class="row dept-faculty-member-slider slider-control-square owl-carousel">

                                @foreach($teacher_info as $teacher_info_list)
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="single-team-inner text-center">
                                            <div class="thumb">
                                                <img src='{{URL::asset("img/backend/teacher_staff/$teacher_info_list->teacher_id")}}.jpg' alt="img">
                                            </div>
                                            <div class="details">
                                                <h5><a href="individual-faculty-members.html">{{$teacher_info_list->teacher_name}}</a></h5>
                                                <p>{{$teacher_info_list->designation}}</p>
                                                <ul class="social-media">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="line-height:27px;"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="line-height:27px;"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="line-height:27px;"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="line-height:27px;"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="pd-20">
                                                    <div class="row">
                                                        <div class="col-12 text-md-center text-center">
                                                            <a class="btn bg-light b-animate-3" href="/frontend/faculty_profile/{{$teacher_info_list->teacher_id}}">View
                                                                Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

            </div>
        </div>
    </div>
    <!-- end faculty-members -->

    <!-- gallery -->
    <div class="course-area pd-top-115 pd-bottom-90 bg-parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title style-white text-md-left text-left">
                        <!-- <h5 class="sub-title">New Courses</h5> -->
                        <h2 class="title">Gallery</h2>
                    </div>
                    <div class="course-slider slider-control-square owl-carousel">
                        @foreach($gallery as $gallery_list)
                            <div class="item col-lg-12">
                                <div class="single-course-inner">
                                    <div class="">
                                        <img src='{{URL::asset("$gallery_list->image")}}' alt="img">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-1 color-white">Why study in {{$department->department_name}}?</h3>
                    <hr>
                    @if(isset($message))
                    <p class="text-justify color-white">{{$message->study}}</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

    <!-- event -->
    <div class="event pd-top-70 pd-bottom-90 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 ">
                    <div class="section-title text-left ">
                        <h4 class="title text-before-left">Recent Events</h4>
                    </div>
                    <div class="news scroller">
{{--                        <div class="row individual_news bg-gray">--}}
{{--                            <div class="col-md-4 float-left">--}}
{{--                                <img src="{{asset('/assets/images/News_test.jpg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8 float-right ml-6">--}}
{{--                                <h3 class="text-left news-title"><a href="">News Title Eill Be Shown Here...</a>--}}
{{--                                </h3>--}}
{{--                                <hr>--}}
{{--                                <p><i class="fa fa-calendar"></i> 25 Jan, 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        @if($events->isNotEmpty())
                            @php
                                $first_event = $events[0];
                            @endphp
                            <div class="row individual_news bg-gray">
                                <div class="col-md-4 float-left">
                                    {{--                                    <img src="{{asset('/assets/images/News_test.jpg')}}" alt="">--}}
                                    <img src='{{URL::asset("$first_event->image")}}' alt="">
                                </div>
                                <div class="col-md-8 float-right ml-6">
                                    <h3 class="text-left news-title"><a href="">{{$first_event->title}}</a>
                                    </h3>
                                    <hr>
                                    <p><i class="fa fa-calendar"></i>{{$first_event->start_date}}</p>
                                </div>
                            </div>
                            @foreach($events as $key=>$events_list)
                                @if($key>0)
                                <div class="row individual_news">
                                    <div class="col-md-2 float-left thumb">
                                        <img src='{{URL::asset("$events_list->image")}}' alt="">
                                    </div>
                                    <div class="col-md-10 float-right">
                                        <h5 class="text-left news-title"><a href="">{{$events_list->title}}</a>
                                        </h5>
                                        <hr>
                                        <p><i class="fa fa-calendar"></i> {{$events_list->start_date}}</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @else
                            <h5 class="text-center news-title">NO Events TO SHOW</h5>
                        @endif

                    </div>
                    <div class="text-right mg-top-25">
                        <a class="btn btn-border-base b-animate-3 " href="">All Recent Events</a>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="section-title text-left">
                        <h4 class="title text-before-right">Upcomming Events</h4>
                    </div>
                    <div class="news scroller bg-white">
                        @if($events->isNotEmpty())
                            @foreach($events as $events_list)
                                <div class="row individual_news">
                                    <div class="col-md-2 float-left thumb">
                                        <img src='{{URL::asset("$events_list->image")}}' alt="">
                                    </div>
                                    <div class="col-md-10 float-right">
                                        <h5 class="text-left news-title"><a href="">{{$events_list->title}}</a>
                                        </h5>
                                        <hr>
                                        <p><i class="fa fa-calendar"></i> {{$events_list->start_date}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h5 class="text-center news-title">NO Events TO SHOW</h5>
                        @endif

                    </div>
                    <div class="text-right mg-top-25">
                        <a class="btn btn-border-base b-animate-3 " href="">All Upcomming Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end event -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script>
        jQuery(document).ready(function($){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })
        })
    </script>
    <!-- content end -->


{{--    <script src="{{asset('/assets/frontend/assets/js/vendor.js')}}"></script>--}}
{{--    <!-- main js  -->--}}
{{--    <script src="{{asset('/assets/frontend/assets/js/main.js')}}"></script>--}}


@stop