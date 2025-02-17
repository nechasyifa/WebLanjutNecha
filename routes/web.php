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
