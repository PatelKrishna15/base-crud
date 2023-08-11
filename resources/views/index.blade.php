@extends('welcome')
@section('content')
{{-- <a href="{{route('imageupload.showimg')}}">show Image</a> --}}
<a href="{{route('create')}}" class="btn btn-dark mt-2">Add</a>
<div class="container">
  
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </div>
    <tbody>
        @foreach ($data as $user)
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td><a href="edit/{{$user->id}}">edit</a>
                <a href="delete/{{$user->id}}">delete</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>


{{ $data->links() }}
</div>
@endsection
