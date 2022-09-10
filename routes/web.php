<?php

use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\driverController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/show',[Controller::class, 'index']);

Route::get('/client-info', [clientController::class, 'index']);
Route::post('storeC',[clientController::class, 'storeC']);

Route::get('/driver-info', [driverController::class, 'index']);
Route::post('storeD',[driverController::class, 'storeD']);