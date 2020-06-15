@extends('layouts.users')
@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{url('yte')}}" class="btn btn-primary">Back</a>
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
                <th colspan="2" style="text-align: center">Action</th>
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
                    <a href="{{ route('post.show', $value->id) }}" class="btn btn-success"><i class="fa fa-window-restore" title="Detail"></a></td>
                        <td><form action="{{ route('post.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Are you sure to delete?')"><i class="fa fa-backspace"
                                    title="Delete"></i></button>
                        </form>
                    </td>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection