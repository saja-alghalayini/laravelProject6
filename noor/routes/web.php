<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\http\Controllers\BlogController;
use App\http\Controllers\RequestsController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/seaech', [BookController::class, 'GetBook']);

Route::view('/request', 'request');

// Route::post('request/send', [BookController::class, 'fileUp']);

Route::get('request/send', [RequestsController::class, 'ask']);

Route::get('/ask', [RequestsController::class, 'displayAsk']);

Route::view('/respond', 'respond');

Route::post('/respond/send', [RequestsController::class, 'responder']);
 
Route::get('/book', [BookController::class, 'index']);

Route::get('/book/seaech', [BookController::class, 'GetBook']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// //////////       blog
Route::get('/blog', [BlogController::class, 'displayBlog']);
// Route::any('/image', [BlogController::class, 'storeimage']);
Route::post('/blogg', [BlogController::class, 'addBlog']);