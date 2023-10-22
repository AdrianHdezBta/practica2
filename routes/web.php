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

Route::get('/', function () {
    return view('landing');
});

Route::get('images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404); // Devolver un error 404 si la imagen no se encuentra
    }
});
