@extends('layout.app')
@section('content')
    <ul class='nav nav-tabs'>
        <li class="nav-item"><a href="{{route('home.index')}}" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">User</a></li>
        <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Category</a></li>
        <li class="nav-item"><a href="{{route('movie.index')}}" class="nav-link">Movie</a></li>
    </ul>
@endsection