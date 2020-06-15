@extends('layouts.BNAD')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
        <!--   <div class="pull-left">
                <h2>Sửa tài khoản</h2>
            </div> -->
        <div class="pull-right">
            <a href="{{route('benhnhan.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
<br>
<form action="{{route('benhnhan.update',$benhnhan->id)}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="POST">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('hoten')?' has-error':''}}">
                <strong>Ho Ten:</strong>
                <input type="text" name="hoten" value="{{ $benhnhan->hoten }}" class="form-control" placeholder="hoten">
                <span class="text-danger">{{$errors->first('hoten')}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('diachi')?' has-error':''}}">
                <strong>Dia Chi:</strong>
                <input type="text" name="diachi" value="{{ $benhnhan->diachi }}" class="form-control"
                    placeholder="diachi">
                <span class="text-danger">{{$errors->first('diachi')}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('SDT')?' has-error':''}}">
                <strong>SDT:</strong>
                <input type="text" name="SDT" value="{{ $benhnhan->SDT }}" class="form-control" placeholder="SDT">
                <span class="text-danger">{{$errors->first('SDT')}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('BirthDay')?' has-error':''}}">
                <strong>BirthDay:</strong>
                <input  type="date"  name="BirthDay" value="{{ $benhnhan->BirthDay }}" id="BirthDay" class="form-control">

                <span class="text-danger">{{$errors->first('BirthDay')}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('StartDay')?' has-error':''}}">
                <strong>StartDay:</strong>
                <input type="date" name="StartDay" value="{{ $benhnhan->StartDay }}"  id="StartDay" class="form-control">
                <span class="text-danger">{{$errors->first('StartDay')}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('tenbenh')?' has-error':''}}">
                <strong>Benh ly:</strong>
                <input type="text" name="tenbenh" value="{{ $benhnhan->tenbenh }}" class="form-control"
                    placeholder="tenbenh">
                <span class="text-danger">{{$errors->first('tenbenh')}}</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_giuong')?' has-error':''}}">
                    <strong>Giuong:</strong>
                    <select class="form-control input-width" name="id_giuong">
                        @foreach ($giuong as $giuongbenh)
                        <option value="{{ $giuongbenh->id }}" @if($giuongbenh->id == $benhnhan->id_giuong)
                            {{ 'selected' }}
                            @endif
                            >{{ $giuongbenh->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('id_giuong')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('id_csyt')?' has-error':''}}">
                    <strong>Cơ sở y tế:</strong>
                    <select class="form-control input-width" name="id_csyt">
                        @foreach ($cosoyte as $csyt)
                        <option value="{{ $csyt->id_csyt }}" @if($csyt->id_csyt == $benhnhan->id_csyt)
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
        </div>
    </div>
</form>
@endsection
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script> --}}