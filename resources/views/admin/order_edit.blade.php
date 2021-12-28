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
        <h4 class="card-title">Order Detail</h4>
        @include('home.message')
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body card-block">
                <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post"
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
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Product</th>
                            <td>{{$data->product->title}}</td>
                        </tr>
                        <tr>
                            <th>Start Date</th>
                            <td>{{$data->Startdate}}</td>
                        </tr>
                        <tr>
                            <th>Finish Date</th>
                            <td>{{$data->Finishdate}}</td>
                        </tr>
                        <tr>
                            <th>Months</th>
                            <td>{{$data->months}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Trainer</th>
                            <td>{{$data->trainer}}</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>{{$data->total}}</td>
                        </tr>
                        <tr>
                            <th>Payment</th>
                            <td>{{$data->payment}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <select class="form-control " name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>Accepted</option>
                                    <option>Canceled</option>
                                    <option>Completed</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Admin Note</th>
                            <td>
                                <textarea class="form-control" id="note" name="note">{{$data->note}}</textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update Order
                                </button> </td>
                        </tr>
                    </table>

                </form>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>

