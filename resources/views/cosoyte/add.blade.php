@extends('layouts.CSYT')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add<a href="{{ route('cosoyte.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('cosoyte.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="Name" id="Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Địa Chỉ</label>
                        <div class="col-sm-10">
                            <input type="date" name="BirthDay" id="BirthDay" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >SDT</label>
                        <div class="col-sm-10">
                            <input type="date" name="sdt" id="sdt" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Loại Cơ Sở</label>
                        <div class="col-sm-10">
                            <input type="text" name="loaiCS" id="loaiCS" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Ngày Thành Lập</label>
                        <div class="col-sm-10">
                            <input type="date" name="NgayTL" id="NgayTL" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
