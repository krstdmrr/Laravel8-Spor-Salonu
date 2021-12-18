@extends('layouts.home')

@section('title', 'Contact-'. $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keywords)



@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>Contact</h3>
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
            <li class="breadcrumb-item active">Contact</li>
        </ul>
    </div>
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>İletişim Bilgileri</h3>
                    {!!$setting->contact!!}
                </div>
                <div class="col-md-6">
                    <h3>İletişim Formu</h3>
                    İletişim Formu
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

