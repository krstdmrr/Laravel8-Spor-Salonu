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
                                <form role="form" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" id="select" class="form-control">
                                                @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif >{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" name="price" value="{{$data->price}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Months</label>
                                            <input type="number" name="months" value="{{$data->months}}" class="form-control">
                                        </div>
                                    <div class="form-group">
                                            <label>Trainer</label>
                                            <input type="text" name="trainer" value="{{$data->trainer}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            <textarea class="form-control" id="summary-ckeditor" name="detail">{{$data->detail}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor' );
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"  class="form-control">

                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="60" alt="">,
                                            @endif
                                        </div>
                                        <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="select" class="form-control">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Product
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
