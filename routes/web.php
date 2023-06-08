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

    $title = 'titolo repo';
    $cards = config( 'comics.card' );

    return view('welcome', compact( 'title', 'cards' ));
});
Route::get('/about', function () {

    $title = 'titolo about';

    return view('about', compact( 'title' ));
});
