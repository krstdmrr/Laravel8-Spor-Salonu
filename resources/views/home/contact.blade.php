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
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: 41,
                        lng: 29
                    };
                    var grayStyles = [{
                        featureType: "all",
                        stylers: [{
                            saturation: -90
                        },
                            {
                                lightness: 50
                            }
                        ]
                    },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 41,
                            lng: 29
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
            </script>

        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>İletişim Bilgileri</h3>
                        {!!$setting->contact!!}
                    </div>
                    <div class="col-md-6">
                        <h3>İletişim Formu</h3>
                        <div class="row">
                            <div class="col">
                                @include('home.message')
                                <form class="form-contact contact_form" action="{{route('sendmessage')}}" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name" id="name" type="text"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Enter your name & surname'"
                                                       placeholder="Enter your name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="phone" id="phone" type="text"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Enter your name & phone number'"
                                                       placeholder="Enter your phone number" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" id="email" type="email"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Enter email address'"
                                                       placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" name="subject" id="subject" type="text"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Enter Subject'"
                                                       placeholder="Enter Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="input form-control w-100" name="message" id="message "
                                                          cols="30" rows="7    " onfocus="this.placeholder = ''"
                                                          onblur="this.placeholder = 'Enter Message'"
                                                          placeholder=" Enter Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

