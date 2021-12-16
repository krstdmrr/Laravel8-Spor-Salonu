@extends('layouts.home')

@section('title', 'Blank Page')

@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>BLANK</h3>
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
            <li class="active">Blank</li>
        </ul>
    </div>
    <div class="features_area">
        <div class="container">

        </div>
    </div>
@endsection


