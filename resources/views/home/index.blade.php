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
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
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
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h4>Specific Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h4>Flex Your Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="{{asset('assets')}}/img/svg_icon/4.svg" alt="">
                        </div>
                        <h4>Cardio Exercises</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
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
                            This Summer</h4>
                        <h3>50% Off</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
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
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_prising text-center">
                            <div class="prising_header" style="background-image:url('{{ Storage::url($rs->image) }}');background-position: center center;background-size: 400px 400px">
                                <h3 style="font-size:24px">{{$rs->title}}</h3>
                                <span>{{$rs->price}}₺</span>
                            </div>
                            <div class="pricing_body" >
                                <ul>
                                    <li>{{$rs->months}} Months</li>
                                    <li>24h unlimited access</li>
                                    <li>Trainer: {{$rs->trainer}}</li>
                                    <li class="off-color">Locker + Bathroom</li>
                                    <li class="off-color" style="background-color: darkred"><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Detail</a></li>
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
    <div class="gallery_area">
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/1.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/2.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/3.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/3.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/4.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/5.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <div class="hover_pop">
                <a class="popup-image" href="img/gallery/6.png">
                    <i class="ti-plus"></i>
                </a>
            </div>
            <img src="{{asset('assets')}}/img/gallery/6.png" alt="">
        </div>

    </div>
    <!-- gallery_area_end  -->
    <a href="#" class="view_pore boxed-btn3">View More</a>
    <!-- team_area_start  -->
    <div class="team_area team_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Our Trainers</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="{{asset('assets')}}/img/team/1.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Jessica Mino</h3>
                            <p>Woman Trainer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="{{asset('assets')}}/img/team/2.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Amit Khan</h3>
                            <p>Men Trainer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="{{asset('assets')}}/img/team/3.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Paulo Rolac</h3>
                            <p>Men Trainer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team_area_end  -->

    <!-- big_offer_area start  -->
    <div class="big_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="offter_text text-center">
                        <h3>A Big Offer for <br>
                            This Summer</h3>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->

@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>







