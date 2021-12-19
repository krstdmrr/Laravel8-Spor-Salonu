@if ($message =Session::get('success'))
    <div class="alert alert-success alert-block">
        <buton type="button" class="close" data-dismiss="alert"></buton>
        <strong>{{$message}}</strong>
    </div>
@endif
@if ($message =Session::get('error'))
    <div class="alert alert-danger alert-block">
        <buton type="button" class="close" data-dismiss="alert"></buton>
        <strong>{{$message}}</strong>
    </div>
@endif
@if ($message =Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <buton type="button" class="close" data-dismiss="alert"></buton>
        <strong>{{$message}}</strong>
    </div>
@endif
@if ($message =Session::get('info'))
    <div class="alert alert-info alert-block">
        <buton type="button" class="close" data-dismiss="alert"></buton>
        <strong>{{$message}}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <buton type="button" class="close" data-dismiss="alert"></buton>
        Check the following errors
    </div>
@endif

