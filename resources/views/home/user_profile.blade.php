@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>USER</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area end -->
    <div>
        <ul class="breadcrumb" style="background-color: darkred;border-radius:0.15px;margin-bottom: 0px">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Profile</li>
        </ul>
    </div>
    <div >
        <div class="container">
            <div class="row align-items-lg-start">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10">
                    @include('profile.show')
                </div>

            </div>
        </div>
    </div>
@endsection


