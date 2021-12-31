@extends('layouts.admin')

@section('title','Admin Order List')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Order List</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order List</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        <h4 class="card-title">Order List</h4>
                    </div>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Start Date</th>
                                <th>Finish Date</th>
                                <th>Months</th>
                                <th>Price</th>
                                <th>Trainer</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                            {{$rs->user->name}}</a></td>
                                    <td>
                                        <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                           target="_blank">
                                            {{$rs->product->title}}</a>
                                    </td>
                                    <td>{{$rs->Startdate}}</td>
                                    <td>{{$rs->Finishdate}}</td>
                                    <td>{{$rs->months}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->trainer}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td align="center"><a href="{{route('admin_order_show',['id'=>$rs->id])}}"
                                                          onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i
                                                class="fa fa-edit"></i></a></td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    footer
                </div>
            </div>
        </div>

    </div>

@endsection
