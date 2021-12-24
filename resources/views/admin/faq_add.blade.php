@extends('layouts.admin')

@section('title','Add Product Page')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>FAQ Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add FAQ</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        <h4 class="card-title">Add FAQ</h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body card-block">
                                <form role="form" action="{{route('admin_faq_store')}}" method="post"
                                      enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" name="position" value="0" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" name="question" class="form-control">
                                    </div>
                                    <div>
                                        <label>Answer</label>s
                                        <textarea class="form-control" id="answer" name="answer"></textarea>
                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace('answer');
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="select" class="form-control">
                                            <option selected="selected">False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add
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
