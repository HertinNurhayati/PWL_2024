<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);

//Route::get('/hello', [App\Http\Controllers\WelcomeController::class, 'hello']);
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/Selamat Datang', function () {
    return 'Selamat Datang';
});

//Route::get('/About', function () {
//    return '2241760025';
//});

Route::get('/user/{name}', function ($name) {
    return 'Hertin ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; });

//Route::get('/articles/{id}', function ($id) {
//    return 'Halaman Artikel dengan ID ' . $id;
//});


Route::get(	'/user/{name?}', function ($name=null) {
return 'Hertin '.$name;
});

Route::get( '/user/{name?}', function ($name='John') {
return 'Nama saya '.$name; });


use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy' ]);


Route::get('/greeting', function () {  	return
view('blog.hello', ['name' => 'Hertin']); });
