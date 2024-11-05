<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->prefix("/admin")->name("admin.")->group(function() {
    Route::get("/posts", [AdminPostController::class, "index"])->name("posts.index");
    Route::get("/posts/{id}", [AdminPostController::class, "show"])->name("posts.index");
    Route::get("/posts/create/{id}", [AdminPostController::class, "create"])->name("posts.create");
    Route::post("/posts", [AdminPostController::class, "store"])->name("posts.store");
});
