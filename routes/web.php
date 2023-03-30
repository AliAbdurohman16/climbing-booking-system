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

Auth::routes(['verify' => true]);
Route::get('auth/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');
Route::get('auth/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleFacebookCallback');

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'mountain' => App\Http\Controllers\Backend\MountainController::class,
    ]);
});
