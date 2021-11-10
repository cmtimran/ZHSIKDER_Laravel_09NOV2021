<style>
    /*button{*/
    /*    position: fixed;*/
    /*    right: 5px;*/
    /*    bottom: 10px;*/
    /*}*/
    /*.back-to-top{*/
    /*    position: fixed;*/
    /*    left: 5px;*/
    /*    bottom: 10px;*/
    /*}*/
</style>
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up" style="line-height: 40px;"></i></span>
</div>

<div class="navbar-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
                <ul>
                    <li>
                        <p>Welcome to Z.H. Sikder University of Science and Technology</p>
                    </li>
                    <!-- <li>
                        <p><i class="fa fa-phone"></i> +11 0259 3654 2360</p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope-o"></i> info@website.com</p>
                    </li> -->
                </ul>
            </div>
            <?php
                //  @foreach($nav_dept as $key => $value)
                $nav_dept = collect($manage_department)->all();
//            dd($nav_dept,$manage_department);
            ?>
            <div class="col-md-6 d-none d-md-inline-block">
                <ul class="topbar-right social-media text-md-right text-center">
                    <a class="olc" href="#">Online Admission &nbsp;&nbsp;</a>
                    <a class="olc" href="#">Live Class &nbsp;&nbsp;</a>
                    <a class="olc" href="#">Certificate &nbsp;&nbsp;</a>
                    <a class="olc" href="#">Convovation &nbsp;&nbsp;</a>
                    <li>
                        <a href="{{$general_settings->social_network_1}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="line-height: 33px;"></i></a>
                    </li>
                    <li>
                        <a href="{{$general_settings->social_network_2}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="line-height: 33px;"></i></a>
                    </li>
                    <li>
                        <a href="{{$general_settings->social_network_4}}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true" style="line-height: 33px;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div class="middle-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="logo">
                    <a href="index.html"><img src="public/uploads/images/logo/maan-lms-icon.png" alt="img">Z.H.
                        Sikder University of Science and Technology</a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="logo_name_icon text-right">
                    <p><i class="fa fa-envelope header_middle_icon"></i><a
                            href="mailto:zhsust.campus@gmail.com">zhsust.campus@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="logo_name_icon text-left">
                    <p><i class="fa fa-phone header_middle_icon"></i><a href="tel:+8801313760750">
                            +8801313760750</a></p>
                </div>
            </div>

        </div>
    </div>
</div> -->

<nav class="navbar navbar-area-2 navbar-area navbar-expand-lg">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo">
            <a href="#">
                <img src="{{asset('/assets\uploads\images\logo\new-logo.png')}}"
                     alt="img">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="edumint_main_menu">
            <ul class="navbar-nav text-center menu-open">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="">ABOUT</a>
                    <ul class="sub-menu">
                        <li><a href="/frontend/bot">BoT</a></li>
                        <li><a href="/frontend/message_bot_chairman">MESSAGE BoT CHAIRMAN</a></li>
                        <li><a href="/frontend/message_bot_vc">MESSAGE BoT VC</a></li>
                        <li><a href="/frontend/overview">OVERVIEW</a></li>
                        <li><a href="/frontend/mission_vision">VISION, MISSION & STRATEGY</a></li>
                        <li><a href="/frontend/syndicate">SYNDICATE</a></li>
                        <li><a href="/frontend/academic">ACADEMIC COUNCIL</a></li>
                        <li><a href="/frontend/about_us">ABOUT US</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="">ACADEMIC</a>

                    <ul class="sub-menu">


                        @foreach($nav_dept as $key => $value)
                            <li><a href="{{url('/')}}/frontend/department/{{$value->department_code}}">{{$value->department_name}}</a></li>
                        @endforeach

{{--                        <li><a href="">Department of Computer Science & Engineering</a></li>--}}
{{--                        <li><a href="">Department of Chemical Engineering</a></li>--}}
{{--                        <li><a href="">Department of Electrical & Electronic Engineering</a></li>--}}
{{--                        <li><a href="">Department of Civil Engineering</a></li>--}}
{{--                        <li><a href="">Department of English</a></li>--}}
{{--                        <li><a href="">Department of LAW</a></li>--}}
{{--                        <li><a href="">Department of Business Administration</a></li>--}}
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="">ADMINISTRATIVE</a>
                    <ul class="sub-menu">
                        <li><a href="">OFFICE OF THE CHAIRPERSON, BOT</a></li>
                        <li><a href="">OFFICE OF THE CHIEF ADVISOR</a></li>
                        <li><a href="">OFFICE OF THE VICE-CHANCELLOR</a></li>
                        <li><a href="">OFFICE OF THE PRO VICE CHANCELLOR</a></li>
                        <li><a href="">OFFICE OF THE TREASURER</a></li>
                        <li><a href="">OFFICE OF THE DEAN’S</a></li>
                        <li><a href="">OFFICE OF THE REGISTRAR</a></li>
                        <li><a href="">OFFICE OF THE PROCTOR</a></li>
                        <li><a href="">OFFICE OF THE LIBRARY</a></li>
                        <li><a href="">OFFICE OF THE DIRECTOR OF FINANCE</a></li>
                        <li><a href="">OFFICE OF THE CONTROLLER OF EXAMINATION</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="">ADMISSION</a>
                    <ul class="sub-menu">
                        <li><a href="">ADMISSION INFORMATION</a></li>
                        <li><a href="">GUIDELINES</a></li>
                        <li><a href="">FEES AND FOUNDING</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">RESEARCH</a>
                </li>
                <li>
                    <a href="">LIBRARY</a>
                </li>
                <li>
                    <a href="/frontend/gallery">GALLERY</a>
                </li>
                <li>
                    <a href="">RESULTS</a>
                </li>
                <li>
                    <a href="/frontend/contact_us">CONTACT</a>
                </li>
            </ul>
        </div>

    </div>

</nav>
<div class="col-md-12">
{{--    <marquee width="100%" direction="left" height="30px" style="color: red; font-size: 20px; line-height:30px;margin-top: 21px;"> The website is under development. In case of emergencies,--}}
{{--        please contact on +8801313760750</marquee>--}}
</div>

<!-- navbar end -->

<!-- content start -->

<div class="top-sidebar displaynone">
    <div class="container">
        <div class="row">
        </div><!--/row-->
    </div><!--/container-->
</div><!--/Top sidebar-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    (function ($) {

        /*--Scroll Back to Top Button Show--*/

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

//Click event scroll to top button jquery

        $('.back-to-top').click(function(){

            $('html, body').animate({scrollTop : 0},600);
            return false;
        });

    })(jQuery);
</script>