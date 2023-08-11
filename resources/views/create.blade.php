
@extends('welcome')
@section('content')

<div class="container">
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label class="form-label">Stud_id</label>
            <input type="text" name="stud_id" id="stud_id" class="form-control">
        </div>
        <input type="submit" name="submit" id="submit">
    </form>
</div>
@endsection

