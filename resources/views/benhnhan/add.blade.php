@extends('layouts.BNAD')

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
                Add a New Post <a href="{{ route('benhnhan.index') }}" class="btn btn-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('benhnhan.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Ho Ten</label>
                        <div class="col-sm-10">
                            <input type="text" name="hoten" id="hoten" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Dia Chi</label>
                        <div class="col-sm-10">
                            <input type="text" name="diachi" id="diachi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >SDT</label>
                        <div class="col-sm-10">
                            <input type="text" name="SDT" id="SDT" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >BirthDay</label>
                        <div class="col-sm-10">
                            <input type="date" name="BirthDay" id="BirthDay" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >StartDay</label>
                        <div class="col-sm-10">
                            <input type="date" name="StartDay" id="StartDay" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Benh ly</label>
                        <div class="col-sm-10">
                            <input type="text" name="tenbenh" id="tenbenh" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Id_giuong</label>
                        <div class="col-sm-10">
                            <select class="form-control input-width" name="id_giuong">
                                @foreach ($giuong as $giuongbenh)
                                <option value="{{ $giuongbenh->id }}" @if(old('id_giuong')==$giuongbenh->id)
                                    {{ "selected" }}
                                    @endif
                                    >{{ $giuongbenh->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Id_CSYT</label>
                        <div class="col-sm-10">
                            <select class="form-control input-width" name="id_csyt">
                                @foreach ($cosoyte as $csyt)
                                <option value="{{ $csyt->id }}" @if(old('id_csyt')==$csyt->id)
                                    {{ "selected" }}
                                    @endif
                                    >{{ $csyt->name }}</option>
                                @endforeach
                            </select>                        
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
