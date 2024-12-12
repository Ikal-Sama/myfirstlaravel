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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Daniel"]);
});


Route::get('/teas', function () {
    $teas = [
        ["name" => "Don Mac Original", "price" => 50, "id" => 1],
        ["name" => "Don Mac Vanilla", "price" => 60, "id" => 2],
        ["name" => "Don Mac Choco", "price" => 60, "id" => 3],
    ];

    return view('teas.index', ['teas' => $teas]);
});


Route::get('/teas/{id}', function ($id) {
    $teas = [
        ["name" => "Don Mac Original", "price" => 50, "id" => 1],
        ["name" => "Don Mac Vanilla", "price" => 60, "id" => 2],
        ["name" => "Don Mac Choco", "price" => 60, "id" => 3],
    ];

    return view('teas.teadetail', ['tea' => $teas[$id - 1]]);
});
