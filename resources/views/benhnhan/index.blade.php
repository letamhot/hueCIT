@extends('layouts.BNAD')

@section('content')

<div class="row">
    <div class="pull-right">
        <a href="{{url('yte')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="pull-left">
        <a href="{{route('benhnhan.create')}}" class="btn btn-success">Add</a>
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
                <th>Ho ten</th>
                <th>Dia chi</th>
                <th>SDT</th>
                <th>BirthDay</th>
                <th>StartDay</th>
                <th>Benh ly</th>
                <th>Ten Giuong</th>
                <th>Co so y te</th>

                <th colspan="3" style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($benhnhan as $key => $bn)

            <tr>
                <td>{{++$key}}</td>
                <td>{{$bn->hoten}}</td>
                <td>{{$bn->diachi}}</td>
                <td>{{$bn->SDT}}</td>
                <td>{{$bn->BirthDay}}</td>
                <td>{{$bn->StartDay}}</td>
                <td>{{$bn->tenbenh}}</td>
                <td>{{$bn->giuongbenh->name}}</td>
                <td>{{$bn->cosoyte->name}}</td>
                <td><a href="{{ route('benhnhan.show', $bn->id) }}" class="btn btn-success"><i class="fa fa-window-restore" title="Detail"></a></td>
                <td><a href="{{ route('benhnhan.edit', $bn->id) }}" class="btn btn-warning"><i class="fa fa-edit" title="Edit"></i></a></td>
                <td><form action="{{ route('benhnhan.destroy', $bn->id) }}" method="POST">
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
@endsection