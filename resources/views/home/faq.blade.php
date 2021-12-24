@extends('layouts.home')

@section('title', 'Frequently Asked Questions')
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3 style="font-size: 100px">Frequently Asked Questions</h3>
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
            <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ul>
    </div>
    <div>
        <div class="container">
            <div id="accordion" >
                @foreach($datalist as $rs)
                    <h4>{{$rs->question}}</h4>
                <div>
                   <p>{!! $rs->answer !!}</p>

                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

