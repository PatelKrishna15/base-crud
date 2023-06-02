@extends('welcome')
@section('content')
        <div class="container">
                <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="form-groutp">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" name="image" id="image" class="from-control">
                        </div>
                        <input type="submit" name="submit" type="submit">
                </form>
        </div>
@endsection
