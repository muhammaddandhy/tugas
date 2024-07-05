<?php

// use App\Models\User;
// use App\Models\posts;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
// use Illuminate\Foundation\Bootstrap\RegisterProviders;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'nama' => 'Kelompok Hoha',
        'judul' => 'Tugas Akhir Pemrograman Web Lanjutan',
        'image' => 'a.jpg'
    ]);
});



Route::get('/post', [PostController::class, 'index']);
Route::get('post/{posts:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

//sudah ditangani oleh query di models
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('post', [
//         'title' => "Post By category : $category->name",
//         'active' => 'categories',
//         'post' => $category->post->load('category', 'author'),
//     ]);
// });

//suduah ditangani oleh model
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('post', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'post',
//         'post' => $author->post->load('category', 'author'),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/post', DashboardPostController::class)
->middleware('auth');