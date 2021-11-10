@extends('website.index')
@section('website_main_section')

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                <h4 class="">{{$student_advisor->department_name}} / Schollership</h4>
                <h2 class="page-title">
                </h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- Facuty Member page -->
    <div class="main-blog-area bg-white pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="team-details-page">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="wow zoomIn animated about-thumb" data-wow-duration="0.8s"
                             data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: zoomIn;">

                            {!! $student_advisor->schollership_text !!}
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 pd-10">
                        <div class="td-sidebar pd-10 bg-gray">
                            <div class="widget widget_catagory">
                                <h4 class="widget-title">{{$student_advisor->department_name}}</h4>
                                <ul class="catagory-items">
                                    <li><a href="/frontend/department_wise_faculty/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Faculty member</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Academic > Program</a></li>
                                    <li><a href="/frontend/department_wise_tution/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Tution Fees</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Publications</a></li>
                                    <li><a href="/frontend/student_advisor/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Student Advisor</a></li>
                                    <li><a href="/frontend/former_head/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Former Head</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Officer</a></li>
                                    <li><a href="/frontend/schollership/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Schollership</a></li>
                                    <li><a href="/frontend/activities/{{$student_advisor->id}}"><i class="fa fa-angle-right"></i>Activities</a></li>
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
                </div>
                <div class="details align-self-center text-justify pd-top-30">
                    {{--                    <h2 class="mb-2">About Us</h2>--}}
                    <hr>
                    <div class="row">
                        {{--                        <div class="col-lg-12">--}}
                        {{--                            <p>{{$student_advisor->activities_text}}--}}
                        {{--                            </p>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facuty Member page end -->

@stop