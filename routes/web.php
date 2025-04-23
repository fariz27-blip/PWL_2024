<?php

use Illuminate\Support\Facades\Route;

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

Route::get('hello', function () {
    return 'hello';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/about', function () {
    return 'NIM: 23552021037 <br> NAMA : MUHAMMAD FARIZ';
});

Route::get('/user/{nama}', function ($name) {
    return 'Nama saya Muhammad Fariz';
});

Route::get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'post ke 1' . $postId . ' komentar ke 8' . $commentId;
});

use App\Http\Controllers\WelcomeController;

Route::get('/articles', [WelcomeController::class, 'articles']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);