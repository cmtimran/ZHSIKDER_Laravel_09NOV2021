@extends('website.index')
@section('website_main_section')

    @php
       // $nav_dept = collect($manage_department)->all();
        //    dd($manage_department);
    @endphp
    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                <h4 class="">{{$department_name}}</h4>
                <h2 class="page-title">Facuty Members</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- Facuty Member page -->
    <div class="main-blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-10">
                    <div class="row">
                        @foreach($teacher_info as $key=>$teacher_list)
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-team-inner text-center">
                                    <div class="thumb">
{{--                                        <img src="public\uploads\images\banners\VC.png" alt="img">--}}
                                        <img onerror="this.src='img/blankavatar.png'" src='{{URL::asset("img/backend/teacher_staff/$teacher_list->teacher_id")}}.jpg'>
                                    </div>
                                    <div class="details">
                                        <h5><a href="individual-faculty-members.html">{{$teacher_list->teacher_name}}</a></h5>
                                        <p>{{$teacher_list->designation}}</p>
                                        <ul class="social-media">
                                            <li>
                                                <a href="{{$teacher_list->social_network_1}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$teacher_list->social_network_2}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$teacher_list->social_network_3}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$teacher_list->social_network_4}}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-12 text-md-center text-center">
                                                    <a class="btn bg-light b-animate-3" href="/frontend/faculty_profile/{{$teacher_list->teacher_id}}">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <!-- sidebar -->
                        <div class="col-lg-12 col-12 pd-10">
                            <div class="td-sidebar pd-10 bg-gray">
                                <div class="widget widget_catagory">
                                    <h4 class="widget-title">Department Name</h4>
                                    <ul class="catagory-items">
                                        <li><a href="faculty-members.html"><i class="fa fa-angle-right"></i>Faculty member</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Academic > Program</a></li>
                                        <li><a href="tution-fees.html"><i class="fa fa-angle-right"></i>Tution Fees</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Publications</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Officer</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Schollership</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Activities</a></li>
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
        </div>
    </div>
    <!-- Facuty Member page end -->

@stop