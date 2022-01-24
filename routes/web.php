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
    return view('welcome');
});

Route::get('/viewcreate', function () {
    return view('createbook');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//list all book
Route::get('/listbook', [App\Http\Controllers\createbook::class, 'listbook'])->name('listbook');

//create new book
Route::post('/createbook', [App\Http\Controllers\createbook::class, 'createBook'])->name('createBook');

//view edit book
Route::get('/vieweditbook{id}', [App\Http\Controllers\createbook::class, 'vieweditbook'])->name('vieweditbook');

//edit book
Route::get('/editbook{id}', [App\Http\Controllers\createbook::class, 'editbook'])->name('editbook');

//delete book
Route::get('/deletebook{id}', [App\Http\Controllers\createbook::class, 'deletebook'])->name('deletebook');
