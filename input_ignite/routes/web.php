<?php

use App\Http\Controllers\nytbController;
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


Route::get('/nytb', [nytbController::class, 'create']);
Route::post('add', [nytbController::class, 'write']);
Route::get('/renungan', function () {
    return view(
        'layouts/formrenungan',
        ["title" => "Form Renungan"]
    );
});
Route::get('/', function () {
    return view(
        'home',
        ["title" => "Home"]
    );
});
Route::get('nytbtabel', [nytbController::class, 'index']);

Route::get('/renungantabel', function () {
    return view(
        'layouts/renungantabel',
        ["title" => "Tabel Renungan"]
    );
});
