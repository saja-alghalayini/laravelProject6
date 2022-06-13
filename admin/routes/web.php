<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
// use App\Http\Controllers\
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
Route::get('index', function () {
    return view('index');
});
    Route::get('users', function () {
        return view('users');
    });

    Route::get('volunteers', function () {
        return view('volunteers');
    });

    Route::get('blog', function () {
        return view('blog');
    });
    // Route::get('book', function () {
    //     return view('book');
    // });
    Route::get('/bookInsert', function () {
        return view('bookInsert');
    });


    Route::post('index/insert',[BookController::class,'insBook']);
    // Route::post('index/upBook',[BookController::class,'upBook']);
    Route::get('book',[BookController::class,'fetchall']);

    Route::get('bookUpdate/{id}',[BookController::class,'updateInfo']);
    // Route::get('bookUpdate',[BookController::class,'fetchspice']);
    Route::get('bookUpdate/{id}/up',[BookController::class,'upBook']);

    // Route::get('bookDelete/{id}',[BookController::class,'fetchall']);


    Route::get('bookDelete/{id}', [BookController::class, 'destroy']);
    Route::view("show","bookUpdate");