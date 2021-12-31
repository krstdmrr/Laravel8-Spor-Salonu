<!-- Fontfaces CSS-->
<link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
      media="all">

<!-- Bootstrap CSS-->
<link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
      media="all">
<link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

<title>{{$data->name}}</title>
<!-- Main CSS-->
<link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
<div class="au-card m-b-30">
    <div class="card-header">
        <h4 class="card-title">User Detail</h4>
        @include('home.message')
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body card-block">
                <table id="table_id" class="table table-borderless table-data3"
                       style="text-align: center;padding-left: 5px">

                    <tr>
                        <th rowspan="8" align="center" valign="center">
                            @if($data->profile_photo_path)
                                <img src="{{Storage::url($data->profile_photo_path)}}" height="300"
                                     style="border-radius: 10px" alt="">
                            @endif
                        </th>
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
                        <th>Address</th>
                        <td>{{$data->address}}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                               onclick="return confirm('Delete! Are you sure=!')"><i
                                                    class="fa fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <select class="form-control" name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Add Role
                                </button>
                            </form>
                        </td>
                </table>
                </form>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>

