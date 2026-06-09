<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('movies')
            ->orderBy('id')
            ->get();; //Eloquent ORM
        // $categories = DB::table('categories')->get(); // Query builder
        // $categories = DB::select('SELECT * FROM categories'); // raw sql
        // dd($categories);
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        Category::create(
            [
                'name' => request()->name,
                'desc' => request()->desc,
            ]
        );
        return redirect('/category');
    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category?->update([
            'name' => request()->name,
            'desc' => request()->desc,
        ]);
        return redirect('/category');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
