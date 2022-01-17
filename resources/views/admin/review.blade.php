@extends('layouts.admin')

@section('title','Review List')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Reviews</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Reviews</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        @include('home.message')
                    </div>
                    <div class="card-body">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table id="table_id" class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($datalist as  $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                               onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                                {{$rs->user->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                               target="_blank">
                                                {{$rs->product->title}}
                                            </a></td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td align="center"><a href="{{route('admin_review_show',['id'=>$rs->id])}}"
                                                              onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"><i
                                                    class="fa fa-edit"></i></a></td>
                                        <td>
                                            <a href="{{route('admin_review_delete',['id'=>$rs->id])}}"
                                               onclick="return confirm('delete, are u sure?')"><i
                                                    class="fa fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->


                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('footer')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
@endsection
