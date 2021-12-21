@extends('layouts.home')

@section('title',$data->title ."Membership Lists")
@section('description',$data->description)
@section('keywords',$data->keywords)
@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3 style="font-size: 125px">Membership</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area end -->
    <div>
        <ul class="breadcrumb" style="background-color: darkred;border-radius:0.15px;margin-bottom: 0px">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('home')}}">Membership List</a></li>
            <li class="breadcrumb-item active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
        </ul>
    </div>
    <div class="priscing_area">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
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
@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

