@extends('layouts.NSAD')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Post</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('nhansu.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Name:</strong>
            {{ $ns->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>BirthDay:</strong>
            {{ $ns->birthDay }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StartDay:</strong>
            {{ $ns->startDay }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>id_LoaiNS:</strong>
            {{ $ns->loaiNS->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cơ sở y tế:</strong>
            {{ $ns->cosoyte->name }}
        </div>
    </div>
</div>
@endsection