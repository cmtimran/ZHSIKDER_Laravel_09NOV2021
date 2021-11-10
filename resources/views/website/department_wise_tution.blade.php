@extends('website.index')
@section('website_main_section')

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center coursetitle">
        <div class="container">
            <div class="breadcrumb-inner">
                <h4 class="">{{$department_name}} / Academic / </h4>
                <h2 class="page-title">Tution Fees</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- tution section -->
    <div class="main-blog-area pd-top-100 pd-bottom-90 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 pd-10">
                    <div class="tution-fees-page">
                        <div class="row pd-10 text-center">
                            <h1 class="text-line-height">Undergraduate Program</h1>
                            <table class="table" style="border: 1px solid #eee;">
                                <thead class="thead-light">
                                <tr>
                                    <th>Name of Programs
                                    </th>
                                    <th>Admission Fees</th>
                                    <th>After Discount Amount</th>
                                    <th>Per Credit</th>
                                    <th>After Discount</th>
                                    <th>Total Credit Fee</th>
                                    <th>Semester Fee (For each semester)</th>
                                    <th>Total Fee After Discount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @if($undergrad_tution_fee)
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->program_name}}</td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->admission_fees}}</td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->discount}}/= </td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->fee_per_credit}}/=</td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->after_discount}}/= </td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->total_credit_fee}}/= </td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->semester_fee}}/=</td style="border: 1px solid #eee;">
                                    <td style="border: 1px solid #eee;">{{$undergrad_tution_fee->after_discount_total_fee}}/=</td style="border: 1px solid #eee;">

                                    @else
                                        <td style="border: 1px solid #eee;"></td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;"></td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                    @endif

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row pd-10 text-center">
                            <h1 class="text-line-height">Graduate Program</h1>
                            <table class="table" style="border: 1px solid #eee;">
                                <thead class="thead-light">
                                <tr style="border: 1px solid #eee;">
                                    <th>Name of Programs </th>
                                    <th>Admission Fees</th>
                                    <th>After Discount Amount</th>
                                    <th>Per Credit</th>
                                    <th>After Discount</th>
                                    <th>Total Credit Fee</th>
                                    <th>Semester Fee (For each semester)</th>
                                    <th>Total Fee After Discount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @if($undergrad_tution_fee)
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->program_name}}</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->admission_fees}}</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->discount}}/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->fee_per_credit}}/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->after_discount}}/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->total_credit_fee}}/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->semester_fee}}/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">{{$post_tution_fee->after_discount_total_fee}}/=</td style="border: 1px solid #eee;">
                                    @else
                                        <td style="border: 1px solid #eee;"></td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;"></td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/= </td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                        <td style="border: 1px solid #eee;">/=</td style="border: 1px solid #eee;">
                                    @endif
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-3 col-12 pd-10">
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
    <!-- end tution section -->

    <!-- content end -->

@stop