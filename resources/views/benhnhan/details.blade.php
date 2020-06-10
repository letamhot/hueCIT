@extends('layouts.BNAD')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Post</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('benhnhan.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Ho Ten:</strong>
            {{ $benhnhan->hoten }}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Dia Chi:</strong>
            {{ $benhnhan->diachi }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>SDT:</strong>
            {{ $benhnhan->SDT }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>BirthDay:</strong>
            {{ $benhnhan->BirthDay }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StartDay:</strong>
            {{ $benhnhan->StartDay }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Benh ly:</strong>
            {{ $benhnhan->tenbenh }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>id_giuong:</strong>
            {{ $benhnhan->id_giuong }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cơ sở y tế:</strong>
            {{ $benhnhan->id_csyt }}
        </div>
    </div>
</div>
@endsection
