@extends('layouts.admin')

@section('title','Product List')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Products</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        <h4 class="card-title">Category List</h4>
                        <a  href="{{route('admin_product_add')}}" type="button" class="btn btn-primary">Add Product</a>

                    </div>
                    <div class="card-body">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table id="table_id" class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>title</th>
                                    <th>Price</th>
                                    <th>Months</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th style="..." colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->category_id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>{{$rs->months}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                            @endif

                                        </td>
                                        <td align="center"><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class="fa fa-picture-o"></i></a></td>

                                        <td align="center"><a href="{{route('admin_product_edit',['id'=>$rs->id])}}" ><i class="fa fa-edit" ></i></a></td>
                                        <td align="center"><a href="{{route('admin_product_delete',['id'=>$rs->id])}}"
                                               onclick="return confirm('Delete! Are you sure=!')"><i class="fa fa-eraser" ></i></a> </td>
                                </tr>

                                @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->



                    </div>
                    <div class="card-footer">
                        footer
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('footer')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>/*
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );*/
</script>
@endsection
