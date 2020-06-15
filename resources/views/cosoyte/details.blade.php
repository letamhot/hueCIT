@extends('layouts.CSYT')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Post</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('cosoyte.index') }}" class="btn btn-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Name:</strong>
            {{ $cosoyte->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Địa Chỉ:</strong>
            {{ $cosoyte->diachi }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>SDT:</strong>
            {{ $cosoyte->sdt }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Loại Cơ Sở:</strong>
            {{ $cosoyte->loaiCS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ngày Thành Lập:</strong>
            {{ $cosoyte->NgayTL }}
        </div>
    </div>
</div>
@endsection
