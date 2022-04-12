<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    // TEST
    Route::view('transactions', 'transactions')->name('transactions');
    Route::view('settings', 'settings')->name('settings');
    Route::view('logout', 'logout')->name('logout');
    // TEST
    
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::resource('destinations', DestinationController::class);
    Route::resource('events', EventController::class);

    Route::any('orders/status/{order}', [OrderController::class, 'status'])->name('orders.status');
    Route::resource('orders', OrderController::class);
});
