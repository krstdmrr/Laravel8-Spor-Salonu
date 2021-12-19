<!-- Fontfaces CSS-->
<link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
<div class="au-card m-b-30">
    <div class="card-header">
        <h4 class="card-title">Message Detail</h4>
        @include('home.message')
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body card-block">
                <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <table id="table_id" class="table table-borderless table-data3"
                           style="text-align: center;padding-left: 5px">

                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note</th>
                            <td>
                                <textarea class="col-md-12" id="note" name="note">{{$data->note}}</textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Update Message
                                    </button>
                                </div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

