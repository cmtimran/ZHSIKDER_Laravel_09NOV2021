@extends('website.index')
@section('website_main_section')

    <!-- content start -->

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- Gallery -->
                <h2 class="page-title">Gallery</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->
    <!-- gallery area start -->
    <div class="gallery-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                @foreach($gallery as $gallery_list)
                    <div class="col-md-4">
                        <div class="single-gallery">
{{--                            <img src="{{asset('/assets/uploads/images/gallery/maangallery08082021_114943_6.png')}}" alt="img">--}}
                            <img src='{{URL::asset("$gallery_list->image")}}' alt="img">
                        </div>

                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- gallery area end-->

@stop