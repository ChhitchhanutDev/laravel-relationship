@extends('layout.app')
@section('content')
    <ul class='nav nav-tabs'>
        <li class="nav-item"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">User</a></li>
        <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link active">Category</a></li>
        <li class="nav-item"><a href="{{route('movie.index')}}" class="nav-link">Movie</a></li>
    </ul>

    <a class="btn btn-primary mt-2 mb-2" href="{{ route('category.create') }}" class="nav-link">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Desc</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->desc }}</td>
                    <td>
                        @include('categories.detail')
                        <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                        @include('categories.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection