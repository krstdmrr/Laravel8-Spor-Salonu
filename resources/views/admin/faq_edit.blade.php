@extends('layouts.admin')

@section('title','Edit FAQ Page')
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
                        <li class="breadcrumb-item active">Edit FAQ</li>
                    </ol>
                </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                       <h4 class="card-title">Edit FAQ</h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body card-block">
                                <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" name="position" value="{{$data->position}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" name="question" value="{{$data->question}}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Answer</label>
                                        <textarea name="answer" >{{$data->answer}}</textarea>
                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace('answer');
                                        </script>
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
                                            <i class="fa fa-dot-circle-o"></i> Update Product
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
