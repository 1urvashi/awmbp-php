@extends('dealer.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Inspector</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('dealer.includes.status-msg')
                <form role="form" enctype="multipart/form-data" method="post" action="@if(isset($inspector)) {{url('dealer/inspectors/'.$inspector->id)}} @else {{url('dealer/inspectors')}} @endif">
                    @if(isset($inspector)) <input name="_method" type="hidden" value="PUT"> @endif
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Name <span class="req">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(isset($inspector)){{$inspector->name}}@else{{old('name')}}@endif">
                        </div>
                        <div class="form-group">
                            <label>Email <span class="req">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="@if(isset($inspector)){{$inspector->email}}@else{{old('email')}}@endif">
                        </div>
                        <div class="form-group">
                            <label>Password @if(!isset($inspector))<span class="req">*</span>@endif</label>
                            <input type="password" class="form-control" id="email" name="password" >
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
