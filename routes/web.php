<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignInController;


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
    return view('Index');
});

Route::get('/community', function() {
    return view('Community');
});


Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'store']);

Route::get('/signin', [SignInController::class, 'index'])->name('signIn');
Route::post('/signin', [SignInController::class, 'store']);

Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');

Route::post('/logout', [SignInController::class, 'Logout']);