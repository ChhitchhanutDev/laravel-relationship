@extends('layout.app')
@section('content')
    <ul class='nav nav-tabs'>
        <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link">User</a></li>
        <li class="nav-item"><a href="{{ route('category.index') }}" class="nav-link">Category</a></li>
        <li class="nav-item"><a href="{{ route('movie.index') }}" class="nav-link active">Movie</a></li>
    </ul>

    <a class="btn btn-primary mt-2 mb-2" href="{{ route('movie.create') }}" class="nav-link">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Desc</th>
                <th>Date</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->desc }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>
                        @foreach ($movie->categories as $index => $category)
                            <p>{{ $category->name }}</p>
                        @endforeach
                    </td>
                    <td>
                        @include('movies.detail')
                        <a href="{{ route('movie.edit', $movie->id) }}">Edit</a>
                        @include('movies.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection