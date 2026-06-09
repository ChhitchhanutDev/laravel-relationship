<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// basic route
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/user', function () {
//     return view('user');
// });


//route home
Route::get('/home', [HomeController::class, 'index'])->name('home.index'); //route name:->name('user.index')

//route user
Route::get('/user', [UserController::class, 'index'])->name('user.index'); //route name:->name('user.index')
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{username}/{email}', [UserController::class, 'showUserInfo'])->name('user.show');

//route category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); 
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store'); 
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit'); 
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update'); 
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete'); 

//route movie
Route::get('/movie', [MovieController::class, 'index'])->name('movie.index'); 
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create'); 
Route::post('/movie', [MovieController::class, 'store'])->name('movie.store'); 
Route::get('/movie/edit/{id}', [MovieController::class, 'edit'])->name('movie.edit'); 
Route::put('/movie/{id}', [MovieController::class, 'update'])->name('movie.update'); 
Route::delete('/movie/{id}', [MovieController::class, 'destroy'])->name('movie.delete'); 
