@extends('layouts.admin')

@section('title','Category List')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        <h4 class="card-title">Category List</h4>
                    </div>
                    <div class="card-body">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->parent_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <!-- END DATA TABLE-->



                    </div>
                    <div class="card-footer">
                        footer
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
