@extends('layout.app')
@section('content')
    <div class="container">
        <form class="mt-4" action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="name" value="{{$category->name}}" type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" type="textarea" class="form-control" id="desc">{{$category->desc}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection