<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; //menggunakan ItemController untuk menangani permintaan terkait item

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
    return view('welcome'); //menampilkan halaman welcome.blade.php saat pengguna mengakses URL utama "/"
});

Route::resource('items', ItemController::class); //membuat rute CRUD otomatis untuk resource 'items'

Route::get('/hello', function () {
    return 'Hello World';
}); //menampilkan "Hello World" ketika diakses melalui URL "/hello"

Route::get('/world', function () {
    return 'World';
}); //menampilkan "World" ketika diakses melalui URL "/world"

Route::get('/', function () {
    return ('Selamat Datang');
}); //menampilkan halaman "Selamat Datang" saat pengguna mengakses URL utama "/"

Route::get('/about', function () {
    return ("NIM: 2341720167 <br> Nama: Necha Syifa Syafitri");
}); //menampilkan halaman "NIM: 2341720167 dan Nama: Necha Syifa Syafitri" saat pengguna mengakses URL "/about"

Route::get('/user/{Necha}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
