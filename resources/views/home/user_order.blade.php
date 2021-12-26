@extends('layouts.home')

@section('title', 'My Orders')

@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>My Orders</h3>
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
            <li class="breadcrumb-item active">My Orders</li>
        </ul>
    </div>
    <div class="container">
        <div class="row blog_left_sidebar">
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="col-md-10">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Start Date</th>
                        <th>Finish Date</th>
                        <th>Months</th>
                        <th>Price</th>
                        <th>Trainer</th>
                        <th>Date</th>
                        <th>Note</th>
                        <th>Status</th>


                    </tr>
                    </thead>
                    <tbody>
                    @include('home.message')
                    @foreach($datalist as  $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                   target="_blank">
                                    {{$rs->product->title}}
                                </a></td>
                            <td>{{$rs->Startdate}}</td>
                            <td>{{$rs->Finishdate}}</td>
                            <td>{{$rs->months}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->trainer}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

