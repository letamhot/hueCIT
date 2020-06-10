@extends('layouts.users')
@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{url('yte')}}" class="btn btn-primary">Back</a>
    </div>

    <div class="pull-left">
        <a href="{{route('post.create')}}" class="btn btn-success">Create New users</a>
    </div>
</div>
<br />

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $value)

            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td>
                    <a href="{{ route('post.show', $value->id) }}" class="label label-success">Show</a>
                    <a href="{{ route('post.edit', $value->id) }}" class="label label-warning">Edit</a>
                    <a href="{{ route('post.destroy', $value->id) }}" class="label label-danger"
                        onclick="return confirm('Are you sure to delete?')">Delete</a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection