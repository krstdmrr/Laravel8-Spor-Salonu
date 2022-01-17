@extends('layouts.admin')

@section('title','Edit Setting Page')
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
                    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general"
                                                   aria-selected="true">General</a>
                                                <a class="nav-item nav-link" id="nav-smtp-tab" data-toggle="tab" href="#nav-smtp" role="tab" aria-controls="nav-smtp"
                                                   aria-selected="false">Smtp Email</a>
                                                <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social"
                                                   aria-selected="false">Social Media</a>
                                                <a class="nav-item nav-link" id="nav-aboutus-tab" data-toggle="tab" href="#nav-aboutus" role="tab" aria-controls="nav-aboutus"
                                                   aria-selected="false">About Us</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                   aria-selected="false">Contact</a>
                                                <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references"
                                                   aria-selected="false">References</a>

                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                                <input type="hidden" name="id" value="{{$data->id}}" class="form-control">

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" required>
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
                                                    <label>Company</label>
                                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Adress</label>
                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" id="select" class="form-control">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
                                                <div class="form-group">
                                                    <label>Smtp Server</label>
                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Email</label>
                                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Password</label>
                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Smtp Port</label>
                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                                <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                            </div>
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                                </div><div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
                                                <div class="form-group">
                                                    <label>About Us</label>
                                                    <textarea class="form-control" id="summary-ckeditor" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'summary-ckeditor' );
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <textarea class="form-control" id="summary-ckeditor2" name="contact">{{$data->contact}}</textarea>
                                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'summary-ckeditor2' );
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <textarea class="form-control" id="summary-ckeditor3" name="references">{{$data->references}}</textarea>
                                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'summary-ckeditor3' );
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Setting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
