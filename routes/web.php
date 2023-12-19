<?php

use App\Http\Controllers\Admin\MovieController;
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

Route::group(['prefix' => 'admin'], function(){
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');

    Route::get('/movie', [MovieController::class, 'index'])->name('admin.movie');
    Route::get('/movie/create', [MovieController::class, 'create'])->name('admin.movie.create');
});
