<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // $movies = Movie::orderby('id', 'desc')->get();
        $movies = Movie::with('categories')
            ->orderBy('id', 'desc')
            ->get();
        return view('movies.list', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        // dd(111);
        // dd(request()->all());
        Movie::create(
            [
                'name' => request()->name,
                'date' => request()->date,
                'desc' => request()->desc,
            ]
        );
        // return view('categories.list'); don't like this
        return redirect('/movie');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    public function update($id)
    {
        $movie = Movie::find($id);
        $movie?->update([
            'name' => request()->name,
            'date' => request()->date,
            'desc' => request()->desc,
        ]);
        return redirect('/movie');
    }

    public function destroy($id)
    {
        // dd($id);
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movie');
    }
}
