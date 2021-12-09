@extends('layouts.admin')

@section('title','Edit Category Page')
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
                                <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" class="form-horizontal">
                                    @csrf
                                        <div class="form-group">
                                            <label>Parent</label>
                                            <select name="parent_id" id="select" class="form-control">
                                                <option value="0" >Main Category</option>
                                                @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif >{{$rs->title}}</option>
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
                                            <label>Slug</label>
                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="select" class="form-control">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Category
                                        </button>
                                    </div>
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
