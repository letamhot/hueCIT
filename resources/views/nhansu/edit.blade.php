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
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $nhansu->name }}" class="form-control" placeholder="name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('birthDay')?' has-error':''}}">
                    <strong>BirthDay:</strong>
                    <input type="date" name="birthDay" value="{{ $nhansu->birthDay }}" class="form-control" placeholder="birthDay">
                    <span class="text-danger">{{$errors->first('birthDay')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('startDay')?' has-error':''}}">
                    <strong>StartDay:</strong>
                    <input type="date" name="startDay" value="{{ $nhansu->startDay }}" class="form-control" placeholder="startDay">
                    <span class="text-danger">{{$errors->first('startDay')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_LoaiNS')?' has-error':''}}">
                    <strong>id_LoaiNS:</strong>
                    <select class="form-control input-width" name="id_LoaiNS">
                        @foreach ($loaiNs as $loains)
                        <option value="{{ $loains->id }}" @if($loains->id == $nhansu->id_LoaiNS)
                            {{ 'selected' }}
                            @endif
                            >{{ $loains->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('id_LoaiNS')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_csyt')?' has-error':''}}">
                    <strong>Cơ sở y tế:</strong>
                    {{-- <input type="text" name="id_csyt" value="{{ $nhansu->id_csyt }}" class="form-control" placeholder="id_csyt"> --}}
                    <select class="form-control input-width" name="id_csyt">
                        @foreach ($cosoyte as $csyt)
                        <option value="{{ $csyt->id }}" @if($csyt->id == $nhansu->id_csyt)
                            {{ 'selected' }}
                            @endif
                            >{{ $csyt->name }}</option>
                        @endforeach
                    </select>
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
