@extends('layouts.home')
@section('title', 'Order Membership')
@php
$total=0;
@endphp
@section('content')
    <!-- bradcam_area -->
    <div class="bradcam_area">
        <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="bradcam_text text-center">
                            <h3>ORDER</h3>
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
            <li class="breadcrumb-item active">Order</li>
        </ul>
    </div>
    @php
    if($data->months>=3)
        $total += $data->price*$data->months*0.70;
    else
        $total += $data->price*$data->months;
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Membership Detail</h3>
                <hr>
                <form action="{{route('user_order_store')}}" class="clearfix" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div>
                            <label>Membership Months:</label>
                            <input readonly class="form-control" type="text" name="months" value="{{$data->months}}">
                        </div>
                        <div>
                            <label>Trainer:</label>
                            <input readonly class="form-control" type="text" name="trainer" value="{{$data->trainer}}">
                        </div>
                        <div class="form-group  ">
                            <label>Start Date</label>
                            <input class="form-control" type="date" name="Startdate" min={{$dateNow}} required>
                        </div>
                        <div class="form-group  ">
                            <input type="hidden" name="price" value="{{$data->price}}">
                        </div>
                        <div class="form-group  ">
                            <input type="hidden" name="product_id" value="{{$data->id}}">
                        </div>

                        <div class="form-group">
                            <label>Payment</label>
                            <select name="payment" class="form-control">
                                <option selected="selected">Cash</option>
                                <option>Cash</option>

                            </select>
                        </div>

                        <div class="form-group  ">
                            <input type="hidden" name="total" value="{{$total}}">
                        </div>
                        <div class="pricing_btn">
                            <button type="submit" class="boxed-btn3">Join Now</button>
                        </div>

                    </div>

                </form>
            </div>

            <div class="col-md-6">
                <h3>Payment</h3>
                <hr>
                <p><b>Price:  {{$data->price}}₺/Month</b></p>
                <p><b>Total:  {{$total}}₺/{{$data->months}} Months</b></p>

                <div class="form-group">
                    <input class="form-control" type="text" name="cardname" placeholder="Name and Surname">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="cardnumber" placeholder="CardNumber">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="carddates" placeholder="card dates mm/yy">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="key" placeholder="Secret Number">
                </div>



            </div>
        </div>
    </div>

@endsection
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>

