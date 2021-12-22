@extends('layouts.home')

@section('title', 'Contact-'. $data->title)
@section('description'){{$data->description}} @endsection
@section('keywords',$data->keywords)
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .sliderContainer {
            position: relative;
            width: 100vw;
            margin: auto;
            overflow: hidden;
            background: #000;
        }

        .sliderSlider > * {
            flex-shrink: 0;
        }

        .sliderSlider {
            display: flex;
            width: 100%;
            height: 100vh;
            transition: all 0.3s ease-in-out;
        }

        .sliderImg {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            height: 30%;
            width: 30%;

        }

        .btnn {
            position: absolute;
            width: 60px;
            height: 60px;
            font-size: 20px;
            top: 50%;
            border-radius: 50%;
            border: none;
            outline: none;
            background-color: rgba(19, 19, 19, 0.39);
            color: #fff;
            transform: translateY(-50%);
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btnn:hover {
            background-color: rgba(19, 19, 19, 0.829);
        }

        .nextBtn {
            right: 10px;
        }

        .prevBtn {
            left: 10px;
        }

        .navigator {
            position: absolute;
            z-index: 100;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            padding: 0 20px;
        }

        .navigatorChild {
            height: 12px;
            width: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.479);
            margin: 0 10px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .navigatorChild:hover {
            box-shadow: 0 0 5px #fff;
        }

        .navigatorChildActive {
            background: rgb(255, 255, 255);
        }
    </style>
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay "
             style="background-image:url('{{ Storage::url($data->image) }}')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3 style="font-size:125px">{{$data->title}}</h3>
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
            <li class="breadcrumb-item active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</li>
            <li class="breadcrumb-item active">{{$data->title}}</li>
        </ul>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row col-md-12">
                        <div class="sliderContainer" style="background-color: white">
                            <div class="sliderSlider" style="background-color: white">
                                @foreach($datalist as $rs)
                                    <div class="sliderImg">
                                        <img src="{{ Storage::url($rs->image) }}" style="height:400px;width:500px">
                                    </div>
                                @endforeach
                            </div>
                            <div class="controllers">
                                <button class="btnn prevBtn"><i class="fa fa-chevron-left"></i></button>
                                <button class="btnn nextBtn"><i class="fa fa-chevron-right"></i></button>
                            </div>

                            <div class="navigator"></div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 100px">
                    <hr>
                    <h3>{{$data->title}}</h3>
                    <h4>{{$data->description}}</h4>
                    <h3>Months: {{$data->months}}</h3>
                    <h3>Trainer:{{$data->trainer}}</h3>
                    <div>
                        @php
                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                        <div>
                            <i class="fa fa-star @if ($avgrev<1) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<2) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<3) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<4) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<5) fa fa-star-o @endif"></i>
                        </div>
                        <a href="#">{{$countreview}} Review(s) {{$avgrev}} / Add Review</a>
                    </div>
                    <h3>Price:{{$data->price}}</h3>

                    <div class="pricing_btn">
                        <a href="{{route('addtocart',['id'=>$data->id])}}" class="boxed-btn3">Join Now</a>
                    </div>

                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail"
                       role="tab" aria-controls="nav-detail"
                       aria-selected="true">Detail</a>
                    <a class="nav-item nav-link" id="nav-com-tab" data-toggle="tab" href="#nav-com" role="tab"
                       aria-controls="nav-com"
                       aria-selected="false">Comments ({{$countreview}})</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                    {!! $data->detail !!}
                </div>
                <div class="tab-pane fade" id="nav-com" role="tabpanel" aria-labelledby="nav-com-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="comment-list">
                                @foreach($review as $rs)
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/comment/comment_3.png" alt="">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    {{$rs->review}}
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">{{$rs->user->name}}</a>
                                                        </h5>
                                                        <p class="date">{{$rs->created_at}}</p>
                                                        <i class="fa fa-star @if ($rs->rate<1) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if ($rs->rate<2) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if ($rs->rate<3) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if ($rs->rate<4) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if ($rs->rate<5) fa fa-star-o @endif"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="comment-form col-md-6">
                            <h4>Leave a Reply</h4>
                            @livewire('review',['id'=>$data->id])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    const navigatorActive = (counter, navigators) => {
        for (let i = 0; i < navigators.length; i++) {
            if (counter > navigators.length) counter = 1;
            if (counter < 1) counter = navigators.length;

            if (navigators[i].id === "slider_img_" + counter) {
                navigators[i].classList.add("navigatorChildActive");
            } else {
                navigators[i].classList.remove("navigatorChildActive");
            }
        }
    };

    window.onload = () => {
        const slider = document.querySelector(".sliderSlider");
        let sliderImages = document.querySelectorAll(".sliderImg");

        const prevBtn = document.querySelector(".prevBtn");
        const nextBtn = document.querySelector(".nextBtn");

        const navigator = document.querySelector(".navigator");
        //navigator
        for (let i = 0; i < sliderImages.length; i++) {
            const navigatorChild = document.createElement("div");
            navigatorChild.classList.add("navigatorChild");
            navigatorChild.id = "slider_img_" + (i + 1);
            navigator.appendChild(navigatorChild);
        }
        const navigators = document.querySelectorAll(".navigatorChild");
        navigators[0].classList.add("navigatorChildActive");

        //first node clone
        const firstNodeClone = sliderImages[0].cloneNode(true);
        firstNodeClone.id = "firstClone";
        slider.appendChild(firstNodeClone);

        //last node clone
        const lastNodeClone = sliderImages[sliderImages.length - 1].cloneNode(true);
        lastNodeClone.id = "lastClone";
        slider.prepend(lastNodeClone);

        sliderImages = document.querySelectorAll(".sliderImg");

        let counter = 1;

        let ImageWidth = sliderImages[0].clientWidth;
        slider.style.transform = `translateX(${-counter * ImageWidth}px)`;

        nextBtn.addEventListener("click", () => {
            if (counter >= sliderImages.length - 1) return null;
            slider.style.transition = "all 0.3s ease-in-out";
            counter++;
            slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
            navigatorActive(counter, navigators);
        });

        prevBtn.addEventListener("click", () => {
            if (counter <= 0) return null;
            slider.style.transition = "all 0.3s ease-in-out";
            counter--;
            slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
            navigatorActive(counter, navigators);
        });

        slider.addEventListener("transitionend", () => {
            if (sliderImages[counter].id === "lastClone") {
                slider.style.transition = "none";
                counter = sliderImages.length - 2;
                slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
            }

            if (sliderImages[counter].id === "firstClone") {
                slider.style.transition = "none";
                counter = sliderImages.length - counter;
                slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
            }
        });

        navigators.forEach((el, i) => {
            el.addEventListener("click", () => {
                counter = i + 1;
                slider.style.transition = "all 0.3s ease-in-out";
                slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
                navigatorActive(counter, navigators);
            });
        });

        //resize handler
        window.onresize = () => {
            ImageWidth = sliderImages[0].offsetWidth;
            slider.style.transform = `translateX(${-counter * ImageWidth}px)`;
        };
    };

</script>
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

