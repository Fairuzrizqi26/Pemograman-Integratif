<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});

// Route definition...
Route::get('/aggregrate/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/culture', function () {
    return view('culture');
});
Route::get('/culture', [App\Http\Controllers\CultureController::class, 'index']);

Route::get('/Nasa', function () {
    return view('Nasa');
});
Route::get('/Nasa', [App\Http\Controllers\NasaController::class, 'index']);

Route::get('/Tekno', function () {
    return view('Tekno');
});
Route::get('/Tekno', [App\Http\Controllers\TeknoController::class, 'index']);


Route::get('/pokemon', function () {
    return view('pokemon');
});
Route::get('/show/{pokemon_name}', [NewsController::class, 'show']);


Route::get('/rsssafly', function () {
    return view('rsssafly');
});

