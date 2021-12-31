@extends('layouts.admin')

@section('title','Edit Product Page')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                       <h4 class="card-title">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body card-block">
                                <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="number" name="address" value="{{$data->address}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"  class="form-control">

                                            @if($data->image)
                                                <img src="{{Storage::url($data->profile_photo_path )}}" height="200" alt="" style="border-radius: 10px">,
                                            @endif
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update User Profile
                                        </button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        ..
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
