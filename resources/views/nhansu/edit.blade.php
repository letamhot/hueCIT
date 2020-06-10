@extends('layouts.NSAD')

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
                Edit Post <a href="{{ route('nhansu.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <form action="{{route('nhansu.update',$nhansu->id)}}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="POST">
        <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('Name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="Name" value="{{ $nhansu->Name }}" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('Name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('BirthDay')?' has-error':''}}">
                    <strong>BirthDay:</strong>
                    <input type="date" name="BirthDay" value="{{ $nhansu->BirthDay }}" class="form-control" placeholder="BirthDay">
                    <span class="text-danger">{{$errors->first('BirthDay')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('StartDay')?' has-error':''}}">
                    <strong>StartDay:</strong>
                    <input type="date" name="StartDay" value="{{ $nhansu->StartDay }}" class="form-control" placeholder="StartDay">
                    <span class="text-danger">{{$errors->first('StartDay')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_LoaiNS')?' has-error':''}}">
                    <strong>id_LoaiNS:</strong>
                    <input type="text" name="id_LoaiNS" value="{{ $nhansu->id_LoaiNS }}" class="form-control" placeholder="id_LoaiNS">
                    <span class="text-danger">{{$errors->first('id_LoaiNS')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_csyt')?' has-error':''}}">
                    <strong>Cơ sở y tế:</strong>
                    <input type="text" name="id_csyt" value="{{ $nhansu->id_csyt }}" class="form-control" placeholder="id_csyt">
                    <span class="text-danger">{{$errors->first('id_csyt')}}</span>
                </div>
            </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
