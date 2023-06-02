
@extends('welcome')
@section('content')

<div class="container">
    <form action="{{route('update')}}" method="POST">
        @csrf
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="hidden" name="id" id="id" value="{{$data->id}}">
            <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}">
        </div>
        <input type="submit" name="submit" id="submit">
    </form>
</div>
@endsection

