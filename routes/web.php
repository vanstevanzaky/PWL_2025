<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('Selamat Datang');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/pesan', function () {
//     return 'selamat datang';
// });

// Route::get('/about', function () {
//     return '2341720101 STEVAN ZAKY SETYANT0';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// }); 

Route::get('/user/profile', function () {
    return 'Ini tadi profile kosongan lalu saya isi';
})->name('profile');



Route::get('/', [HomeController::class, 'index']);
Route::get('/hello', [HomeController::class, 'hello']);
Route::get('/world', [HomeController::class, 'world']);
Route::get('/pesan', [HomeController::class, 'pesan']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/user', [AboutController::class, 'user']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
Route::get('/post/{post}/comments/{comment}', [ArticleController::class, 'post']);

// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/greeting', function () {
     return view('hello', ['name' => 'Stevan Zaky']);
});
