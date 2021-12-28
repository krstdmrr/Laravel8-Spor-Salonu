<html>
<head>
    <title>Image Gallery Add Menu</title>
    <!-- Fontfaces CSS-->
    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
          media="all">
    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

<div class="card-header">
    <h4 class="card-title">{{$data->title}}</h4>
</div>
<div class="card-body">
    <div class="card">
        <div class="card-body card-block">
            <form role="form" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post"
                  enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <table id="table_id" class="table table-borderless table-data3">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{ Storage::url($rs->image) }}" height="200" width="200" alt="">
                                @endif
                            </td>

                            <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}"
                                   onclick="return confirm('Delete! Are you sure=!')"><i class="fa fa-eraser"></i></a>
                            </td>
                            @endforeach

                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Add Image
                            </button>
                        </tr></tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<div class="card-footer">
    ..
</div>


</body>
</html>
