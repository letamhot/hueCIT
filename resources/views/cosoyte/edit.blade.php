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
                Edit Bệnh nhân <a href="{{ route('cosoyte.index') }}" class="btn btn-primary pull-right">Back</a>
            </div>
            <form action="{{route('cosoyte.update',$cosoyte->id_csyt)}}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="POST">
        <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $cosoyte->name }}" class="form-control" placeholder="name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('diachi')?' has-error':''}}">
                    <strong>Địa Chỉ:</strong>
                    <input type="date" name="diachi" value="{{ $cosoyte->diachi }}" class="form-control" placeholder="diachi">
                    <span class="text-danger">{{$errors->first('diachi')}}</span>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('sdt')?' has-error':''}}">
                    <strong>SDT:</strong>
                    <input type="date" name="sdt" value="{{ $cosoyte->sdt }}" class="form-control" placeholder="sdt">
                    <span class="text-danger">{{$errors->first('sdt')}}</span>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('loaiCS')?' has-error':''}}">
                    <strong>Loại Cơ Sở:</strong>
                    <input type="text" name="loaiCS" value="{{ $cosoyte->loaiCS }}" class="form-control" placeholder="loaiCS">
                    <span class="text-danger">{{$errors->first('loaiCS')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('NgayTL')?' has-error':''}}">
                    <strong>Ngày Thành Lập:</strong>
                    <input type="text" name="NgayTL" value="{{ $cosoyte->NgayTL }}" class="form-control" placeholder="NgayTL">
                    <span class="text-danger">{{$errors->first('NgayTL')}}</span>
                </div>
            </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection