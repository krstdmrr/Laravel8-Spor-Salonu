@extends('layouts.home')

@section('title', $setting->title)
@section('description')
    {{$setting->title}}
@endsection
@section('keywords',$setting->title)

@section('content')
    @include('home._slider')

    <!--/ catagory_area  -->
    <!-- features_area_start  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Our Features</h3>
                        <p>There are many variations of your exercise type. <br> No Pain No Gain.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center mb-73">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/1.svg" alt="">
                        </div>
                        <h4>Weightlifting</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h4>Specific Muscles</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h4>Flex Your Muscles</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/4.svg" alt="">
                        </div>
                        <h4>Cardio Exercises</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->

    <div class="offer_area offer_bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="offer_text">
                        <h4>A Big Offer for <br>
                            New Year</h4>
                        <h3>30% Off</h3>
                        <p> Over 3 Months Plans</p>
                        <p>Will see the discounts on the purchase page.</p>
                        <a href="{{route('categoryproduct')}}" }} class="boxed-btn3">Memberships</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="priscing_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Our Pricing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_prising text-center">
                            <div class="prising_header"
                                 style="background-image:url('{{ Storage::url($rs->image) }}');background-position: center center;background-size: 400px 400px">
                                <h3 style="font-size:21px;text-shadow:2px 2px 5px black">{{$rs->title}}</h3>
                                <span style="text-shadow:2px 2px 4px black">{{$rs->price}}₺/Month</span>
                            </div>
                            <div class="pricing_body">
                                @php
                                    $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                    $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                @endphp
                                <ul>
                                    <li>{{$rs->months}} Months</li>
                                    <li>24h unlimited access</li>
                                    <li>Trainer: {{$rs->trainer}}</li>
                                    <li>
                                        <div>
                                            <i class="fa fa-star @if ($avgrev<1) fa fa-star-o @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<2) fa fa-star-o @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<3) fa fa-star-o @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<4) fa fa-star-o @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<5) fa fa-star-o @endif"></i>
                                            <i>({{$countreview}})</i>
                                        </div>
                                    </li>
                                    <li class="off-color" style="background-color: darkred"><a
                                            href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing_btn">
                                <a href="{{route('addtocart',['id'=>$rs->id])}}" class="boxed-btn3">Join Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <!-- gallery_start -->
    <div style="background-color: black">
        <div class="gallery_area" style="margin-left: 100px;">
            @foreach($image as $rs)
                <div class="single_gallery small_img">
                    <div class="hover_pop">
                        <a class="popup-image small_img" href="{{ Storage::url($rs->image) }}">
                            <i class="ti-zoom-in"></i>
                        </a>
                    </div>
                    <img src="{{ Storage::url($rs->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <!-- gallery_area_end  -->
    <!-- team_area_start  -->
    <!-- team_area_end  -->

    <!-- big_offer_area start  -->
    <!-- big_offer_area end  -->

@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>







