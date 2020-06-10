@extends('layouts.NSAD')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        <!-- Posts list -->
        @if(!empty($nhansu))
        <div class="row">

            <div class="pull-right">
                <a href="{{url('yte')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('nhansu.add') }}"> Add</a>
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
                        <th>BirthDay</th>
                        <th>StartDay</th>
                        <th>ID_LoaiNS</th>
                        <th>Cosoyte</th>

                        <th width="280px">Action</th>
                    </tr>

                    <!-- Table Body -->
                    <tbody>
                        @foreach($nhansu as $ns)
                        <tr>
                            <td>{{$ns->id}}</td>
                            <td>{{$ns->Name}}</td>
                            <td>{{$ns->BirthDay}}</td>
                            <td>{{$ns->StartDay}}</td>
                            <td>{{$ns->loaiNS->Name}}</td>
                            <td>{{$ns->cosoyte->name}}</td>
                            <td>
                                <a href="{{ route('nhansu.details', $ns->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('nhansu.edit', $ns->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('nhansu.delete', $ns->id) }}" class="label label-danger"
                                    onclick="return confirm('Are you sure to delete?')">Delete</a>
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