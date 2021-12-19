@extends('layouts.admin')

@section('title','Contact Messages List')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Messages</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div>
                <div class="au-card m-b-30">
                    <div class="card-header">
                        @include('home.message')

                    </div>
                    <div class="card-body">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table id="table_id" class="table table-borderless table-data3"
                                   style="text-align: center;padding-left: 5px">
                                <thead style="padding-left: 5px">
                                <tr style="padding-left: 5px">
                                    <th style="padding-left: 5px">Id</th>
                                    <th style="padding-left: 5px">Name</th>
                                    <th style="padding-left: 5px">Email</th>
                                    <th style="padding-left: 5px">Phone</th>
                                    <th style="padding-left: 5px">Subject</th>
                                    <th style="padding-left: 5px">Message</th>
                                    <th style="padding-left: 5px">Admin Note</th>
                                    <th style="padding-left: 2px" colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->message}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td align="center"><a href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                                                              onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"><i
                                                    class="fa fa-edit"></i></a></td>
                                        <td align="center"><a href="{{route('admin_message_delete',['id'=>$rs->id])}}"
                                                              onclick="return confirm('Delete! Are you sure=!')"><i
                                                    class="fa fa-eraser"></i></a></td>
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
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>/*
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );*/
    </script>
@endsection
