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
                Add a New Post <a href="{{ route('nhansu.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('nhansu.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="Name" id="Name" class="form-control">
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
                        <label class="control-label col-sm-2" >id_LoaiNS</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_LoaiNS" id="id_LoaiNS" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Cơ sở y tế</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_csyt" id="id_csyt" class="form-control">
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