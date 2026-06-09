@extends('layout.app')
@section('content')
    <div class="container">
        <form class="mt-4" action="{{ route('movie.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="name" type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input name="date" type="date" class="form-control" id="date">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" type="textarea" class="form-control" id="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection