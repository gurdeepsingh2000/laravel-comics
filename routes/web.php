<?php

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
    $cards = config('comics');
    return view('HomePage',[
        'name' => 'Home',
        'comics' => $cards
    ]);
})->name('home');


Route::get('/card/{id}', function ($id) {
    $arrayIndex = $id - 1;

    $product = config('comics');

    return view("Product",[
        "arrayIndex" => $arrayIndex,
        "card" => $product
    ]);
})->name('product');
