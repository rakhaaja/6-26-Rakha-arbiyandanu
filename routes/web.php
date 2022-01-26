<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "nama" =>"Rakha arbiyandanu",
        "email" =>"rakhaarbiyandanu@gmail.com",
        "gambar" =>"bg 4.png"

    ]);
});

Route::get('/ gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/ contacts', ContactController::class);
    return view('contacts', [
        "title" => "Contacts"
    ]);



