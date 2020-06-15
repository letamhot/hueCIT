@extends('layouts.CSYT')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        <!-- Posts list -->
        @if(!empty($cosoyte))
        <div class="row">

            <div class="pull-right">
                <a href="{{url('yte')}}" class="btn btn-primary" style="float: left">Back</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('cosoyte.add') }}">Add</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Địa Chỉ</th>
                        <th>SDT</th>
                        <th>Loại Cơ Sở</th>
                        <th>Ngày Thành Lập</th>
                        <th colspan="3" style="text-align: center">Action</th>
                    </tr>

                    <!-- Table Body -->
                    <tbody>
                        @foreach($cosoyte as $csyt)
                        <tr>
                            <td>{{$csyt->id_csyt}}</td>
                            <td>{{$csyt->name}}</td>
                            <td>{{$csyt->diachi}}</td>
                            <td>{{$csyt->sdt}}</td>
                            <td>{{$csyt->loaiCS}}</td>
                            <td>{{$csyt->NgayTL}}</td>
                            <td><a href="{{ route('cosoyte.details', $csyt->id_csyt) }}" class="btn btn-success"><i class="fa fa-window-restore" title="Detail"></a></td>
                                <td><a href="{{ route('cosoyte.edit', $csyt->id_csyt) }}" class="btn btn-warning"><i class="fa fa-edit" title="Edit"></i></a></td>
                                <td><form action="{{ route('cosoyte.destroy', $csyt->id_csyt) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"
                                                onclick="return confirm('Are you sure to delete?')"><i class="fa fa-backspace"
                                                    title="Delete"></i></button>
                                        </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection